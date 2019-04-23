<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('users_model');
  }

  //show users is here
  function show_users()
  { 
    // //search product
    // $keysearch = $this->input->post('search');

    //show users
    $data['add'] = $this->users_model->getUsers();

    $data['page']='users/show_users';
    $this->load->view('menu/body',$data);
  }

  //add users is here
  function add_users()
  {	
  	$hashedPassword=password_hash($this->input->post('pass'),PASSWORD_DEFAULT);
    $insert_data=array(
      "username" => $this->input->post('user'),
      "password" => $hashedPassword,
      "email" => $this->input->post('email')
    );
    $result=$this->users_model->add_Users($insert_data);

      if ($result==1) 
      {
        $data['message']="Add users : Done!";
        // $data['message']=alert("Congragulation ...!!!");
      }
      else 
      {
        $data['message']="Something went wrong!";
        // $data['message']=alert("Something went wrong ...!!!");
      }
  	
	    $data['page']='users/add_users';
	    $this->load->view('menu/body',$data);
  }

  //log in is here
  function login()
	{

		$givenUsername=$this->input->post('username');
		$givenPassword=$this->input->post('psw');

		$db_password=$this->users_model->getPassword($givenUsername);
		if(password_verify($givenPassword, $db_password))
			{
				$_SESSION['logged_in']=true;
				$_SESSION['username']=$givenUsername;
				$data['page']='users/loginOK';
				$this->load->view('menu/body',$data);
			}
		else 
		{
				$_SESSION['logged_in']=false;
				redirect('products/mainpage');
		}
	}
}