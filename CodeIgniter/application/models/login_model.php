<?php
class Login_model extends CI_Model {

  public function __construct()
  {
  	parent::__construct();
    $this->load->database();
  }


public  function set_user(Array $data=NULL)
{
  if($data==null){
  	return FALSE;
  }
  else{
  	$state=$this->db->insert('user', $data);
  	                 
  	return  $state;
  }

}
}