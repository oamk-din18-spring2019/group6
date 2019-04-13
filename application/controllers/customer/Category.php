<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Category_model');
  }
  

  function show_category()
  {
    $data['category'] = $this->Category_model->get_id();
    $data['page'] = 'customer/category/show_category';
    $this->load->view('menu/content',$data);
  }

}
