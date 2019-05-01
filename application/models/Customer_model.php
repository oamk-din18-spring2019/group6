<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getCustomer() {
        $this->db->select('*');
        $this->db->from("customer");
        return $this->db->get()->result_array();
    }
}