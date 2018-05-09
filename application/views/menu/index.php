<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$activeLink = (isset($activeLink)) ? $activeLink :  "";?>
<!-- Start Menu bar -->
<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top sticky-top">


  <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/images/system_img/logo.png" alt="Logo" class="img-fluid max-width"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Candidates</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>c_student/allCandidate">List of candidates</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>c_student/view_candidate_info">New candidate</a>
          <a class="dropdown-item" href="#">Province distribution</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>Users">List of users</a>
          <a class="dropdown-item" href="<?php echo base_url();?>users/create">Create user</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <!-- <i class="mdi mdi-account"></i> Profile  -->
        <!-- <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4"> -->
          <a class="nav-link" href="#" data-toggle="modal" data-target="#profile">
            <i class="mdi mdi-account"></i>Profile</a>  
          <!-- </div> -->
        </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>connection/logout"><i class="mdi mdi-logout"></i>Logout</a>
              </li>
          </ul>
      </div>
</nav>
<br>
    <?php if($this->session->loggedIn === TRUE) { ?>
    <div class="navbar-collapse collapse navbar-right">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>connection/logout">
            <?php echo $this->session->fullname;?> <i class="mdi mdi-power"></i>
          </a>
        </li>
      </ul>
    </div>
    <?php } ?>
  </nav>
  <br>
<div class="container">
  <div class="modal fade" id="profile">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-justify">Profile detail</h4>
          </div>
          <div class="modal-body">
            <ul class="list-group">
              <li class="list-group-item">
                Firstname : <b>Admin</b>
              </li>
              <li class="list-group-item">
                Lastname : <b>Selection committee</b>
              </li>
              <li class="list-group-item">
                Gender : <b>Male</b>
              </li>
              <li class="list-group-item">
                Eamil : <b>admin@passerellesnumeriques.org</b>
              </li>
              <li class="list-group-item">
                Role : <b>Admin</b>
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-sm-6">
                <button type="button" class="btn btn-primary btn-block">Edit</button>
              </div>
              <div class="col-sm-6">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>