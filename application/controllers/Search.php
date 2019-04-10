<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Search_model');
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



}
