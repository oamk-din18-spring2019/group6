
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
    $data['page']='admin/products/mainpage.php';
    $this->load->view('layout/layout',$data);
  }
  //chosen products
  function chosen_products()
  {
    $data['page']='admin/products/chosen_products.php';
    $this->load->view('layout/layout',$data);
  }

  //show products is here
  function show_products()
  {
    //search product
    $keysearch = $this->input->post('search');
    $data['product'] = $this->products_model->search_products($keysearch);

    //show product
    $data['products'] = $this->products_model->getProducts();

    $data['page']='admin/products/show_products';
    $this->load->view('layout/layout',$data);
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
    $data['page']='admin/products/add_form';
    $this->load->view('layout/layout',$data);
  }

  //delete products is here
   function show_delete($id)
   {
    $data['chosen_products']=$this->products_model->get_chosen($id);
    $data['page']='admin/products/delete_products';
    $this->load->view('layout/layout',$data);
  }
  function delete_products($id)
  {
    $this->products_model->delete_products($id);
    redirect('admin/products/show_products');
  }

  //edit products is here
  function show_edit($id)
  {
    $data['products']=$this->products_model->get_chosen($id);
    $data['current_id']=$id;
    $data['page']='admin/products/edit_products';
    $this->load->view('layout/layout',$data);
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
    redirect('admin/products/show_products');
  }

function add_form(){
  $data['page']='admin/products/add_form';
  $this->load->view('layout/layout',$data);
}
}
