<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This controller serves the management of the list of NGOs from which some PNC candidates regularly come from.
 * This list of NGOs appears in the following forms: create and edit a candidate (views/candidates/new & views/candidates/update).
 * Only the admin users can modify the list of NGOs. Normal users view the list in the forms just mentionned.
 * @copyright  Copyright (c) 2014-2017 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @since      0.1.0
 */

Class NGOs extends CI_Controller{

    public function __construct() {
        parent::__construct();
        log_message('debug', 'URI=' . $this->uri->uri_string());
        $this->session->set_userdata('last_page', $this->uri->uri_string());
        if($this->session->loggedIn === TRUE) {
            if ($this->session->isAdmin) {
                // The management of the list of NGOs is reserved for admin only
            } else {
                redirect('errors/privileges');
            }
        } else {
            redirect('connection/login');
        }
        $this->load->model('ngos_model');
    }

    /**
     * [updateListOfNGO updates the list of NGOs in the database according to the form inputs]
     * @return [array] Array of ID of the freshly created NGOs   
     */
    public function updateListOfNGO() {
        $nbRows = $this->input->post('nbRows');
        for ($i=0; $i < $nbRows; $i++) { 
            $ngoName = $this->input->post('rowNameNb'.$i);
            $ngoId = $this->input->post('rowNb'.$i);
            if ($ngoId == "") {
                $result[$i] = $this->ngos_model->addNGO($ngoName);  
            } else {
                $result[$i] = $this->ngos_model->updateNGO($ngoId, $ngoName);
            }
        }
        echo json_encode($result);
    }

    /**
     * [deleteNGO deletes a specific NGO from the list of NGOs]
     * @param  [int] $id of the NGO to delete
     * @return [boolean] true if the NGO has been successfully deleted
     */
	public	function deleteNGO($id){
        $NGOid = $this->input->post('NGOidToDelete');
		$result = $this->ngos_model->deleteNGO($NGOid);
		echo json_encode($result);
	}
}
?>
