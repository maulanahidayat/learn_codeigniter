<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belajar extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
    }
    public function data_user(){
    $data['user']=$this->m_data->ambil_data()->result();
    $this->load->view('v_user',$data);
    }
    
}