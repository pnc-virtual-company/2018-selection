<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$activeLink = (isset($activeLink)) ? $activeLink :  "";?>
<!-- Start Menu bar -->
<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top sticky-top">

    <a class="navbar-brand" href="<?php echo base_url(); ?>welcome/displayContent"><img src="<?php echo base_url();?>assets/images/system_img/logo.png" alt="Logo" class="img-fluid max-width"></a>
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
            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="mdi mdi-account"></i> Profile </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                  <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
                                
                              </div>
                          </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>connection/logout"><i class="mdi mdi-logout"></i>Logout</a>
              </li>
          </ul>
      </div>
</nav>
<br>
