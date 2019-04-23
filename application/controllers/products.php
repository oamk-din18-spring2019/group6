<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('products_model');
  }

  //main page
  function mainpage()
  {
    $data['products']=$this->products_model->getProducts();
    $data['page']='products/mainpage.php';
    $this->load->view('menu/body',$data);
  }

  //show products is here
  function show_products()
  { 
    //search product
    $keysearch = $this->input->post('search');
    $data['product'] = $this->products_model->search_products($keysearch);

    //show product
    $data['products'] = $this->products_model->getProducts();

    $data['page']='products/show_products';
    $this->load->view('menu/body',$data);
  }

  //search products is here
  // function search_products()
  // {
  //   $keysearch = $this->input->post('search');
  //   $data['product'] = $this->products_model->search_products($keysearch);
  //   $data['page']='products/search_products';
  //   $this->load->view('menu/body',$data);
  // }
 

  //add products is here
  function add_products()
  {
    $insert_data=array(
      "idproducts" => $this->input->post('id'),
      "productName" => $this->input->post('name'),
      "description" => $this->input->post('des'),
      "brand" => $this->input->post('brand'),
      "type" => $this->input->post('type'),
      "quantity" => $this->input->post('quantity'),
      "price" => $this->input->post('price'),
      "image" => $this->input->post('img')
    );
    $result=$this->products_model->add_products($insert_data);
    if ($result==1) 
    {
      $data['message']="Add products : Done!";
    }
    else 
    {
      $data['message']="Something went wrong!";
    }
    $data['page']='products/add_products';
    $this->load->view('menu/body',$data);
  }

  //delete products is here
   function show_delete($id)
   {
    $data['chosen_products']=$this->products_model->get_chosen($id);
    $data['page']='products/delete_products';
    $this->load->view('menu/body',$data);
  }
  function delete_products($id)
  {
    $this->products_model->delete_products($id);
    redirect('products/show_products');
  }

  //edit products is here
  function show_edit($id)
  {
    $data['products']=$this->products_model->get_chosen($id);
    $data['current_id']=$id;
    $data['page']='products/edit_products';
    $this->load->view('menu/body',$data);
  }

  function edit_products()
  {
    $id=$this->input->post('current_id');
    $update_data=array(
      "idproducts" => $this->input->post('id'),
      "productName" => $this->input->post('name'),
      "description" => $this->input->post('des'),
      "brand" => $this->input->post('brand'),
      "type" => $this->input->post('type'),
      "quantity" => $this->input->post('quantity'),
      "price" => $this->input->post('price'),
      "image" => $this->input->post('img')
    );
    $result=$this->products_model->edit_products($update_data,$id);
    redirect('products/show_products');
  }
}