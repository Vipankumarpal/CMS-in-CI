<?php
    class User_model extends CI_model{

        function doLogin($username,$password){
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $query = $this->db->get('users');

            //echo $this->db->last_query();

            $users = $query->row_array();
            return $users;
        }

    }
?>