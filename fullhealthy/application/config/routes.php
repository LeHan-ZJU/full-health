<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['login'] = "login";
$route['zhuce'] = "zhuce";
$route['hisdata'] = "hisdata";

$route['postdata/insert_xueya'] = 'postdata/insert_xueya';
$route['postdata/insert_xuetang'] = 'postdata/insert_xuetang';
$route['postdata/insert_xuezhi'] = 'postdata/insert_xuezhi';
$route['postdata/insert_myquestion'] = 'postdata/insert_myquestion';

$route['analyse-xueya.html'] = "analyse/xueya";
$route['analyse-xuezhi.html'] = "analyse/xuezhi";
$route['analyse-xuetang.html'] = "analyse/xuetang";
$route['xueya_hisdata.html'] = "analyse/xueya_hisdata";
$route['xuetang_hisdata.html'] = "analyse/xuetang_hisdata";
$route['xuezhi_hisdata.html'] = "analyse/xuezhi_hisdata";
$route['message.html'] = "analyse/message";
$route['question.html'] = "analyse/question";
$route['answer.html'] = "analyse/answer";
$route['healthdata.html'] = "analyse/healthdata";
$route['namechange.html'] = "analyse/namechange";
$route['passwordchange.html'] = "analyse/passwordchange";
$route['main_index.html']="analyse/main";

$route['default_controller'] = "login";
$route['404_override'] = '';



/* End of file routes.php */
/* Location: ./application/config/routes.php */