<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    
    public function profile() {

        if ($_SESSION['user_logged'] == FALSE) {

            $this->session->set_flashdata("error","Please login first to view");
            redirect('customer/Home/Login');


        }

        $this->load->view('customer/users/user_view');

    }

    public function show_profile() {
        $username=$this->session->userdata('username');
        $data['profile'] = $this->User_model->get_detail($username);
        $this->load->view('customer/users/profile',$data);
    }
}