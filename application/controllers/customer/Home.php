<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{



  function index()
  {
      $data=array();
      $data['temp']= 'site/home/index';
      $this->load->view('site/layout',$data);
  }

}
