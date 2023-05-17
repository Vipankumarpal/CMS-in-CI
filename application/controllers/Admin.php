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

		public function addPatient(){
			$this->load->model('Appointment_model');

			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('gender','Gender','trim|required');
			$this->form_validation->set_rules('age','Age','trim|required');
			$this->form_validation->set_rules('contact','Contact','trim|required');
			$this->form_validation->set_rules('address','Address','trim|required');
			
			$this->form_validation->set_rules('reason_medician','Reason/Medician','trim|required');
			
			if($this->form_validation->run() == true){

				$form_array = array();
				
				$form_array['name'] = $this->input->post('name');
				$form_array['gender'] = $this->input->post('gender');
				$form_array['age'] = $this->input->post('age');
				$form_array['contact'] = $this->input->post('contact');
				$form_array['address'] = $this->input->post('address');
				$form_array['reason_medician'] = $this->input->post('reason_medician');
				

				$this->Appointment_model->addPatient($form_array);
				$this->session->set_flashdata('success','Patient Add Successfully!');
				redirect(site_url().'/Admin/viewPatient');
				
			}else{
				
				$this->load->view('Admin/addPatient');
			}
		}

		public function viewPatient(){

	 		$this->load->model('Appointment_model');

	 		$patients = $this->Appointment_model->viewPatient();

	 		$data = array();
			$data['patients'] = $patients;

			$this->load->view('Admin/viewPatient',$data);
		}

		
	 	function signOut(){
            $this->session->unset_userdata('user');
            redirect(base_url().'login');
        }
	 }
?>