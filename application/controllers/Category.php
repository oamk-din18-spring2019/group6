<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Category_model');
    $this->load->library('cart');
  }


  function show_category()
  {
    $total_items = $this->cart->total_items();
    $data['total_items'] = $total_items;
    $data['category'] = $this->Category_model->get_id();
    $data['page'] = 'customer/category/show_category';
    $this->load->view('menu/content',$data);
  }

  function index()
  {
    $this->load->view('customer/category/show_category');
  }
}
