<?php 
class Analyse extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
	$this->load->view('fullhealth/main_index.html');
		
	}
	function xueya(){
		$this->load->view('fullhealth/analyse-xueya.html');
	
	}
	function xuetang(){
		$this->load->view('fullhealth/analyse-xuetang.html');
	
	}
	function xuezhi(){
		$this->load->view('fullhealth/analyse-xuezhi.html');
	
	}
	function question(){
		$this->load->view('fullhealth/question.html');
	
	}
	function message(){
		$this->load->view('fullhealth/message.html');
	
	}
	function answer(){
		$this->load->view('fullhealth/answer.html');
	
	}
	function namechange(){
		$this->load->view('fullhealth/namechange.html');
	
	}
	function passwordchange(){
		$this->load->view('fullhealth/passwordchange.html');
	
	}
	function main(){
		$this->load->view('fullhealth/main_index.html');
	
	}
	function healthdata(){
		$this->load->view('fullhealth/healthdata.html');
	
	}
	function xueya_hisdata(){
		$this->load->view('fullhealth/xueya_hisdata.html');
	
	}
	function xuetang_hisdata(){
		$this->load->view('fullhealth/xuetang_hisdata.html');
	
	}
	function xuezhi_hisdata(){
		$this->load->view('fullhealth/xuezhi_hisdata.html');
	
	}
	

	
}

?>