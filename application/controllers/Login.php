<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
     class Login extends CI_Controller{

        function index(){

            $this->load->model('User_model');

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == false){
                $this->load->view('admin/login');
            }else{
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user = $this->User_model->doLogin($username,$password);

                //print_r($user);
                if(!empty($user)){
                    $this->session->set_userdata('user',$user);
                    redirect(base_url().'dashboard');
                }else{
                    $this->session->set_flashdata('errorMsg','Invalid Username/Password');
                    redirect(base_url().'login');
                }
            }
           
        }

        
    }
?>