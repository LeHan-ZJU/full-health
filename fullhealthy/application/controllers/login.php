<?php 
class login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user_check');
        $this->load->library('session');
	}
	
	function index(){
	$this->load->view('fullhealth/login_index.html');
		
	}
	
	function check(){
		$name=$_POST['username'];
		$password=$_POST['password'];
		$data=array( 'username'=>$name,'password'=>$password);	
		$user_id=$this->user_check->check_user($data);
		if(!$user_id){
			
		echo "<script> alert('输入的用户名或密码错误，请重新输入');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/login';</script>"; 
					 
		}
 		else{
 			$this->session->set_userdata('userid',$user_id);
 			$this->load->view('fullhealth/main_index.html');
		}	
	}

	
}

?>