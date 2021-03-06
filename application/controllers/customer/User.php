<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('cart');
    }
    
    public function profile() {

        if ($_SESSION['user_logged'] == FALSE) {

            $this->session->set_flashdata("error","Please login first to view");
            redirect('customer/Home/Login');


        }

        $this->load->view('customer/users/user_view');

    }

    public function show_profile() {
        $total_items = $this->cart->total_items();
        $data['total_items'] = $total_items;
        $username=$this->session->userdata('username');
        $data['profile'] = $this->User_model->get_detail($username);
        $data['page'] = 'customer/users/profile';
        $this->load->view('menu/content',$data);
    }

    public function edit_profile() {
        $insert_data = array(
            'firstname'=>$this->input->post('firstname'),
            'lastname' =>$this->input->post('lastname'),
            'streetAddress'=>$this->input->post('streetAddress'),
            'postalCode'=>$this->input->post('postalCode'),
            'phoneNumber'=>$this->input->post('phoneNumber'),
            'email'=>$this->input->post('email')
        );
       $result = $this->User_model->edit_profile($insert_data,$this->session->userdata['id']);
       if ( $result != false) {
        redirect('customer/User/show_profile');
       } 
    }

    function show_edit() {
       $total_items = $this->cart->total_items();
       $data['total_items'] = $total_items;
       $id = $_SESSION['id'];
       $data['editProfile'] = $this->User_model->get_chosen($id);
       $data['page'] = 'customer/users/edit_profile';
       $this->load->view('menu/content',$data);
    }
}