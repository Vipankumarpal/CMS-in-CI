<?php 
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class Admin extends CI_Controller{


	 	public function dashboard(){
	 		$this->load->view('Admin/dashboard');
	 	}

	 	function signOut(){
            $this->session->unset_userdata('user');
            redirect(base_url().'login');
        }
	 }
?>