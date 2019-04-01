<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bills extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Bills_model');
  }
  function show_bills()
  {
    $data['bills'] = $this->Bills_model->get_bills();
    $data['page'] = 'bills/show_bills';
    $this->load->view('menu/content',$data);
  }
  function add_bill()
  {
    $insert_data=array(
      'idbills'=>$this->input->post('idb'),
      'idcustomer'=>$this->input->post('idc'),
      'firstname'=>$this->input->post('fn'),
      'lastname'=>$this->input->post('ln'),
      'idproducts'=>$this->input->post('idp'),
      'product_name'=>$this->input->post('pn'),
      'amount'=>$this->input->post('amount'),
      'totalOfMoney'=>$this->input->post('total')
    );
    $result=$this->Bills_model->add_bill($insert_data);
    if ($result==1) {
      $data['message']="You have added a new bill";
    }
    else {
      $data['message']="Something went wrong!";
    }
    $data['page']='bills/add_info';
    $this->load->view('menu/content',$data);
  }
  function add_form(){
    $data['page']='bills/add_form';
    $this->load->view('menu/content',$data);
  }
  function index()
  {
    echo 'dit me hung';
  }

}
