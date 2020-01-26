<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller{
	public function warna(){
		//echo "Mobil itu berwarna ". $this->uri->segment('3');
		echo "segment 1 adalah = ".$this->uri->segment('1')."<br/>";
		echo "segment 2 adalah = ".$this->uri->segment('2')."<br/>";
		echo "segment 3 adalah = ".$this->uri->segment('3')."<br/>";
		echo "segment 4 adalah = ".$this->uri->segment('4')."<br/>";
		echo "segment 5 adalah = ".$this->uri->segment('5')."<br/>";
	
	}
}