<?php 
class Zhuce extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

   function index(){
   	$data = array(
   			'username'=>'xiaoming',
   			);
   	
   	$state=$this->login_model->set_user($data);
   	if($state==1){
   		echo "зЂВсГЩЙІ";
   		 
   		
   	}else {
   		echo "зЂВсЪЇАм";
   	}
   	
   	
   }

	
	
	
}


?>