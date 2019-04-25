<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends MY_Model{

  public $table = 'products';

  public function get_customer_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('customer');
    $this->db->where('idcustomer',$id);
    return $this->db->get()->result_array();
  }

}
