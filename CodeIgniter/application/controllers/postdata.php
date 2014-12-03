<?php

class Postdata extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('insert_data');
	}
	
function insert_xueya(){
		$ssy=$_POST['field1'];
		$szy=$_POST['field2'];
		$xl=$_POST['field3'];
		$data=array( 'shousuo'=>$ssy,'shuzhang'=>$szy,'xinlv'=>$xl);				
		$state=$this->insert_data->insert_xueya($data);
		if($state){
			echo ("提交血压信息成功！");		
		}
 		else{
	    echo "血压信息提交失败！";				
		}	
	}
function insert_xuetang(){
		$kongfu=$_POST['field1'];
		$canhou=$_POST['field2'];
		$data=array( 'kongfu'=>$kongfu,'canhou'=>$canhou);
		$state=$this->insert_data->insert_xuetang($data);
		if($state){
			echo ("提交血糖信息成功！");
		}
		else{
			echo "血糖信息提交失败！";
		}
	}
function insert_xuezhi(){
		$danguchun=$_POST['field1'];
		$ganyou=$_POST['field2'];
		$gaomidu=$_POST['field3'];
		$dimidu=$_POST['field4'];
		$data=array( 'danguchun'=>$danguchun,'ganyou'=>$ganyou,'gaomidu'=>$gaomidu,'dimidu'=>$dimidu,);
		$state=$this->insert_data->insert_xuezhi($data);
		if($state){
			echo ("提交血脂信息成功！");
		}
		else{
			echo "血脂信息提交失败！";
		}
	}
	function insert_myquestion(){
		$type=$_POST['field1'];
		$content=$_POST['field3'];
		$data=array( 'type'=>$type,'content'=>$content);
		$state=$this->insert_data->insert_myquestion($data);
		if($state){
			echo ("提交问题成功！");
		}
		else{
			echo "问题提交失败！";
		}
	}
}

?>