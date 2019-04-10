<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delivery_model extends CI_Model{
    public function getDelivery()
    {
      $this->db->select('iddelivery,idBills,firstname,lastname,streetAdress');
      $this->db->from('delivery');
      $this->db->join('bills', 'delivery.idBills=bills.idBills','inner');
      $this->db->join('customer', 'bills.idCustomer=customer.idCustomer', 'inner');
      return $this->db->get()->result_array();
    }
}
