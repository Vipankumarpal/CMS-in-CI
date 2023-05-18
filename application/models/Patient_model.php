<?php
	class Patient_model extends CI_model{


		function addPatient($formArray){

			$this->db->insert('patients',$formArray);
		}

		function viewPatient(){
			
			$patients= $this->db->get('patients')->result_array();
			return $patients;
		}

		function editPatient($id,$array){
			$this->db->where('patient_id',$id);
			$this->db->update('patients',$array);

		}

		function getPatient($id){
			$this->db->where('patient_id',$id);
			$patient = $this->db->get('patients')->row_array();
			return $patient; 
		}

		
	}
?>