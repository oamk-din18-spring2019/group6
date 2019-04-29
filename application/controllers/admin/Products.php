<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
  public function __construct()
   {
       parent::__construct();
       $this->load->model('products_model');//tải file model
   }
    /*
    * Trang dang danh sách sản phẩm
    */
   public function get_info()
   {
          //gan diều kiện cho câu truy vấn
      $id = 1;
          $products = $this->products_model->get_info($id);
          print_r($products);
   }
}
