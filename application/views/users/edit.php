<?php
/**
 * This view allows to modify a user record.
 * @copyright  Copyright (c) 2014-2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      0.1.0
 */
?>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
     <div class="col-md-6">
       <div class="card">
         <div class="card-header bg-primary text-white">
           <h2 class="text-center">Edit user #<?php echo $users_item['firstname']; ?></h2>
         </div>
         <div class="card-body">
          <!-- start form -->
            <?php echo validation_errors(); ?>

            <?php
            $attributes = array('id' => 'target', 'class' => 'form-horizontal');
            echo form_open('users/edit/' . $users_item['id'], $attributes);
            ?>

                <input type="hidden" name="id" value="<?php echo $users_item['id']; ?>" />

                <div class="form-group">
                  <label class="control-label" for="firstname">Firstname</label>
                  <input id="firstname" type="text" class="form-control" name="firstname" value="<?php echo $users_item['firstname']; ?>" required />
                </div>

                <div class="form-group">
                  <label class="control-label" for="lastname">Lastname</label>
                  <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo $users_item['lastname']; ?>" required />
                </div>

                <div class="form-group">
                  <label class="control-label" for="login">Login</label>
                  <input id="login" type="text" class="form-control" name="login" value="<?php echo $users_item['login']; ?>" required />
                </div>

                <div class="form-group">
                  <label class="control-label" for="email">Email</label>
                  <input id="email" type="email" class="form-control" id="email" name="email" value="<?php echo $users_item['email']; ?>" required />
                </div>

                <div class="control-group">
                  <label class="control-label" for="role">Role</label>
                  <select class="form-control" name="role">
                  <?php foreach ($roles as $roles_item): ?>
                      <option value="<?php echo $roles_item['id'] ?>"<?php if ((((int)$roles_item['id']) & ((int) $users_item['role']))) echo "selected"?>><?php echo $roles_item['name'] ?></option>
                  <?php endforeach ?>
                  </select>
                </div>
                <br>
                </form>
                <div class="form-group">
                  <button id="update" class="btn btn-primary"><i class="mdi mdi-pencil"></i>&nbsp;Update</button>
                  &nbsp;
                  <a href="<?php echo base_url();?>users" class="btn btn-danger"><i class="mdi mdi-cancel"></i>&nbsp;Cancel</a>
                </div>
            </div>
          </div>
       </div>
    </div>
    <div class="col-md-3"></div>

    </div>
</div>
<br>

<script src="<?php echo base_url();?>assets/js/bootbox-4.4.0.min.js"></script>
<script type="text/javascript">
  //Check for mandatory fields
  function validate_form() {
      result = false;
      var fieldname = "";
      if ($('#firstname').val() == "") fieldname = "firstname";
      if ($('#lastname').val() == "") fieldname = "lastname";
      if ($('#login').val() == "") fieldname = "login";
      if ($('#email').val() == "") fieldname = "email";
      if (fieldname == "") {
          return true;
      } else {
          bootbox.alert('The field ' + fieldname + ' is mandatory.');
          return false;
      }
  }

/*
 * If the login has changed, this function will check if the new login is not used by another user
 * This functions calls the function checkLoginByAjax() (users controller) 
 */
$(function () {
      $('#update').click(function() {
        if (validate_form() == false) {
              //Error of validation
        } else {
          if ($("#login").val() != '<?php echo $users_item['login']; ?>') {
              $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>users/check/login",
              data: { login: $("#login").val() }
              })
              .done(function( msg ) {
                  if (msg == "true") {
                      $('#target').submit();
                  } else {
                      bootbox.alert('This login name is not available');
                  }
              });
        } else {
          $('#target').submit();
        }
      }
    });
});

</script>