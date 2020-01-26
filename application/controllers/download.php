<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Download extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));
	}
	public function index(){

		$this->load->view('v_download');
	}
	public function aksi_download(){
		force_download('gambar/angkasa_pura_airports.png',NULL);
	}
}