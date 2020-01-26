<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ngoding_lib extends CI_Controller{
	function index(){
		$this->load->library ('librariku');
		$this->librariku->nama_saya();
		echo "<br/>";
		$this->librariku->nama_kamu("Maulana Hidayat");
	}
}