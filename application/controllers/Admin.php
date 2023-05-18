<?php 
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class Admin extends CI_Controller{


	 	public function dashboard(){
	 		$this->load->view('Admin/dashboard');
	 	}

	 	// Appointment Controller

	 	public function appointment(){

	 		$this->load->model('Appointment_model');

	 		$appointments = $this->Appointment_model->appointment();

	 		$data = array();
			$data['appointments'] = $appointments;

			$this->load->view('Admin/appointment',$data);
		}

		// Patients Controllers

		public function addPatient(){
			$this->load->model('Patient_model');

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
				

				$this->Patient_model->addPatient($form_array);
				$this->session->set_flashdata('success','Patient Add Successfully!');
				redirect(site_url().'/Admin/viewPatient');
				
			}else{
				
				$this->load->view('Admin/addPatient');
			}
		}

		public function viewPatient(){

	 		$this->load->model('Patient_model');

	 		$patients = $this->Patient_model->viewPatient();

	 		$data = array();
			$data['patients'] = $patients;

			$this->load->view('Admin/viewPatient',$data);
		}

		function editPatient($id){

			$data = array();

			$patient = $this->Patient_model->getPatient($id);

			// print_r($blog); exit;
			if(empty($patient)){

				$this->session->set_flashdata('failure','Patient Not Found!');
				redirect (site_url().'/Admin/viewPatient');
			}

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
				
				

				$this->Patient_model->editPatient($id,$form_array);
				$this->session->set_flashdata('success','Patient Updated Successfully!');
				redirect(site_url().'/Admin/viewPatient');
				
			}else{
				$data['patient'] = $patient;
				$this->load->view('Admin/editpatient',$data);
			}

			
		}

		// Doctors Controllers

		public function addDoctor(){
			$this->load->model('Doctor_model');

			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('designation','Designation','trim|required');
			$this->form_validation->set_rules('age','Age','trim|required');
			$this->form_validation->set_rules('availability','Availability','trim|required');
			
			if($this->form_validation->run() == true){

				$form_array = array();
				
				$form_array['name'] = $this->input->post('name');
				$form_array['designation'] = $this->input->post('designation');
				$form_array['age'] = $this->input->post('age');
				$form_array['availability'] = $this->input->post('availability');

				$this->Doctor_model->addDoctor($form_array);
				$this->session->set_flashdata('success','Doctor Add Successfully!');
				redirect(site_url().'/Admin/viewDoctor');
				
			}else{
				
				$this->load->view('Admin/addDoctor');
			}
		}

		public function viewDoctor(){

	 		$this->load->model('Doctor_model');

	 		$doctors = $this->Doctor_model->viewDoctor();

	 		$data = array();
			$data['doctors'] = $doctors;

			$this->load->view('Admin/viewDoctor',$data);
		}

		// Logout Controller

	 	function signOut(){
            $this->session->unset_userdata('user');
            redirect(base_url().'login');
        }
	 }
?>