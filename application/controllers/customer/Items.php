<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Items_model');
  }

  function show_items()
  {
    $id = $this->uri->segment(4);
    $data['items'] = $this->Items_model->get_item($id);
    $data['page'] = 'customer/items/show_items';
    $this->load->view('menu/content',$data);
  }

  function index()
  {

  }

}
