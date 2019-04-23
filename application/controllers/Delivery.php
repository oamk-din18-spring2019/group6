<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delivery extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Delivery_model');
  }
  function show_delivery() {
    $data['customer']=$this->Delivery_model->getDelivery();
    $data['page']='delivery/show_delivery';
    $this->load->view('menu/content',$data);
  }
  function search_form() {
    $data['page']='search/search_form';
    $this->load->view('menu/content',$data);
  }

  function searching_items() {
    $keyword = $this->input->post('keyword');
    $data['items'] = $this->Search_model->searching($keyword);
    $this->load->view('search/results_searching', $data);
  }
  function add_form() {
    $data['page']='search/add_form';
    $this->load->view('menu/content', $data);
  }
  function add_customer() {
    $insert_data=array(
      "iddelivery" => $this->input->post('iddelivery'),
      "idBills" => $this->input->post('idBills'),
      "firstname" => $this->input->post('firstname'),
      "lastname" => $this->input->post('lastname'),
      "streetAdress " => $this->input->post('streetAdress'),
      "date" => $this->input->post('date')
    );
    $result=$this->Delivery_model->add_customer($insert_data);
    if ($result==1) {
      $data['message']="You have added a new delivery";
    }
    else {
      $data['message']="Something went wrong!";
    }
    $data['page']='search/add_info';
    $this->load->view('menu/content',$data);
  }

}
