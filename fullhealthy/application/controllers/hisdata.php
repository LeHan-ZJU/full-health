<?php 
class Hisdata extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('get_data');
		$this->load->library('session');
		$userid=$this->session->userdata('userid');
		if(!$userid){
			//echo "<script> alert('您的登陆状态已经失效，请重新登陆！');parent.location.href='http:192.185.2.37/~zhenhui/Taro/index.php/login';</script>";
		
		}
	}
	public function xinlv()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_xinlv($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Heart Rate';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}
	public function shuzhang()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_shuzhang($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Shu zhang ya';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}
	public function shousuo()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_shousuo($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Shou suo ya';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}

	public function kongfu()
	{
		$data['title']='Kong fu xue tang';
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_kongfu($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
		
		
	}

	public function canhou()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_canhou($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Can hou xue tang';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}

	public function danguchun()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_danguchun($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Zong dang gu chun';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}

	public function ganyou()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_ganyou($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Gan you san zhi';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}
	
	public function gaomidu()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_gaomidu($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Gao mi du zhi danbai';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}
	public function dimidu()
	{
		$userid=$this->session->userdata('userid');
		$data['data']=$this->get_data->get_dimidu($userid);
		//$data['data']=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
		$data['title']='Di mi du zhi dan bai';	
		if($data['data']!=NULL){
		$this->load->view('zhexian.php',$data);
		}
	}

}



