<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrer extends CI_Controller {

 public function __construct() {

  parent::__construct();
  error_reporting(0);
    $this->data['theme']  = 'admin';
        $this->data['model'] = 'carrer';
  
}

public function self_data()
{
      $this->db->select('*');
      $data['group']=$this->db->get('tbl_yourself')->result_array();
      //print_r($data);
      //die();
     
      $this->data['page'] = 'your_self';
      $this->load->vars($this->data);
      $this->load->view($this->data['theme'].'/template');

  }
  
  }
