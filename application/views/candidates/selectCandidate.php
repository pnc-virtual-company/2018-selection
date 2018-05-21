<br>
<div class="container myContainer">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="card bg-primary p-20">
                <div class="media widget-ten" id="myCard">
                    <div class="card-body text-left text-white">
                        <h1 class="mdi mdi-account-outline text-default" style="font-size: 50px;"></h1>
                    </div>
                    <div class="card-body text-right text-white">
                        <h2 class="color-white">278</h2>
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
                            <h2 class="color-white">100</h2>
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
                            <h2 class="color-white">20</h2>
                            <p class="m-b-0">Provinces of selected candidate</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    
    
    <br>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
                <h1 class="text-center">List of Candidates</h1>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <a href="<?php echo base_url() ?>c_candidates/allCandidate"><button class="btn btn-default clearfix">All candidates</button></a>&nbsp;&nbsp;
                      <a href="<?php echo base_url() ?>c_candidates/selectedCandidate"><button class="btn btn-primary clearfix">Selected candidates</button></a>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="table-responsive-sm">
                    <table id="students" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>              
                                <th>Action</th>
                                <th>Name</th>
                                <th>Province</th>
                                <th>Gender</th>
                                <th>Global Grade</th>
                           
                            </tr>
                        </thead>
                        <tbody id="selected">

                        </tbody>
                        </table>
                  </div>
                </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <a href="<?php echo base_url() ?>c_student/view_candidate_info"">
                                <button id="addButton" class="btn btn-primary clearfix">
                                    <i class="mdi mdi-account-plus"></i>
                                &nbsp;New Candidate
                                </button>
                            </a>
                                <button id="exportButton" class="btn btn-primary text-white clearfix"><i class="mdi mdi-file-excel"></i>
                                &nbsp;Export to Excel
                                </button>
                            <a href="<?php echo base_url() ?>c_student/map">
                                <button id="mapButton" class="btn btn-primary clearfix"><i class="mdi mdi-map"></i>
                              &nbsp;Province Distribution</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                  <h1 class="text-center">Distribution</h1>
                  <canvas id="pie-chart" width="900" height="450"></canvas>
                </div>

            </div>
</div>
<br><br>
 <link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
 <!--We just need a JS file //-->
 <script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>


 <script type="text/javascript">
    $(document).ready(function() {
        AllselectCandidates();
    //Transform the HTML table in a fancy datatable
    $('#students').dataTable({
        stateSave: true,
    });

// list candidate that they have selected
    function AllselectCandidates(){
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>C_candidates/AllselectCandidates',
            async: false,
            dataType: 'json',
            success: function(data){
                var html = '';
                var id=1;
                var selected = "";
                for(i=0; i<data.length; i++){
                    if (data[i].can_global_grade ==="Failed") {
                        selected ="No";
                    }else{
                        selected = "Yes";
                    }
                    html +='<tr>'+
                                '<td>'+id+'</td>'+
                                '<td>'+
                                    '<a href="<?php echo base_url() ?>C_candidates/view_can_detail/'+data[i].can_id+'" class="mdi mdi-eye text-info" title="View candidate information" data="'+data[i].can_id+'"></a>&nbsp;'+
                                    '<a href="javascript:;" class="mdi mdi-pencil-box-outline text-success" title="Edit candidate information" data="'+data[i].can_id+'"></a>&nbsp;'+
                                    '<a href="javascript:;" class="mdi mdi-delete text-danger" title="Delete candidate information" data="'+data[i].can_id+'"></a>'+
                                '</td>'+
                                '<td>'+data[i].can_name+'</td>'+
                                '<td>'+data[i].province+'</td>'+
                                '<td>'+data[i].can_gender+'</td>'+
                                '<td>'+data[i].can_global_grade+'</td>'+
                                // '<td>'+ selected +'</td>'+

                            '</tr>';
                        id++;
                }
                $('#selected').html(html);
                
            },
            error: function(){
                alert('Could not get Data from Database');
            }
        });
    }

    //$("#frmResetPwd").alert();
    //$("#frmConfirmDelete").alert();

    //On showing the confirmation pop-up, add the user id at the end of the delete url action
    /*$('#frmConfirmDelete').on('show', function() {
        var link = "<?php echo base_url();?>users/delete/" + $(this).data('id');
        $("#lnkDeleteUser").attr('href', link);
    });*/

    //Display a modal pop-up so as to confirm if a user has to be deleted or not
    //We build a complex selector because datatable does horrible things on DOM...
    //a simplier selector doesn't work when the delete is on page >1
    $("#users tbody").on('click', '.confirm-delete',  function(){
        var id = $(this).parent().data('id');
        var link = "<?php echo base_url();?>users/delete/" + id;
        $("#lnkDeleteUser").attr('href', link);
        $('#frmConfirmDelete').modal('show');
    });

    $("#users tbody").on('click', '.reset-password',  function(){
        var id = $(this).parent().data('id');
        var link = "<?php echo base_url();?>users/reset/" + id;
        $("#formResetPwd").prop("action", link);
        $('#frmResetPwd').modal('show');
    });

    //Prevent to load always the same content (refreshed each time)
    /*$('#frmConfirmDelete').on('hidden', function() {
        $(this).removeData('modal');
    });
    $('#frmResetPwd').on('hidden', function() {
        $(this).removeData('modal');
    });*/
   
});

//pie chart
new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["A+", "A", "A-", "B+", "B","B-","Failed"],
      datasets: [{
        label: "Grade (distribution)",
        backgroundColor: ["#3cba9f","#3e95cd","#8e5ea2","#1565c0","#e8c3b9","#ffc107","#c45850"],
        data: [85 ,1267,100,784,433,200,1380]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Grade distribution'
      }
    }
});

</script>
