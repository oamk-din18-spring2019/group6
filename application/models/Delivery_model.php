<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delivery_model extends CI_Model{

    public function searching($keyword) {
      $this->db->like('productName',$keyword);
      $query  =   $this->db->get('products');
      return $query->result();
    }

    public function getDelivery() {
      $this->db->select('iddelivery,idBills,firstname,lastname,streetAdress');
      $this->db->from('delivery');
      $this->db->join('bills', 'delivery.idBills=bills.idBills','inner');
      $this->db->join('customer', 'bills.idCustomer=customer.idCustomer', 'inner');
      return $this->db->get()->result_array();
    }
    public function add_customer($insert_data)  {
      $this->db->insert('delivery',$insert_data);
      return $this->db->affected_rows();
    }
    public function show_delivery()  {
      $this->db->select('*');
      $this->db->from('delivery');
      return $this->db->get()->result_array();
    }
    public function delete_delivery($id) {
    $this->db->where('iddelivery',$id);
    $this->db->delete('delivery');
    }
    public function edit_delivery($update_data,$id)  {
    $this->db->where('iddelivery',$id);
    $this->db->update('delivery',$update_data);
    return $this->db->affected_rows();
    }
    public function get_chosen($id) {
    $this->db->select('*');
    $this->db->from('delivery');
    $this->db->where('iddelivery',$id);
    return $this->db->get()->result_array();
    }
}
