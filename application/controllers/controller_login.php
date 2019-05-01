<?php

class controller_login extends CI_Controller
{

    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){

        if ($this->session->userdata('login')==1) {
            redirect('controller_admin/index');
        }

        $this->load->view("login");
    }

    public function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login = $this->login_model->login_user($username,$password);

        if($login){

            $sess_data = array(
                'logged_in' => 1,
                'username' => $login->username
            );
            $this->session->set_userdata($sess_data);

            redirect('controller_admin/index');
        }
        else{
            $this->session->set_flashdata('alert','login_gagal');
            redirect('controller_login/index');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('controller_login/index');
    }

}