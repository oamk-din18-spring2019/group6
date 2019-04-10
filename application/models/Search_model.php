<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model{
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function searching($keyword) {
    $this->db->like('productName',$keyword);
    $query  =   $this->db->get('products');
    return $query->result();
  }
}
