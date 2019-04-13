<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function get_id()
  {
    $this->db->select('*');
    $this->db->from('products');
    return $this->db->get()->result_array();
  }
}
