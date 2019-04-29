<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delivery extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Delivery_model');
  }
  function show_delivery() {
    $data['customers']=$this->Delivery_model->getDelivery();
    $data['page']='admin/delivery/show_delivery';
    $this->load->view('layout/content',$data);
  }
  function search_form() {
    $data['page']='admin/delivery/search_form';
    $this->load->view('layout/content',$data);
  }
  function searching_items() {
    $keyword = $this->input->post('keyword');
    $data['items'] = $this->Search_model->searching($keyword);
    $this->load->view('admin/delivery/results_searching', $data);
  }
  function add_form() {
    $data['page']='admin/delivery/add_form';
    $this->load->view('layout/content', $data);
  }
  function add_customer() {
    $insert_data=array(
      "iddelivery" => $this->input->post('iddelivery'),
      "idBills" => $this->input->post('idBills'),
      "firstname" => $this->input->post('firstname'),
      "lastname" => $this->input->post('lastname'),
      "streetAdress " => $this->input->post('streetAdress'),
      "day" => $this->input->post('day')
    );
    $result=$this->Delivery_model->add_customer($insert_data);
    if ($result==1) {
      $data['message']="You have added a new delivery";
    }
    else {
      $data['message']="Something went wrong!";
    }
    $data['page']='admin/delivery/add_info';
    $this->load->view('layout/content',$data);
  }
  function show_maindelivery()  {
  $data['customers']=$this->Delivery_model->show_delivery();
  $data['page']='admin/delivery/show_maindelivery';
  $this->load->view('layout/content',$data);
  }
  function show_edit($id) {
   $data['customer']=$this->Delivery_model->get_chosen($id);
   $data['current_id']=$id;
   $data['page']='admin/delivery/edit_form';
   $this->load->view('layout/content',$data);
  }
  function edit_delivery() {
  //print_r($this->input->post());
  $id=$this->input->post('current_id');
  $update_data=array(
    "iddelivery" => $this->input->post('iddelivery'),
    "idBills" => $this->input->post('idBills'),
    "firstname" => $this->input->post('firstname'),
    "lastname" => $this->input->post('lastname'),
    "streetAdress" => $this->input->post('streetAdress'),
    "day" => $this->input->post('day'),
    );
  $result=$this->Delivery_model->edit_delivery($update_data,$id);
  if ($result==1) {
    //$data['message']="You have edited the student";
    redirect('admin/delivery/show_maindelivery');
    }
  else {
    $data['message']="Something went wrong!";
    $data['page']='admin/delivery/add_info';
    $this->load->view('layout/content',$data);
    }
  }
  function delete_customer($id)  {
   $this->Delivery_model->delete_delivery($id);
   redirect('admin/delivery/show_maindelivery');
 }
 function show_delete($id){
   $data['chosen_customer']=$this->Delivery_model->get_chosen($id);
   $data['page']='admin/delivery/delete_delivery';
   $this->load->view('layout/content',$data);
 }
}
