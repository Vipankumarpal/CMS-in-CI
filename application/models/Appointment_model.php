<?php
	class Appointment_model extends CI_model{

		function create($formArray){

			$this->db->insert('appointments',$formArray);
		}

		function appointment(){
			
			$appointments= $this->db->get('appointments')->result_array();
			return $appointments;
		}

		
	}
?>