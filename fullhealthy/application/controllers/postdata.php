<?php

class Postdata extends CI_Controller{
	
	
	function __construct(){
		parent::__construct();
		$this->load->model('insert_data');
		$this->load->library('session');
		$userid=$this->session->userdata('userid');
		if(!$userid){
			echo "<script> alert('您的登陆状态已经失效，请重新登陆！');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/login';</script>";

		}
		
	}
	
	
function insert_xueya(){
		$ssy=$_POST['field1'];
		$szy=$_POST['field2'];
		$xl=$_POST['field3'];
		$userid=$this->session->userdata('userid');
		$data=array( 'shousuo'=>$ssy,'shuzhang'=>$szy,'xinlv'=>$xl,'id'=>$userid);
		$state=$this->insert_data->insert_xueya($data);
		if($state){
			echo "<script> alert('提交血压信息成功');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/analyse-xueya.html';</script>";
				
		}
 		else{
			echo "<script> alert('提交血压信息失败');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/analyse-xueya.html';</script>";
 					}	
	}
function insert_xuetang(){
		$kongfu=$_POST['field1'];
		$canhou=$_POST['field2'];
		$userid=$this->session->userdata('userid');
		$data=array( 'kongfu'=>$kongfu,'canhou'=>$canhou,'id'=>$userid);
		$state=$this->insert_data->insert_xuetang($data);
		if($state){
			echo "<script> alert('提交血糖信息成功');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/analyse-xuetang.html';</script>";

		}
		else{
			echo "<script> alert('提交血糖信息失败');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/analyse-xuetang.html';</script>";

		}
	}
function insert_xuezhi(){
		$danguchun=$_POST['field1'];
		$ganyou=$_POST['field2'];
		$gaomidu=$_POST['field3'];
		$dimidu=$_POST['field4'];
		$userid=$this->session->userdata('userid');
		$data=array( 'danguchun'=>$danguchun,'ganyou'=>$ganyou,'gaomidu'=>$gaomidu,'dimidu'=>$dimidu,'id'=>$userid);
		$state=$this->insert_data->insert_xuezhi($data);
		if($state){
			echo "<script> alert('提交血脂信息成功');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/analyse-xuezhi.html';</script>";


		}
		else{
			echo "<script> alert('提交血脂信息失败');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/analyse-xuezhi.html';</script>";
		}
	}
	function insert_myquestion(){
		$type=$_POST['field1'];
		$content=$_POST['field3'];
		$userid=$this->session->userdata('userid');
		$data=array( 'type'=>$type,'content'=>$content,'id'=>$userid);
		$state=$this->insert_data->insert_myquestion($data);
		if($state){
			echo "<script> alert('提交问题成功');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/question.html';</script>";

		}
		else{
			echo "<script> alert('提交问题失败');parent.location.href='http://192.185.2.37/~zhenhui/Taro/index.php/question.html';</script>";

		}
	}
}

?>