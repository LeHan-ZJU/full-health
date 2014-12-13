<?php 
class Zhuce extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('insert_data');
        $this->load->library('session');
	}
	
	function index(){
	$this->load->view('fullhealth/zhuce.html');
		
	}
	
	function register(){
		$name=$_POST['username'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		if($password!=$repassword){
			echo "<script> alert('两次输入的密码不一致，请重新输入');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/zhuce';</script>";
		}
			
		$data=array( 'username'=>$name,'password'=>$password);	
		$user_id=$this->insert_data->insert_user($data);
		if(!$user_id){		
		echo "<script> alert('注册失败，请稍后再试');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/login';</script>"; 				 
		}
 		else{
 			
 			$this->session->set_userdata('userid',$user_id);
 			$this->load->view('fullhealth/main_index.html');
		}	
	}

	
}

?>