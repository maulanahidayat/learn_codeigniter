<?php
class Datauser extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('user_agent');
	}
	function index(){
		if($this->agent->browser()){
			$agent=$this->agent->browser().' '.$this->agent->version();
	}elseif($this->agent->is_mobile()){
		$agent=$this->agent->mobile();
	}else{
		$agent='data user gagal di dapatkan';
	}
	echo "di akses dari: <br/>";
	echo "Browser=".$agent."<br/>";
	echo "sistem operasi= ".$this->agent->platform()."<br/>"; // Platform info (Windows, Linux, Mac, etc.)
		//ip hanya muncul pada hosting
	echo "IP= ". $this->input->ip_address();
}
}