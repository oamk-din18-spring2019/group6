<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("Customer_model");
    }

    public function show_customer() {
        $data['customers'] = $this->Customer_model->getCustomer();
        $data['page'] = "admin/customers/show_customers";
        $this->load->view("layout/layout",$data);
    }
}
?>