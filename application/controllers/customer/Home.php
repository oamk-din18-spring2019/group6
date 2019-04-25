<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('customer/users/login_view');
    }

    public function Login() {
        $this->load->view('customer/users/login_view');
    }

    public function Register() {
        $this->load->view('customer/users/register_view');
    }

}

?>
