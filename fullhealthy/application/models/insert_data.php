<?php 
class Insert_data extends CI_Model{
	public function __construct(){
		$this->load->database();

	}
	public function insert_xueya(Array $data=NULL){
		
		if($data!=NULL)
		{

			$state=$this->db->insert('xueya',$data);
			if($state==1){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		else{
			return FALSE;
		}

	}
	public function insert_xuetang(Array $data=NULL){
	
		if($data!=NULL)
		{
	
			$state=$this->db->insert('xuetang',$data);
			if($state==1){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	
	}
	
	public function insert_xuezhi(Array $data=NULL){
	
		if($data!=NULL)
		{
	
			$state=$this->db->insert('xuezhi',$data);
			if($state==1){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	
	}	
	public function insert_myquestion(Array $data=NULL){
	
		if($data!=NULL)
		{
	
			$state=$this->db->insert('myquestion',$data);
			if($state==1){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	
	}
	
	public function insert_user(Array $data=NULL){
	
		if($data!=NULL)
		{
	
			$state=$this->db->insert('user',$data);
			if($state==1){
				$query=$this->db->get_where('user',array('username'=>$data['username']));			
				$row = $query->row_array();					
				return $row['id'];				
			}
			else {
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	
	}

// 	$query=$this->db->get_where('news',array('slug'=>$slug));
// 	return $query->row_array();
// public function set_news()
// {
// 	$this->load->helper('url');

// 	$slug = url_title($this->input->post('title'), 'dash', TRUE);

// 	$data = array(
// 			'title' => $this->input->post('title'),
// 			'slug' => $slug,
// 			'text' => $this->input->post('text')
// 	);

// 	return $this->db->insert('news', $data);
// }





}
?>