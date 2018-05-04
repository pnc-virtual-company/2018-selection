
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                <h2 class="text-center">List All Candidates</h2>
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <a href="<?php echo base_url() ?>c_student/allCandidate"><button class="btn btn-primary clearfix">All Candidates</button></a>
                      <a href="<?php echo base_url() ?>c_student/selectedCandidate">
                        <button class="btn btn-success clearfix">Selected Candidates</button>
                    </a>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="table-responsive-sm">
                    <table id="students" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Province</th>
                                <th>Gender</th>
                                <th>Global Grade</th>
                                <th>Selected</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nuon</td>
                                <td>Bonteay Meanchey</td>
                                <td>Female</td>
                                <td>A</td>
                                <td>Yes</td>
                                <td>
                                    <a href="<?php echo base_url() ?>c_student/view_candidate_info"><i class="mdi mdi-eye text-info" title="View candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-pencil-box mdi-pencil-box-outline text-success" title="Edit candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-delete text-danger" title="Delete candidate"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>                      
                                <td>Vuthy</td>
                                <td>Pursat</td>
                                <td>Female</td>
                                <td>B</td>
                                <td>No</td>
                                <td>
                                    <a href="<?php echo base_url() ?>c_student/view_candidate_info"><i class="mdi mdi-eye text-info" title="View candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-pencil-box mdi-pencil-box-outline text-success" title="Edit candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-delete text-danger" title="Delete candidate"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Chan</td>
                                <td>Kompong Tom</td>
                                <td>Male</td>
                                <td>Failed</td>
                                <td>Yes</td>
                                <td>
                                    <a href="<?php echo base_url() ?>c_student/view_candidate_info"><i class="mdi mdi-eye text-info" title="View candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-pencil-box mdi-pencil-box-outline text-success" title="Edit candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-delete text-danger" title="Delete candidate"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sopheak</td>
                                <td>Preah Vihea</td>
                                <td>Male</td>
                                <td>B</td>
                                <td>No</td>
                                <td>
                                    <a href="<?php echo base_url() ?>c_student/view_candidate_info"><i class="mdi mdi-eye text-info" title="View candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-pencil-box mdi-pencil-box-outline text-success" title="Edit candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-delete text-danger" title="Delete candidate"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dakhen</td>
                                <td>Battambong</td>
                                <td>Male</td>
                                <td>A</td>
                                <td>Yes</td>
                                <td>
                                    <a href="<?php echo base_url() ?>c_student/view_candidate_info"><i class="mdi mdi-eye text-info" title="View candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-pencil-box mdi-pencil-box-outline text-success" title="Edit candidate"></i></a>&nbsp;
                                    <a href="#"><i class="mdi mdi-delete text-danger" title="Delete candidate"></i></a>
                                </td>
                            </tr>
                        </table>
                  </div>
                </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <button id="addButton" class="btn btn-success clearfix"><i class="mdi mdi-account-plus"></i>
                          &nbsp;New Candidate</button>
                          <button id="exportButton" class="btn btn-warning text-white clearfix"><i class="mdi mdi-file-excel"></i>&nbsp;Export to Excel</button>
                          <button id="mapButton" class="btn btn-primary clearfix"><i class="mdi mdi-map"></i>
                          &nbsp;Province Distribution</button>
                      </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
                  <h2 class="text-center">Among All Candidates</h2>
                  <canvas id="pie-chart" width="700" height="450"></canvas>
                </div>

            </div>
</div>

 <link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
 <!--We just need a JS file //-->
 <script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>


 <script type="text/javascript">
    $(document).ready(function() {
    //Transform the HTML table in a fancy datatable
    $('#students').dataTable({
        stateSave: true,
    });

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
