<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function get_item($id)
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('idproducts',$id);
    return $this->db->get()->result_array();
  }

}
