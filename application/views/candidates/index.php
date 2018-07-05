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
<script src="<?php echo base_url();?>assets/js/Chart-2.7.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/index.js" base_url="<?php echo base_url();?>" candidateFilter="<?php echo $candidateFilter;?>""></script>