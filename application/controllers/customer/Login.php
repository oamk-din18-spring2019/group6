<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUser() {

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('customer/users/login_view');

        } else {

            $this->load->model('User_model');
            $reslt = $this->User_model->checkLogin();

            if ($reslt != false) {

                //set session
                $username = $_POST['username'];
                $password = sha1($_POST['password']);

                //fetch from databse
                $this->db->select('*');
                $this->db->from('customer');
                $this->db->where(array('username' => $username , 'password' => $password));
                $query = $this->db->get();

                $user = $query->row();

                //if use exists
                if ($user->username) {

                    //login message
                    $this->session->set_flashdata("success","You are logged in");
                    $id = $this->User_model->get_id($user->username);
                    //set session variables
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['username'] = $user->username;
                    $_SESSION['id']= $id;
                    //redirect
                    redirect('category/show_category','refresh');

                }


            } else {

                //wrong credentials
                $this->session->set_flashdata('error','Username or Password invalid!');
                redirect('customer/Home/Login');

            }
        }

    }
    //logging out of a user
    public function logoutUser() {

        $_SESSION['user_logged'] = FALSE;
        $_SESSION["username"] = "";

		redirect('category/show_category');
	}
}
