<?php 
class User_check extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	
 public function check_user(Array $data=NULL){
		if($data!=NULL)
		{
		$query=$this->db->get_where('user',array('username'=>$data['username']));
		if ($query->num_rows()>0)
		{
			$row = $query->row_array();
			if($row['password']==$data['password']){
				 return TRUE;
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }
 }
 }
?>


