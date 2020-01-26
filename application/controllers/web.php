<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url'); //untuk mengaktifkan helper url
	}
	public function index(){
		$data['judul']="halaman depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}
	public function about(){
		$data['judul']="halaman about";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}
}