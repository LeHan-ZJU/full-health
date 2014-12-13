<?php 
class Get_data extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	
 public function get_xinlv($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('xinlv');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xueya');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->xinlv;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }
	   
	   
 public function get_shuzhang($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('shuzhang');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xueya');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->shuzhang;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }	   

 public function get_shousuo($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('shousuo');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xueya');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->shousuo;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }

 public function get_kongfu($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('kongfu');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xuetang');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->kongfu;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }

 public function get_canhou($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('canhou');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xuetang');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->canhou;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }

 public function get_danguchun($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('danguchun');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xuezhi');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->danguchun;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }
	  
 public function get_ganyou($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('ganyou');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xuezhi');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->ganyou;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }
	   
 public function get_gaomidu($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('gaomidu');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xuezhi');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->gaomidu;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }
 public function get_dimidu($userid=NULL){
		if($userid!=NULL)
		{
			$this->db->order_by('time','desc');
			$this->db->select('dimidu');
			$this->db->where('id', $userid);
 			$this->db->limit(10);
 			$this->db->from('xuezhi');
// 			$this->db->join('people', 'sites.clientid = people.id');
// 			$this->db->orderby("name", "desc");
			$query = $this->db->get();			
		if ($query->num_rows() > 0)
			{
			$i=0;
			$j=$query->num_rows();
			while($i<$query->num_rows()){
  			 $row = $query->row($i);
  			 $arr[--$j]=$row->dimidu;
			$i++;
			}
			return $arr;
			
			}else{
					return FALSE;
				}		
	   }
	   return FALSE;
	   }
}
 



