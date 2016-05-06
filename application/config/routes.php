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

$route['default_controller'] = "abc/index";
$route['newsdetail'] = "abc/newsdetail";
$route['theme'] = "abc/theme";
$route['theme1'] = "abc/theme1";
$route['theme2'] = "abc/theme2";
$route['news1'] = "abc/news1";
$route['news2'] = "abc/news2";
$route['news3'] = "abc/news3";
$route['oneday'] = "abc/oneday";
$route['oneday1'] = "abc/oneday1";
$route['oneday2'] = "abc/oneday2";
$route['oneday3'] = "abc/oneday3";
$route['oneday4'] = "abc/oneday4";
$route['studio'] = "abc/studio";
$route['studio1'] = "abc/studio1";
$route['studio2'] = "abc/studio2";
$route['studio3'] = "abc/studio3";

$route['abcclass'] = "abc/abcclass";
$route['abcclass1'] = "abc/abcclass1";
$route['abcclass2'] = "abc/abcclass2";
$route['abcclass_dessert'] = "abc/abcclass_dessert";
$route['abcclass_bread'] = "abc/abcclass_bread";
$route['abcabout'] = "abc/abcabout";
$route['abcprice'] = "abc/abcprice";
$route['abcprice_bread'] = "abc/abcprice_bread";
$route['abcprice_dessert'] = "abc/abcprice_dessert";

$route['course'] = "abc/course";
$route['selectday'] = "abc/selectday";
$route['selectclass'] = "abc/selectclass";
$route['filter'] = "abc/filter";
$route['filterteacher'] = "abc/filterteacher";
$route['filtertime'] = "abc/filtertime";
$route['filterseat'] = "abc/filterseat";

$route['mybooking'] = "abc/mybooking";
$route['bookingdetail'] = "abc/bookingdetail";
$route['history'] = "abc/history";
$route['historydetail'] = "abc/historydetail";
$route['reminder'] = "abc/reminder";

$route['register'] = "abc/register";
$route['login'] = "abc/login";
$route['member'] = "abc/member";

$route['login'] = "abc/login";
$route['forgetpsw'] = "abc/forgetpsw";
$route['register'] = "abc/register";
$route['policy'] = "abc/policy";

$route['more'] = "abc/more";
$route['collect'] = "abc/collect";
$route['logout'] = "abc/logout";

$route['abcajax/login'] = 'abcajax/login';
$route['abcajax/register'] = 'abcajax/register';

$route['abcajax/booking'] = 'abcajax/booking';
$route['abcajax/cancelbooking'] = 'abcajax/cancelbooking';

$route['404_override'] = '';

// 產生課程表
$route['generate_schedule'] = 'abc/generate_schedule';

/* End of file routes.php */
/* Location: ./application/config/routes.php */