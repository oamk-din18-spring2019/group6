<?php
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
    }
    public function registerUser() {

        //validate  the data taken through the register form
        $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
        $this->form_validation->set_rules('firstname','First Name','required');
        $this->form_validation->set_rules('lastname','Last Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('streetAddress','Address','required');
        $this->form_validation->set_rules('postalCode','Postal Code','required');
        $this->form_validation->set_rules('contact','Phone number','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');

        if ($this->form_validation->run() == TRUE) {

        //load the model to connect to the db
        $this->load->model('User_model');
        $this->User_model->insertUser();

        //set message to be shown when registration is completed
        $this->session->set_flashdata('success','You are registered!');
        redirect('customer/Home/Register');

    } else {

        $this->load->view('customer/users/register_view');

        }
    }
}
?>