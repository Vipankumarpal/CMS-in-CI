<?php 
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class Admin extends CI_Controller{


	 	public function dashboard(){
	 		$this->load->view('Admin/dashboard');
	 	}

	 	public function appointment(){

	 		$this->load->model('Appointment_model');

	 		$appointments = $this->Appointment_model->appointment();

	 		$data = array();
			$data['appointments'] = $appointments;

			$this->load->view('Admin/appointment',$data);
		}

	 	function signOut(){
            $this->session->unset_userdata('user');
            redirect(base_url().'login');
        }
	 }
?>