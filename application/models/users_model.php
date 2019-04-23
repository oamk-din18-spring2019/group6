<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  //het info users 
  public function getUsers()
  {
    $this->db->select('username,password,email');
    $this->db->from('users');
    return $this->db->get()->result_array();
  }

  //add users
  public function add_Users($insert_data)
  {
    $this->db->insert('users',$insert_data);
    return $this->db->affected_rows();
  }
  // get password for logging in
  public function getPassword($givenUsername)
    {
      $this->db->select('password');
      $this->db->from('users');
      $this->db->where('username',$givenUsername);
      return $this->db->get()->row('password');
    }
}
