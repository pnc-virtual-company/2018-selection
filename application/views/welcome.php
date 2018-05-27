<br>
<style>
    #chartjs-tooltip 
    {
        opacity: 1;
        position: absolute;
        background: rgba(0, 0, 0, .7);
        color: #fff;
        font-size: 18px;
        border-radius: 3px;
        -webkit-transition: all .1s ease;
        transition: all .1s ease;
        pointer-events: none;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
    }
</style>
<div class="container myContainer">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="card bg-primary p-20">
                <div class="media widget-ten" id="myCard">
                    <div class="card-body text-left text-white">
                        <h1 class="mdi mdi-account-outline text-default" style="font-size: 50px;"></h1>
                    </div>
                    <div class="card-body text-right text-white" >
                        <h2 class="color-white" id="countCandidates"></h2>
                        <p class="m-b-0">All candidates</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="card bg-warning p-20">
                <div class="media widget-ten" id="myCard">
                    <div class="card-body text-left text-white">
                        <h1 class="mdi mdi-account-outline text-default" style="font-size: 50px;"></h1>
                        </div>
                        <div class="card-body text-right text-white">
                            <h2 class="color-white" id="countSelectedCandidates"></h2>
                            <p class="m-b-0">Selected candidates</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="card bg-success p-20">
                    <div class="media widget-ten" id="myCard">
                        <div class="card-body text-left text-white">
                            <h1 class="mdi mdi-map-marker text-default" style="font-size: 50px;"></h1>
                        </div>
                        <div class="card-body text-right text-white">
                            <h2 class="color-white" id="countProvinces"></h2>
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
                      <a href="<?php echo base_url() ?>c_candidates/index"><button class="btn btn-primary clearfix">All candidates</button></a>&nbsp;&nbsp;
                      <a href="<?php echo base_url() ?>c_candidates/selectedCandidates"><button class="btn btn-default clearfix">Selected candidates</button></a>
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
                        <a href="<?php echo base_url() ?>c_candidates/newCandidate" class="btn btn-primary clearfix" id="addButton" >
                            <i class="mdi mdi-account-plus"></i>
                            &nbsp;New candidate
                        </a>&nbsp;&nbsp;
                        <a href="<?php echo base_url() ?>c_candidates/export" class="btn btn-primary clearfix" id="Export" >
                            <i class="mdi mdi-file-excel"></i>
                            &nbsp;Export this list
                        </a>&nbsp;&nbsp;
                        <!-- <a href="<?php //echo base_url() ?>c_student/map">
                            <button id="mapButton" class="btn btn-primary clearfix"><i class="mdi mdi-map"></i>
                          &nbsp;Province distribution</button>
                        </a> -->
                    </div>
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                    <h1 class="text-center">Distribution</h1>
                    <br><br><br>
                    <canvas id="pie-chart" width="800" height="800"></canvas>
                    <div id="chartjs-tooltip">
                       <table></table>
                    </div>
                    <br>
                    <h1 class="text-center">Selected candidate</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="pie-chart1" width="800" height="900">  
                            </canvas>
                        </div>
                        <div class="col-md-6">
                            <canvas id="pie-chart2" width="800" height="900">
                            </canvas>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
    $(function() 
    {
    showAllCandidates();  /// call function showAllCandidates
    countAllCandidates();  /// call function countAllCandidates
    countSelectedCandidates();  /// call function countSelectedCandidates
    countProvinces(); /// call function countProvinces
    //Transform the HTML table in a fancy datatable
    $('#students').dataTable({
        stateSave: true,
    });
        //function count all candidates
        function countAllCandidates()
        {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>C_candidates/countCandidates',    
                async: false,
                dataType: 'json',
                success: function(data)
                {
                    var html = '';
                    for(i=0; i<data.length; i++)
                    {
                        html +=data[i].total;
                    }
                    $('#countCandidates').html(html);
                },
                error: function()
                {
                    alert('Could not count candidate from Database');
                }
            });
        }
        //function count selected candidates
        function countSelectedCandidates()
        {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>C_candidates/countSelectedCandidates',
                async: false,
                dataType: 'json',
                success: function(data)
                {
                    var html = '';
                    for(i=0; i<data.length; i++)
                    {
                        html +=data[i].totalSelected;
                    }
                    $('#countSelectedCandidates').html(html);
                },
                error: function()
                {
                    alert('Could not count selected candidate from Database');
                }
            });
        }
        //function count all provinces
        function countProvinces()
        {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>C_candidates/countProvinces',
                async: false,
                dataType: 'json',
                success: function(data)
                {
                    var html = '';
                    for(i=0; i<data.length; i++)
                    {
                        html +=data[i].totalProvinces;
                    }
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
                    url: '<?php echo base_url() ?>C_candidates/deleteCandidate',
                    data:{can_id:id},
                    dataType: 'json',
                    success: function(response)
                    {
                        if(response.success)
                        {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Candidate Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllCandidates();
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
        function showAllCandidates()
        {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?php echo base_url() ?>C_candidates/showAllCandidates',
                async: false,
                dataType: 'json',
                success: function(data)
                {
                    var html = '';
                    var id=1;
                    var selected = "";
                    for(i=0; i<data.length; i++){
                        if (data[i].can_global_grade ==="Failed") 
                        {
                            selected ="No";
                        }else{
                            selected = "Yes";
                        }
                        html +='<tr>'+
                                    '<td>'+id+'</td>'+
                                    '<td>'+
                                        '<a href="<?php echo base_url() ?>C_candidates/view_can_detail/'+data[i].can_id+'" class="mdi mdi-eye text-info" title="View candidate information" data="'+data[i].can_id+'"></a>&nbsp;'+
                                        '<a href="<?php echo base_url() ?>C_candidates/updateForm/'+data[i].can_id+'" class="mdi mdi-pencil-box-outline text-success item-edit" title="Edit candidate information" data="'+data[i].can_id+'"></a>&nbsp;'+

                                        '<a href="javascript:;" class="mdi mdi-delete text-danger item-delete" title="Delete candidate information" data="'+data[i].can_id+'"></a>'+
                                    '</td>'+
                                    '<td>'+data[i].can_name+'</td>'+
                                    '<td>'+data[i].province+'</td>'+
                                    '<td>'+data[i].can_gender+'</td>'+
                                    '<td>'+data[i].can_global_grade+'</td>'+
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
    
//pie chart of grade all candidates
    Chart.defaults.global.tooltips.custom = function(tooltip) {
    // Tooltip Element
    var tooltipEl = document.getElementById('chartjs-tooltip');
    // Hide if no tooltip
    if (tooltip.opacity === 0) 
    {
        tooltipEl.style.opacity = 0;
        return;
    }
    // Set caret Position
    tooltipEl.classList.remove('above', 'below', 'no-transform');
    if (tooltip.yAlign) 
    {
        tooltipEl.classList.add(tooltip.yAlign);
    } else {
        tooltipEl.classList.add('no-transform');
    }
    function getBody(bodyItem) {
        return bodyItem.lines;
    }
    // Set Text
    if (tooltip.body) 
    {
        var titleLines = tooltip.title || [];
        var bodyLines = tooltip.body.map(getBody);
        var innerHtml = '<thead>';

        titleLines.forEach(function(title) {
        innerHtml += '<tr><th>' + title + '</th></tr>';
    });
        innerHtml += '</thead><tbody>';

        bodyLines.forEach(function(body, i) 
        {
            var colors = tooltip.labelColors[i];
            var style = 'background:' + colors.backgroundColor;
            style += '; border-color:' + colors.borderColor;
            style += '; border-width: 5px';
            var span = '<span class="chartjs-tooltip-key" style="' + style + '"></span>';
            innerHtml += '<tr><td>' + span + body + '</td></tr>';
        });
        innerHtml += '</tbody>';
        var tableRoot = tooltipEl.querySelector('table');
        tableRoot.innerHTML = innerHtml;
    }
        var positionY = this._chart.canvas.offsetTop;
        var positionX = this._chart.canvas.offsetLeft;
       // Display, position, and set styles for font
        tooltipEl.style.opacity = 1;
        tooltipEl.style.left = positionX + tooltip.caretX + 'px';
        tooltipEl.style.top = positionY + tooltip.caretY + 'px';
        tooltipEl.style.fontFamily = tooltip._bodyFontFamily;
        tooltipEl.style.fontSize = tooltip.bodyFontSize;
        tooltipEl.style.fontStyle = tooltip._bodyFontStyle;
        tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';
    };
    new Chart(document.getElementById("pie-chart"),
    {
        type: 'pie',
        data: 
        {
            labels: 
            [
                "A+ ",
                "A ",
                "A- ",
                "B+ ",
                "B ",
                "Failed"
                ],
            datasets: 
            [{
                label: "Grade (distribution)",
                backgroundColor: ["#80ffcc","#6666ff","#99c2ff","#ffeb99","#c2c2a3","#ff4d4d"],
                data: 
                [
                    <?php foreach ($gradeAPlus as $gradeAPlus):?>
                    <?php echo $gradeAPlus->GradeAPlus; ?>  
                    <?php endforeach ?>,
                    <?php foreach ($gradeA as $gradeA):?>
                    <?php echo $gradeA->GradeA; ?>  
                    <?php endforeach ?>,
                    <?php foreach ($gradeAMinus as $gradeAMinus):?>
                    <?php echo $gradeAMinus->GradeAMinus; ?>  
                    <?php endforeach ?>,
                    <?php foreach ($gradeBPlus as $gradeBPlus):?>
                    <?php echo $gradeBPlus->GradeBPlus; ?>  
                    <?php endforeach ?>,
                    <?php foreach ($gradeB as $gradeB):?>
                    <?php echo $gradeB->GradeB; ?>  
                    <?php endforeach ?>,
                    <?php foreach ($gradeFailed as $gradeFailed):?>
                    <?php echo $gradeFailed->GradeFailed; ?>  
                    <?php endforeach ?>
                ]
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
                enabled: false  /// disabled tooltips
            }
        },
    });
        window.onload = function() {
        var ctx = document.getElementById('pie-chart').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };
    /// pie chart1 of gender selected candidates
    new Chart(document.getElementById("pie-chart1"), 
    {
        /// count the number of male selected candidates for display
        <?php foreach ($maleCount as $maleCount):?>
        <?php 
            $male = $maleCount->countMale;
        ?>  
        <?php endforeach ?>
        /// count the number of female selected candidates for display
        <?php foreach ($femaleCount as $femaleCount):?>
        <?php 
            $female = $femaleCount->countFemale; 
        ?>  
        <?php endforeach ?>
        type: 'pie',
        data: 
        {
            labels: ["Male", "Female"],
            datasets: 
            [{
                label: "Gender (distribution)",
                backgroundColor: ["#99ffff","#ff80bf"],
                data:
                [   
                    <?php 
                        $percentagMale = $male * 100 / ($male + $female); 
                        echo round($percentagMale, 2); //// show the number male into pie chart
                    ?>,
                    <?php
                        $percentagFemale = $female * 100 / ($male + $female); 
                        echo round($percentagFemale, 2); /// show the number of female into pie chart
                    ?>
                ]
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
                        return chartData.labels[tooltipItem.index] + ': ' + chartData.datasets[0].data[tooltipItem.index] + '%';
                    }
                }
            },
        }
    });
    // pie chart2 of ngo provenance selected candidates
    new Chart(document.getElementById("pie-chart2"), 
    {
        /// count the number of selected candidate from NGO
        <?php foreach ($ngo as $ngo):?>
        <?php 
            $fromNgo = $ngo->FromNGO;
        ?>  
        <?php endforeach ?>
        /// count the number of selected candidate not from NGO
        <?php foreach ($notNgo as $notNgo):?>
        <?php 
            $notFromNgo = $notNgo->NotFromNGO;
        ?>  
        <?php endforeach ?>
        type: 'pie',
        data: 
        {
            labels: ["Yes", "No"],
            datasets: 
            [{
                label: "NGO (provenance)",
                backgroundColor: ["#80ff80","#ff6666"],
                data: 
                [
                    <?php
                        $percentagFromNGO = $fromNgo * 100 / ($fromNgo + $notFromNgo); 
                        echo round($percentagFromNGO, 2); 
                          /// show percentages of selected candidates from NGO
                    ?>,
                    <?php
                        $percentagNotFromNGO = $notFromNgo * 100 / ($fromNgo + $notFromNgo); 
                        echo round($percentagNotFromNGO, 2);  /// show number of selected candidates not from NGO
                    ?>
                ]
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
                        return chartData.labels[tooltipItem.index] + ': ' + chartData.datasets[0].data[tooltipItem.index] + '%';
                    }
                }
            }
        }
    });
});
</script>


 
  