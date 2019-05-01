<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
    $this->load->model('Bills_model');
  }

  function add()
  {
    $this->load->model('Cart_model');
    $id = $this->uri->rsegment('3');
    $products = $this->Cart_model->get_info($id);
    if(!products)
    {
      redirect();
    }
    $qty=1;
    $data = array();
    $data['id'] = $products->idproducts;
    $data['image'] = $products->image;
    $data['qty']=$qty;
    $data['name'] = $products->productName;
    $data['price'] = $products->price;
    $this->cart->insert($data);
    redirect(site_url('customer/cart/show_cart'));
  }
  function show_cart()
  {
    $carts = $this->cart->contents();
    $total_items = $this->cart->total_items();
    $this->data['carts'] = $carts;
    $this->data['total_items'] = $total_items;
    $this->data['page'] = 'customer/cart/show_cart';
    $this->load->view('menu/content',$this->data);

     //trả về product
  }
  function update()
  {
    $carts = $this->cart->contents();
    foreach($carts as $key => $row)
    {
      $updated_qty = $this->input->post('qty_'.$row['id']);
      $data=array();
      $data['rowid'] = $key;
      $data['qty'] = $updated_qty;
      $this->cart->update($data);
    }
    redirect(site_url('customer/cart/show_cart'));
  }
  function delete_item()
  {
    $id = $this->uri->rsegment(3);
    $id = intval($id);
    if ($id > 0)
    {
      $carts = $this->cart->contents();
      foreach ($carts as $key => $row) {
      if ($row['id'] == $id) {
        // code...
        $data = array();
        $data['rowid'] = $key;
        $data['qty'] = 0;
        $this->cart->update($data);
        }
      }
    }
    else{
      $this->cart->destroy();
    }
    redirect(site_url('customer/cart/show_cart'));
  }
  function buy()
  {
    $this->load->model('Cart_model');
    //find the max bill id
    $max_id = $this->Bills_model->get_id() ;
    $carts = $this->cart->contents();
    $bill_id = $max_id[0]['max(idBills)'] + 1;
    $idc= $_SESSION['id'];
    $customer_array = $this->Cart_model->get_customer_by_id($idc);
    foreach ($carts as $row) {
      $insert_data=array(
      'idbills'=>$bill_id,
      'idcustomer'=>$idc,
      'firstname'=>$customer_array[0]['firstname'],
      'lastname'=>$customer_array[0]['lastname'],
      'idproducts'=>$row['id'],
      'productName'=>$row['name'],
      'amount'=>$row['qty'],
      'totalOfMoney'=>$row['subtotal']
    );
    $bill_id = $bill_id + 1;
    $result=$this->Bills_model->add_bill($insert_data);
    }
    $this->cart->destroy();
    redirect(site_url('customer/cart/show_cart'));
  }


}
