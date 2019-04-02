<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getDelivery()
  {
    $this->db->select('iddelivery,firstname,lastname,streetAddress,idBills');
    $this->db->from('customers');
    $this->db->join('delivery', 'customers.idBills=delivery.idBills', 'inner');
    $this->db->join('bills','customers.idCustomers=bills.idCustomers','inner');
    return $this->db->get()->result_array();
  }
}
