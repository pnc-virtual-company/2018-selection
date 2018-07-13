<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This controller serves the user management pages and tools.
 * @copyright  Copyright (c) 2014-2017 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @since      0.1.0
 */

class Users extends CI_Controller {

    /**
     * Default constructor
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function __construct() 
    {
        parent::__construct();
        log_message('debug', 'URI=' . $this->uri->uri_string());
        
        if($this->session->loggedIn === FALSE) {
          redirect('session/login');
        } 
      $this->load->model('users_model');
    }

    /**
     * Display the list of all users
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function index() {
      if ($this->session->isAdmin) {
        $this->session->set_userdata('last_page', $this->uri->uri_string());
        
        $data['users'] = $this->users_model->getUsersAndRoles();
        $data['page_title'] = 'List of users';
        $data['activeLink'] = 'users';
        $data['flashPartialView'] = $this->load->view('templates/flash', $data, TRUE);
        $this->load->view('templates/header', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer', $data);
      } else {
        redirect('errors/privileges');
      }
    }

    /**
     * Set a user as active (TRUE) or inactive (FALSE)
     * @param int $id User identifier
     * @param bool $active active (TRUE) or inactive (FALSE)
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function active($id, $active) {
      $this->users_model->setActive($id, $active);
      $this->session->set_flashdata('msg', 'The user was successfully modified');
      redirect('users');
    }

    /**
     * Enable a user
     * @param int $id User identifier
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function enable($id) {
      $this->active($id, TRUE);
    }

    /**
     * Disable a user
     * @param int $id User identifier
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function disable($id) {
      $this->active($id, FALSE);
    }

    /**
     * Display a form that allows updating a given user
     * @param int $id User identifier (user to edit)
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function edit($id) {
      // Only available for admin users (editNormalUser function for normal users)
      if ($this->session->isAdmin) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page_title'] = 'Edit a user';
        $data['activeLink'] = 'users';  

        $this->form_validation->set_rules('firstname', 'Firstname', 'required|strip_tags');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|strip_tags');
        $this->form_validation->set_rules('login', 'Login', 'required|strip_tags');
        $this->form_validation->set_rules('email', 'Email', 'required|strip_tags');
        $this->form_validation->set_rules('role', 'Role', 'required');  

        $data['users_item'] = $this->users_model->getUsers($id);
        if (empty($data['users_item'])) {
          redirect('notfound');
        } 

        if ($this->form_validation->run() === FALSE) {
          $data['roles'] = $this->users_model->getRoles();
          $this->load->view('templates/header', $data);
          $this->load->view('menu/index', $data);
          $this->load->view('users/edit', $data);
          $this->load->view('templates/footer');
        } else {
          if (condition) {
            # code...
          }
          $this->users_model->updateUsers();
          $this->users_model->updateSession($id);
          $this->session->set_flashdata('msg', 'The user was successfully updated.');
          if (isset($_GET['source'])) {
            redirect($_GET['source']);
          } 
          else if ($this->session->id == $id) {
            redirect('candidates');
          }
          else {
            redirect('users');
          }
        }
      }
      else{
        redirect('errors/privileges');
      }
    }

    /**
    * Edit a normal user's profile
    *@param $id user identifier (user to edit)
    *@author Nuon Neourng <nuon.neourng@gmail.com>
    */
    public function editNormalUser($id) {
      // Normal user can only edit its information (=> Check if its his/ her ID)
      if ($this->session->id == "$id") {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page_title'] = 'Edit a user';
        $data['activeLink'] = 'users';  

        $this->form_validation->set_rules('firstname', 'Firstname', 'required|strip_tags');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|strip_tags');
        $this->form_validation->set_rules('login', 'Login', 'required|strip_tags');
        $this->form_validation->set_rules('email', 'Email', 'required|strip_tags'); 

        $data['users_item'] = $this->users_model->getUsers($id);
        if (empty($data['users_item'])) {
          redirect('notfound');
        } 

        if ($this->form_validation->run() === FALSE) {
          $data['roles'] = $this->users_model->getRoles();
          $this->load->view('templates/header', $data);
          $this->load->view('menu/index', $data);
          $this->load->view('users/editNormalUser', $data);
          $this->load->view('templates/footer');
        } else {
          $this->users_model->updateUsers();
          $this->users_model->updateSession($id);
          $this->session->set_flashdata('msg', 'The user was successfully updated.');
          redirect('candidates');
        }
      } else {
        redirect('errors/privileges');
      }
    }
    


    /**
     * Delete a user. Log it as an error.
     * @param int $id User identifier
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function delete($id) {
        //Test if user exists
      $data['users_item'] = $this->users_model->getUsers($id);
      if (empty($data['users_item'])) {
        redirect('notfound');
      } else {
        $this->users_model->deleteUser($id);
      }
      log_message('error', 'User #' . $id . ' has been deleted by user #' . $this->session->userdata('id'));
      $this->session->set_flashdata('msg', 'The user was successfully deleted');
      redirect('users');
    }

    /**
     * Reset the password of a user
     * Can be accessed by the user itself or by admin
     * @param int $id User identifier
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function reset($id) {

        //Test if user exists
      $data['users_item'] = $this->users_model->getUsers($id);
      if (empty($data['users_item'])) {
        log_message('debug', '{controllers/users/reset} user not found');
        redirect('notfound');
      } else {
        log_message('debug', 'Reset the password of user #' . $id);
        $this->users_model->resetPassword($id, $this->input->post('password'));
          //Send an e-mail to the user so as to inform that its password has been changed
        $user = $this->users_model->getUsers($id);
        $this->load->library('email');
        $this->load->library('parser');
        $data = array(
          'Title' => 'Your password was reset',
          'Firstname' => $user['firstname'],
          'Lastname' => $user['lastname'],
          'email' => $user['email']
        );
        $message = $this->parser->parse('emails/password_reset', $data, TRUE);

        if ($this->config->item('from_mail') != FALSE && $this->config->item('from_name') != FALSE ) {
          $this->email->from($this->config->item('from_mail'), $this->config->item('from_name'));
        } else {
          // $this->email->from('do.not@reply.me', 'LMS');
        // $password = $this->users_model->setUsers();
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');
            //Send an e-mail to the user so as to inform that its password has been rested
        // $this->email->to($user['email']);
        $email = $this->input->post('email');   
        $config = array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => 'vuthy.pouk@student.passerellesnumeriques.org',
          'smtp_pass' => 'vuthy12345',
          'charset' => 'utf-8',
          'wordwrap' => TRUE,
          'newline' => "\r\n"
        );
        $this->load->library('email',$config);
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('vuthy.pouk@student.passerellesnumeriques.org','Admin Selection Committee');
        $this->email->to($email);
        $this->email->subject('Reset Password');
        $this->email->message('Dear '.$firstname.' '.$lastname.', '."\r\n".
          'I would like to inform you that your password was reseted successfully'.
          ' you can login this new password to Selection committee application by username '.$userName.' and new password '.$password.''."\r\n".
          'best regards,'."\r\n".
          'Admin'
        );
        if ($this->email->send('email')) 
        {
          $this->session->set_flashdata('msg', 'The password was successfully reseted');
          redirect('users');
        }
        else {
         show_error($this->email->print_debugger());    
       }
      }
        // $this->email->to($user['email']);
        // s$subject = $this->config->item('subject_prefix');
        // $this->email->subject($subject . 'Your password was reset');
        // $this->email->message($message);
        // log_message('debug', 'Sending the reset email');
        // if ($this->config->item('log_threshold') > 1) {
        //   $this->email->send(FALSE);
        //   $debug = $this->email->print_debugger(array('headers'));
        //   log_message('debug', 'print_debugger = ' . $debug);
        // } else {
        //   $this->email->send();
        // }

          //Inform back the user by flash message
        $this->session->set_flashdata('msg', 'The password was successfully reset');
        if ($this->session->isAdmin) {
          log_message('debug', 'Redirect to list of users page');
          redirect('users');
        }
        else {
          log_message('debug', 'Redirect to homepage');
          redirect('home');
        }
      }

    }

    /**
     * Display the form / action Create a new user
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function create() {
      $this->load->helper('form');
      $this->load->library('form_validation');
      $data['page_title'] = 'Create a new user';
      $data['activeLink'] = 'users';
      $data['roles'] = $this->users_model->getRoles();

      $this->form_validation->set_rules('firstname', 'Firstname', 'required|strip_tags');
      $this->form_validation->set_rules('lastname', 'Lastname', 'required|strip_tags');
      $this->form_validation->set_rules('login', 'Login', 'required|strip_tags');
      $this->form_validation->set_rules('email', 'Email', 'required|strip_tags');
      $this->form_validation->set_rules('role[]', 'Role', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('users/create', $data);
        $this->load->view('templates/footer');
      } else {
        $password = $this->users_model->setUsers();
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $userName = $this->input->post('login');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
            //Send an e-mail to the user so as to inform that its account has been created
        $config = array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => 'sopheak.rith@student.passerellesnumeriques.org',
          'smtp_pass' => 'sopheak2018',
          'charset' => 'utf-8',
          'wordwrap' => TRUE,
          'newline' => "\r\n"
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('sopheak.rith@student.passerellesnumeriques.org','Admin Selection Committee');
        $this->email->to($email);
        $this->email->subject('Create an account');
        $this->email->message('Dear '.$firstname.' '.$lastname.', '."\r\n".
          'I would like to inform you that your account was created successfully'.
          ' you can login to Selection committee application by username '.$userName.' and password '.$password.''."\r\n".
          'best regards,'."\r\n".
          'Admin'
        );
        if ($this->email->send()) 
        {
          $this->session->set_flashdata('msg', 'The user was successfully created');
          redirect('users');
        }
        else {
         show_error($this->email->print_debugger());    
       }
     }
   }

    /**
     * Ajax endpoint : check login duplication
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function checkLoginByAjax() {
      $this->output->set_content_type('text/plain');
      if ($this->users_model->isLoginAvailable($this->input->post('login'))) {
        $this->output->set_output('true');
      } else {
        $this->output->set_output('false');
      }
    }

    /**
     * Action: export the list of all users into an Excel file
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function export() {
      $this->load->view('users/export');
    }
  }
