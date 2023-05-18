<?php
	class Doctor_model extends CI_model{

		
		function addDoctor($formArray){

			$this->db->insert('doctors',$formArray);
		}

		function viewDoctor(){
			
			$patients= $this->db->get('doctors')->result_array();
			return $patients;
		}

		
	}
?>