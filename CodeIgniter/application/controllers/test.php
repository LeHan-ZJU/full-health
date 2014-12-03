<?php 
class Test extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}
	function index()
	{
		$now = time();
echo unix_to_human($now); // U.S. time, no seconds

//echo unix_to_human($now, TRUE, 'us'); // U.S. time with seconds

//echo unix_to_human($now, TRUE, 'eu'); // Euro time with seconds
	}

}
?>