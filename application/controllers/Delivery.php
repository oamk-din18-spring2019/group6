<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delivery extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Delivery_model');
  }
  function show_delivery()
  {
    $data['customer']=$this->Delivery_model->getDelivery();
    $data['page']='delivery/show_delivery';
    $this->load->view('menu/content',$data);
  }
}
