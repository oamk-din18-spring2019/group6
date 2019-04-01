<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bills_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function get_bills()
  {
    $this->db->select('*');
    $this->db->from('bills');
    return $this->db->get()->result_array();
  }
  public function add_bill($insert_data)
  {
    $this->db->insert('bills',$insert_data);
    return $this->db->affected_rows();
  }
}
