<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index(){
			$this->load->model('Appointment_model');

			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('contact','Contact','trim|required');
			$this->form_validation->set_rules('age','Age','trim|required');
			$this->form_validation->set_rules('appointment_date','Appointment Date','trim|required');
			$this->form_validation->set_rules('appointment_time','Appointment Time','trim|required');
			$this->form_validation->set_rules('message','Message','trim|required');
			
			if($this->form_validation->run() == true){

				$form_array = array();
				
				$form_array['name'] = $this->input->post('name');
				$form_array['email'] = $this->input->post('email');
				$form_array['contact'] = $this->input->post('contact');
				$form_array['age'] = $this->input->post('age');
				$form_array['appointment_date'] = $this->input->post('appointment_date');
				$form_array['appointment_time'] = $this->input->post('appointment_time');
				$form_array['message'] = $this->input->post('message');
				

				$this->Appointment_model->create($form_array);
				$this->session->set_flashdata('success','Message Sent Successfully!');
				redirect(site_url().'/Contact');
				
			}else{
				
				$this->load->view('Front/Contact');
			}
		}

		
}
