<br>
<div class="container myContainer">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card bg-primary p-20">
                <div class="media widget-ten" id="myCard" style="padding-top: 5px;">
                    <div class="card-body text-left text-white" style="padding-left: 7px; padding-right: 0px;">
                        <h1 class="mdi mdi-account-outline text-default" style="font-size: 50px;"></h1>
                    </div>
                    <div class="card-body text-right text-white" style="padding-left: 0px;">
                        <h2 class="color-white" id="countCandidates" style="margin-bottom: 0px;"></h2>
                        <p class="m-b-0">All candidates</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card bg-warning p-20">
                <div class="media widget-ten" id="myCard" style="padding-top: 5px;">
                    <div class="card-body text-left text-white" style="padding-left: 7px; padding-right: 0px;">
                        <h1 class="mdi mdi-account-outline text-default" style="font-size: 50px;"></h1>
                    </div>
                    <div class="card-body text-right text-white" style="padding-left: 0px;">
                        <h2 class="color-white" id="countSelectedCandidates" style="margin-bottom: 0px;"></h2>
                        <p class="m-b-0">Selected candidates</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card bg-success p-20">
                <div class="media widget-ten" id="myCard" style="padding-top: 5px;">
                    <div class="card-body text-left text-white" style="padding-left: 7px; padding-right: 0px;">
                        <h1 class="mdi mdi-map-marker text-default" style="font-size: 50px;"></h1>
                    </div>
                    <div class="card-body text-right text-white" style="padding-left: 0px;">
                        <h2 class="color-white" id="countProvinces" style="margin-bottom: 0px;"></h2>
                        <p class="m-b-0">Provinces of selected candidates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
            <h1 class="text-center">List of candidates</h1>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a href="<?php echo base_url() ?>candidates/index?value=allCandidates"><button class="btn btn-<?php echo $candidateFilter ? "default" : "primary"; ?> clearfix">All candidates</button></a>&nbsp;&nbsp;
                    <a href="<?php echo base_url() ?>candidates/index?value=selectedCandidates"><button class="btn btn-<?php echo $candidateFilter ? "primary" : "default"; ?> clearfix">Selected candidates</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="table-responsive-sm">
                    <table id="students" cellpadding="0" cellspacing="0" class="table table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Action</th>
                                <th>Full name</th>
                                <th>Provinces</th>
                                <th>Gender</th>
                                <th>Global grade</th>
                                <th>Selected</th>
                            </tr>
                        </thead>
                        <tbody id="showdata">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="<?php echo base_url() ?>candidates/newCandidate" class="btn btn-primary clearfix" id="addButton" >
                        <i class="mdi mdi-account-plus"></i>
                            &nbsp;New candidate
                    </a>&nbsp;&nbsp;
                    <a href="<?php echo base_url() ?>candidates/export?value=<?php echo $candidateFilter ? "selectedCandidates" : "allCandidates" ?> " class="btn btn-primary clearfix" id="Export" >
                        <i class="mdi mdi-file-excel"></i>
                            &nbsp;Export this list
                    </a>&nbsp;&nbsp;
                    <a href="<?php echo base_url() ?>candidates/map">
                        <button id="mapButton" class="btn btn-primary clearfix">
                            <i class="mdi mdi-map"></i>
                      &nbsp;Province distribution
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <h1 class="text-center">Among all candidates</h1>
            <canvas id="pie-chart" width="300" height="300"></canvas>
            <br>
            <div id="chartjs-tooltip">
                   <table></table>
            </div>
            <h2 class="text-center">Among selected candidates</h2>
            <div class="row">
                <div class="col-md-6">
                    <canvas id="pie-chart1" width="300" height="300"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="pie-chart2" width="300" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<!-- pop up delete -->
<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- /pop up delete -->
 <link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
 <!--We just need a JS file //-->
 <script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>


 <script type="text/javascript">

    $(function() {
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
            url: '<?php echo base_url() ?>candidates/countCandidates',
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
            url: '<?php echo base_url() ?>candidates/countSelectedCandidates',
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
            url: '<?php echo base_url() ?>candidates/countProvinces',
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
                url: '<?php echo base_url() ?>candidates/deleteCandidate',
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
                        alert('Error');
                    }
                },
                error: function()
                {
                    alert('Error deleting');
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
            url: '<?php echo base_url() ?>candidates/<?php echo $candidateFilter ? 'showSelected' : 'showAllCandidates'; ?>',
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
                    html +='<tr>'+
                                '<td>'+id+'</td>'+
                                '<td>'+
                                    '<a href="<?php echo base_url() ?>candidates/viewCandidateDetails/'+data[i].candidate_id+'" class="mdi mdi-eye text-info" title="View candidate information" data="'+data[i].candidate_id+'"></a>&nbsp;'+
                                    '<a href="<?php echo base_url() ?>candidates/updateForm/'+data[i].candidate_id+'" class="mdi mdi-pencil-box-outline text-success item-edit" title="Edit candidate information" data="'+data[i].candidate_id+'"></a>&nbsp;'+                                    '<a href="javascript:;" class="mdi mdi-delete text-danger item-delete" title="Delete candidate information" data="'+data[i].candidate_id+'"></a>'+
                                '</td>'+
                                '<td>'+data[i].candidate_name+'</td>'+
                                '<td>'+data[i].candidate_province+'</td>'+
                                '<td>'+data[i].candidate_gender+'</td>'+
                                '<td>'+data[i].candidate_global_grade+'</td>'+
                                '<td>'+ selected +'</td>'+
                            '</tr>';
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
        var link = "<?php echo base_url();?>users/delete/" + id;
        $("#lnkDeleteUser").attr('href', link);
        $('#frmConfirmDelete').modal('show');
    });
    $("#users tbody").on('click', '.reset-password',  function()
    {
        var id = $(this).parent().data('id');
        var link = "<?php echo base_url();?>users/reset/" + id;
        $("#formResetPwd").prop("action", link);
        $('#frmResetPwd').modal('show');
    });

    function loadGradeChart() {
        $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>candidates/countGrades',
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
                url: '<?php echo base_url() ?>candidates/countGender',
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
                url: '<?php echo base_url() ?>candidates/countNGOProvenance',
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

</script>