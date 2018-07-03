<?php
/**
 * This view allows to create a new employee
 * @copyright  Copyright (c) 2014-2017 Benjamin BALET
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
        <h1 class="text-center"><?php echo $page_title;?></h1>
        </div>
        <div class="card-body">
          <?php echo validation_errors(); ?>

          <?php
          $attributes = array('id' => 'target', 'class' => 'form-horizontal');
          echo form_open('users/create', $attributes); ?>

              <div class="form-group">
                <label class="control-label" for="firstname">Firstname</label>
                <input type="text" class="form-control" name="firstname" id="firstname" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="lastname">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="lastname" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="login">Login</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="login" id="login" required />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="role[]">Role</label>
                <select class="form-control" name="role[]" required>
                <?php foreach ($roles as $roles_item): ?>
                    <option value="<?php echo $roles_item['id'] ?>" <?php if ($roles_item['id'] == 2) echo "selected"; ?>><?php echo $roles_item['name'] ?></option>
                <?php endforeach ?>
                </select>
              </div>

              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" required />
                    <div class="input-group-append">
                      <a class="btn btn-primary" id="cmdGeneratePassword"><i class="mdi mdi-refresh"></i>&nbsp;Generate password</a>
                    </div>
                </div>
              </div>
        
          </form>

          <button id="send" class="btn btn-primary">
              <i class="mdi mdi-account-plus"></i> Create
          </button>
          &nbsp;
          <a href="<?php echo base_url(); ?>users" class="btn btn-danger">
            <i class="mdi mdi-cancel"></i>&nbsp;Cancel
          </a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>

</div>
</div>
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
      if ($('#password').val() == "") fieldname = "password";
      if (fieldname == "") {
          return true;
      } else {
          bootbox.alert('The field ' + fieldname + ' is mandatory.');
          return false;
      }
  }

  /**
   * Generate a password of the specified length
   * @param int len Length of password to be generated
   * @returns string generated password
   * @author Benjamin BALET <benjamin.balet@gmail.com>
   */
  function password_generator(len) {
      var length = (len)?(len):(10);
      var string = "abcdefghijklnopqrstuvwxyz";
      var numeric = '0123456789';
      var punctuation = '!@?/=';
      var password = "";
      var character = "";
      while(password.length < length) {
          entity1 = Math.ceil(string.length * Math.random() * Math.random());
          entity2 = Math.ceil(numeric.length * Math.random() * Math.random());
          entity3 = Math.ceil(punctuation.length * Math.random() * Math.random());
          hold = string.charAt(entity1);
          hold = (entity1 % 2 == 0)?(hold.toUpperCase()):(hold);
          character += hold;
          character += numeric.charAt( entity2 );
          character += punctuation.charAt( entity3 );
          password = character;
      }
      return password;
  }

  /**
   * Generate a login according to a pattern
   * @param string User's firstname
   * @param string User's lastname
   * @param string pattern of the combination
   * @param int max Maximum length of the generated login (default 32)
   * @returns string Combination of firstname and lastname
   * @author Benjamin BALET <benjamin.balet@gmail.com>
   */
  function generateLogin(firstname, lastname, pattern, max) {
      max = typeof max !== 'undefined' ? max : 32;
      var login = '';
      switch (pattern) {
          case 'jdoe':
              login = firstname.charAt(0).toLowerCase() + lastname.toLowerCase();
              break;
          case 'john.doe':
              login = firstname.toLowerCase() + '.' + lastname.toLowerCase();
              break;
          case 'john_doe':
              login = firstname.toLowerCase() + '_' + lastname.toLowerCase();
              break;
          default:
              if (pattern.indexOf('#') != -1) {
                  login = $(pattern).val();
              }
              break;
      }
      return login.substring(0, max);
  }

  $(function () {
      //Generate a random password
      $("#cmdGeneratePassword").click(function() {
          $("#password").val(password_generator(<?php echo $this->config->item('password_length');?>));
      });

      //On any change on firstname or lastname fields, automatically build the
      //login identifier with first character of firstname and the 31 first characters of lastname
      $("#firstname").change(function() {
          var login = generateLogin($("#firstname").val(), $("#lastname").val(), '<?php echo $this->config->item('login_pattern')!==FALSE?$this->config->item('login_pattern'):'jdoe';?>',32);
          $("#login").val(login);
      });
      $("#lastname").change(function() {
          <?php if ($this->config->item('disable_capitalization') === FALSE) {?>
          $("#lastname").val($("#lastname").val().toUpperCase());
          <?php }?>
          var login = generateLogin($("#firstname").val(), $("#lastname").val(), '<?php echo $this->config->item('login_pattern')!==FALSE?$this->config->item('login_pattern'):'jdoe';?>',32);
          $("#login").val(login);
      });

      //Compute automatically a login according to the rules of the configuration file
      $('#cmdRefreshLogin').click(function() {
          var login = generateLogin($("#firstname").val(), $("#lastname").val(), '<?php echo $this->config->item('login_pattern')!==FALSE?$this->config->item('login_pattern'):'jdoe';?>',32);
          $("#login").val(login);
      });

      // If the login has changed, this function will check if the new login is not used by another user
      // This functions calls the function checkLoginByAjax() (users controller) 
      $('#send').click(function() {
          if (validate_form() == false) {
              //Error of validation
          } else {
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
          }
      });
  });
</script>
