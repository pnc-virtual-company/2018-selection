/*!
 * index.js
 * 
 * Script used for the index page of the application.
 * The main focus of this functions are the table and the charts of the index page
 * 
 */

var base_url = document.currentScript.getAttribute("base_url");
var candidateFilter = document.currentScript.getAttribute("candidateFilter");

/* ------------------------------------------------------------------------------------- */
/* THE FOLLOWING SECTION GROUPS THE FUNCTIONS USED TO CREATE/ UPDATE/ DELETE A CANDIDATE */
/* ------------------------------------------------------------------------------------- */

$(document).ready(function(){

    // Display all candidates in the datatable
    showCandidates();
    // Count all candidates and fill the associated card 
    countAllCandidates();  
    // Count the selected candidates and fill the associated card
    countSelectedCandidates();
    // Count the number of provinces of the selected candidates and fill the associated card
    countProvinces(); 
    // Display the pie chart of grade distribution among all candidates
    loadGradeChart(); 
    // Display the pie chart of gender distribution among selected candidates
    loadGenderChart(); 
    // Display the pie chart of NGO provenance among selected candidates
    loadNGOChart(); 
    //Transform the HTML table in a fancy datatable
    $('#students').dataTable({
        stateSave: true,
    });
    var $gradeChart;
    var $genderChart;
    var $NGOChart;

    // Delete candidate
    $('#showdata').on('click', '.item-delete', function()
    {
        var id = $(this).attr('data');
        $('#deleteModal').modal('show');
        //prevent previous handler - unbind()
        $('#btnDelete').unbind().click(function()
        {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: base_url + 'candidates/deleteCandidate',
                data:{candidate_id:id},
                dataType: 'json',
                success: function(response)
                {
                    if(response.success)
                    {
                        $('#deleteModal').modal('hide');
                        $('.alert-success').html('Candidate Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                        showCandidates();
                        countAllCandidates();  
                        countSelectedCandidates();  
                        countProvinces(); 
                        grade.destroy();
                        loadGradeChart(); 
                        genderChart.destroy();
                        loadGenderChart(); 
                        NGOChart.destroy();
                        loadNGOChart(); 
                    } else {
                        alert("Error deleting");
                    }
                },
                error: function()
                {
                    alert("Error deleting");
                }
            });
        });
    });
});

// Display all candidates into datatable
function showCandidates()
{
    $.ajax({
        type: 'ajax',
        method: 'post',
        url: candidateFilter ? base_url + 'candidates/showSelected' : base_url + 'candidates/showAllCandidates',
        async: false,
        dataType: 'json',
        success: function(data)
        {
            var html = '';
            var id=1;
            var selected = "";
            for(i=0; i<data.length; i++)
            {
                if (data[i].candidate_global_grade == "Failed") 
                {
                    selected ="No";
                }
                else if (data[i].candidate_global_grade == "") {
                    selected = "";
                }
                else {
                    selected = "Yes";
                }
                html +=`<tr>
                            <td>${id}</td>
                            <td>
                                <a href="${base_url}candidates/viewCandidateDetails/${data[i].candidate_id}" class="mdi mdi-eye text-info" title="View candidate information" data="${data[i].candidate_id}"></a>&nbsp;
                                <a href="${base_url}candidates/updateForm/${data[i].candidate_id}" class="mdi mdi-pencil-box-outline text-success item-edit" title="Edit candidate information" data="${data[i].candidate_id}"></a>&nbsp; 
                                <a href="#" class="mdi mdi-delete text-danger item-delete" title="Delete candidate information" data="${data[i].candidate_id}"></a>
                            </td>
                            <td>${data[i].candidate_name}</td>
                            <td>${data[i].candidate_province}</td>
                            <td>${data[i].candidate_gender}</td>
                            <td>${data[i].candidate_global_grade}</td>
                            <td>${selected}</td>
                        </tr>`;
                    id++;
            }
            $('#showdata').html(html);
        },
        error: function()
        {
            alert('Could not get Data from Database');
        }
    });
}

// Count all the candidates and fill the associated card on the page
function countAllCandidates()
{
    $.ajax({
        type: 'ajax',
        url: base_url + 'candidates/countCandidates',
        async: false,
        dataType: 'json',
        success: function(data)
        {
            var html = '';
            html +=data[0].total;
            $('#countCandidates').html(html);
        },
        error: function()
        {
            alert('Could not count candidate from Database');
        }
    });
}

// Count all selected candidates and fill the associated card on the page
function countSelectedCandidates()
{
    $.ajax({
        type: 'ajax',
        url: base_url + 'candidates/countSelectedCandidates',
        async: false,
        dataType: 'json',
        success: function(data)
        {
            var html = '';
            html +=data[0].totalSelected;
            $('#countSelectedCandidates').html(html);
        },
        error: function()
        {
            alert('Could not count selected candidate from Database');
        }
    });
}

// Count all provinces of selected candidates and fill the associated card on the page
function countProvinces()
{
    $.ajax({
        type: 'ajax',
        url: base_url + 'candidates/countProvinces',
        async: false,
        dataType: 'json',
        success: function(data)
        {
            var html = '';
            html +=data[0].totalProvinces;
            $('#countProvinces').html(html);
        },
        error: function()
        {
            alert('Could not count provinces from Database');
        }
    });
}

// Load the pie chart showing the grade distribution among all candidates
function loadGradeChart() {
    $.ajax({
            type: 'ajax',
            url: base_url + 'candidates/countGrades',
            async: false,
            dataType: 'json',
            success: function(dataArray)
            {
                // First, the pie chart of the grade distribution
                gradeChart = new Chart(document.getElementById("pie-chart"),
                {
                    type: 'pie',
                    data: 
                    {
                        labels: 
                        ["A+", "A", "A-", "B+", "B", "Failed"],  
                        datasets: 
                        [{
                            label: "Grade distribution",
                            backgroundColor: ["#28a745","#33ff33","#ffff00","#ffc107","#ff6900","#EF3C3C"],
                            data: dataArray.slice(0,6)
                        }],       
                    },
                    options: 
                    {   
                        title: 
                        {
                            display: true,
                            text: ['Grade distribution', '(all candidates)'],
                            lineHeight: 1.4,
                            fontSize: 22,
                            fontColor:  '#000000',
                            fontFamily: 'Verdana',
                            fontStyle: 'normal'
                        },
                        legend: {
                            labels: {
                                fontSize: 15,
                                fontFamily: 'Verdana'
                            }
                        },
                        tooltips: 
                        {
                            callbacks: 
                            {
                                label: function(tooltipItem, chartData) 
                                {
                                    return chartData.labels[tooltipItem.index] + ': ' + dataArray[tooltipItem.index] + ' (' + Math.round(dataArray[tooltipItem.index] * 100 / dataArray[6]) + '%)';
                                }
                            },
                            bodyFontFamily: 'Verdana',
                            bodyFontSize: 13,
                            yPadding: 8
                        }
                    },
                }); 
            },
            error: function()
            {
                alert("Could not load the chart of candidates' grade distribution");
            }
        });
}

// Load the pie chart showing the gender distribution among all candidates
function loadGenderChart() {
    $.ajax({
            type: 'ajax',
            url: base_url + 'candidates/countGender',
            async: false,
            dataType: 'json',
            success: function(dataArray)
            {
                // Pie chart of gender distribution among selected candidates
                genderChart = new Chart(document.getElementById("pie-chart1"), 
                {
                    type: 'pie',
                    data: 
                    {
                        labels: ["M", "F"],
                        datasets: 
                        [{
                            label: "Gender distribution",
                            backgroundColor: ["#007bff","#ffc107"],
                            data: dataArray.slice(0,2)
                        }]
                    },
                    options: 
                    {
                        title: 
                        {
                            display: true,
                            text: ['Gender distribution','(selected candidates)'],
                            lineHeight: 1.4,
                            fontSize: 22,
                            fontColor:  '#000000',
                            fontFamily: 'Verdana',
                            fontStyle: 'normal'
                        },
                        legend: {
                            labels: {
                                fontSize: 15,
                                fontFamily: 'Verdana'
                            }
                        },
                        tooltips: 
                        {
                            callbacks: 
                            {
                                label: function(tooltipItem, chartData) 
                                {
                                    return chartData.labels[tooltipItem.index] + ': ' + dataArray[tooltipItem.index + 2] + ' (' + dataArray[tooltipItem.index] + '%)';
                                }
                            },
                            bodyFontFamily: 'Verdana',
                            bodyFontSize: 13,
                            yPadding: 8
                        }
                    }
                });
            },
            error: function()
            {
                alert("Could not load the chart of candidates' grade distribution");
            }
        });
}

// Load the pie chart showing the NGO provenance distribution among all candidates
function loadNGOChart() {
    $.ajax({
            type: 'ajax',
            url: base_url + 'candidates/countNGOProvenance',
            async: false,
            dataType: 'json',
            success: function(dataArray)
            {
                // Pie chart of ngo provenance distribution among selected candidates
                NGOChart = new Chart(document.getElementById("pie-chart2"), 
                {
                    type: 'pie',
                    data: 
                    {
                        labels: ["Yes", "No"],
                        datasets: 
                        [{
                            label: "NGO provenance",
                            backgroundColor: ["#28a745","#EF3C3C"],
                            data: dataArray.slice(0,2)
                        }]
                    },
                    options: 
                    {
                        title: 
                        {
                            display: true,
                            text: ['NGO provenance','(selected candidates)'],
                            lineHeight: 1.4,
                            fontSize: 22,
                            fontColor:  '#000000',
                            fontFamily: 'Verdana',
                            fontStyle: 'normal'
                        },
                        legend: {
                            labels: {
                                fontSize: 15,
                                fontFamily: 'Verdana'
                            }
                        },
                        tooltips: 
                        {
                            callbacks: 
                            {
                                label: function(tooltipItem, chartData) 
                                {
                                    return chartData.labels[tooltipItem.index] + ': ' + dataArray[tooltipItem.index + 2] + ' (' + dataArray[tooltipItem.index] + '%)';
                                }
                            },
                            bodyFontFamily: 'Verdana',
                            bodyFontSize: 13,
                            yPadding: 8
                        }
                    }
                });
            },
            error: function()
            {
                alert("Could not load the chart of candidates' grade distribution");
            }
        });
}