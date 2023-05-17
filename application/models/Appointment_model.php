<?php
	class Appointment_model extends CI_model{

		function create($formArray){

			$this->db->insert('appointments',$formArray);
		}

		function appointment(){
			
			$appointments= $this->db->get('appointments')->result_array();
			return $appointments;
		}

		function addPatient($formArray){

			$this->db->insert('patients',$formArray);
		}

		function viewPatient(){
			
			$patients= $this->db->get('patients')->result_array();
			return $patients;
		}

		
	}
?>