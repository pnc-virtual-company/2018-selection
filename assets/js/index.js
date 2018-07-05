/*!
 * index.js
 * 
 * Script used for the index page of the application.
 * The main focus of this functions are the table and the charts of the index page
 * 
 */

var base_url = document.currentScript.getAttribute("base_url");
var candidateFilter = document.currentScript.getAttribute("candidateFilter");


$(document).ready(function(){
    showCandidates();  /// call function showAllCandidates
    countAllCandidates();  /// call function countAllCandidates
    countSelectedCandidates();  /// call function countSelectedCandidates
    countProvinces(); /// call function countProvinces
    loadGradeChart(); // Load the chart of grade distribution
    loadGenderChart(); // Load the chart of gender distribution of selected candidates
    loadNGOChart(); // Load the chart of NGO provenance distribution of selected candidates
    //Transform the HTML table in a fancy datatable
    $('#students').dataTable({
        stateSave: true,
    });
    var $gradeChart;
    var $genderChart;
    var $NGOChart;
});

// Function count all the candidates
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

//function count all selected candidates
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

//function count all provinces of selected candidates
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

//function to delete candidate
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
                    countAllCandidates();  /// call function countAllCandidates
                    countSelectedCandidates();  /// call function countSelectedCandidates
                    countProvinces(); /// call function countProvinces
                    gradeChart.destroy();
                    loadGradeChart(); // Load the chart of grade distribution
                    genderChart.destroy();
                    loadGenderChart(); // Load the chart of gender distribution of selected candidates
                    NGOChart.destroy();
                    loadNGOChart(); // Load the chart of NGO provenance distribution of selected candidates
                }else{
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

//function to show all candidates into datatable
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

//Display a modal pop-up so as to confirm if a user has to be deleted or not
//We build a complex selector because datatable does horrible things on DOM...
//a simplier selector doesn't work when the delete is on page >1
$("#users tbody").on('click', '.confirm-delete',  function()
{
    var id = $(this).parent().data('id');
    var link = base_url + "users/delete/" + id;
    $("#lnkDeleteUser").attr('href', link);
    $('#frmConfirmDelete').modal('show');
});
$("#users tbody").on('click', '.reset-password',  function()
{
    var id = $(this).parent().data('id');
    var link = base_url + "users/reset/" + id;
    $("#formResetPwd").prop("action", link);
    $('#frmResetPwd').modal('show');
});

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
                            backgroundColor: ["#00cc00","#bfff00","#ffff00","#ffd11a","#ff9900","#ff471a"],
                            data: dataArray.slice(0,6)
                        }],       
                    },
                    options: 
                    {   
                        title: 
                        {
                            display: true,
                            text: 'Grade distribution',
                            fontSize: 20
                        },
                        tooltips: 
                        {
                            callbacks: 
                            {
                                label: function(tooltipItem, chartData) 
                                {
                                    return chartData.labels[tooltipItem.index] + ': ' + dataArray[tooltipItem.index] + ' (' + dataArray[tooltipItem.index] * 100 / dataArray[6] + '%)';
                                }
                            }
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
                            backgroundColor: ["#0066cc","#ffcc99"],
                            data: dataArray.slice(0,2)
                        }]
                    },
                    options: 
                    {
                        title: 
                        {
                            display: true,
                            text: 'Gender distribution',
                            fontSize: 20
                        },
                        tooltips: 
                        {
                            callbacks: 
                            {
                                label: function(tooltipItem, chartData) 
                                {
                                    return chartData.labels[tooltipItem.index] + ': ' + dataArray[tooltipItem.index + 2] + ' (' + dataArray[tooltipItem.index] + '%)';
                                }
                            }
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
                            backgroundColor: ["#80ff80","#ff6666"],
                            data: dataArray.slice(0,2)
                        }]
                    },
                    options: 
                    {
                        title: 
                        {
                            display: true,
                            text: 'NGO provenance',
                            fontSize: 20
                        },
                        tooltips: 
                        {
                            callbacks: 
                            {
                                label: function(tooltipItem, chartData) 
                                {
                                    return chartData.labels[tooltipItem.index] + ': ' + dataArray[tooltipItem.index + 2] + ' (' + dataArray[tooltipItem.index] + '%)';
                                }
                            }
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