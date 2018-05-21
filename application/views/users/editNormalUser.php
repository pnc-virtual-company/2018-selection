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
            $attributes = array('class' => 'form-horizontal');
            echo form_open('users/editUser/' . $users_item['id'], $attributes);
            ?>

                <input type="hidden" name="id" value="<?php echo $users_item['id']; ?>" />

                <div class="form-group">
                  <label class="control-label" for="firstname">Firstname</label>
                  <input type="text" class="form-control" name="firstname" value="<?php echo $users_item['firstname']; ?>" required />
                </div>

                <div class="form-group">
                  <label class="control-label" for="lastname">Lastname</label>
                  <input type="text" class="form-control" name="lastname" value="<?php echo $users_item['lastname']; ?>" required />
                </div>

                <div class="form-group">
                  <label class="control-label" for="login">Login</label>
                  <input type="text" class="form-control" name="login" value="<?php echo $users_item['login']; ?>" required />
                </div>

                <div class="control-group">
                  <label class="control-label" for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $users_item['email']; ?>" required />
                </div>

                  <br>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="mdi mdi-pencil"></i>&nbsp;Update</button>
                      &nbsp;
                      <a href="<?php echo base_url();?>users" class="btn btn-danger"><i class="mdi mdi-cancel"></i>&nbsp;Cancel</a>
                  </div>
            
            </form>
              </div>
           <!-- end form -->
         </div>
       </div>
     </div>
     <div class="col-md-3"></div>
</div>
</div>
<br>