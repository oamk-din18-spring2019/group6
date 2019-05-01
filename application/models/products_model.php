<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function getProducts()
  {
    $this->db->select('idproducts,productName,description,brand,type,quantity,price,image');
    $this->db->from('products');
    return $this->db->get()->result_array();
  }

  public function search_products($keysearch)
  {
    $this->db->like('idproducts',$keysearch);
    $this->db->or_like('productName',$keysearch);
    $this->db->or_like('brand',$keysearch);
    $this->db->or_like('type',$keysearch);
    $this->db->or_like('price',$keysearch);
    return $this->db->get('products')->result_array();
  }

  public function add_products($insert_data)
  {
    $this->db->insert('products',$insert_data);
    return $this->db->affected_rows();
  }

  public function get_chosen($id)
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->where('idproducts',$id);
    return $this->db->get()->result_array();
  }

  public function delete_products($id)
  {
    $this->db->where('idproducts',$id);
    $this->db->delete('products');
  }

   public function edit_products($update_data,$id)
   {
    $this->db->where('idproducts',$id);
    $this->db->update('products',$update_data);
    return $this->db->affected_rows();
   }

}