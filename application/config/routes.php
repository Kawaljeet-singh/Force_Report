<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';

$route['about'] = 'Home/about';
$route['login/(:any)'] = 'AdminLogin/login/$1';
$route['login'] = 'AdminLogin';
$route['register'] = 'Home/register';
$route['register_submit'] = 'Home/register_submit';
$route['subscribe'] = 'Home/subscribe';
$route['decline_subscribe/(:any)'] = 'Dashboard/decline_subscribe/$1';
$route['family_office/(:any)'] = 'Home/data_page/$1';
$route['size_of_investment/(:any)'] = 'Home/size_invest/$1';
$route['number_of_investment/(:any)'] = 'Home/no_invest/$1';
$route['service/(:any)'] = 'Home/data_page/$1';
$route['firmdata/(:any)'] = 'Home/firmdata/$1';
$route['contact_us'] = 'Home/contact';
$route['submit_contact'] = 'Home/submit_contact';
$route['emailchk'] = 'Home/emailchk';
$route['dashboard'] = 'Dashboard/dashboard';
$route['sell'] = 'Sell_form/sell';
$route['sell_form'] = 'Dashboard/sell_form';
$route['export_list'] = 'Dashboard/export_list';
$route['sendEmails'] = 'Dashboard/sendEmails';

$route['ForgotPassword'] = 'ForgotPassword/index';
$route['send_reset_link'] = 'ForgotPassword/send_reset_link';

$route['Reset_Password/(:any)'] = 'Reset_Password/index/$1';
$route['resetpassword'] = 'Reset_Password/resetpassword';


$route['family_office_list'] = 'Family_office/index';
$route['fo_registed'] = 'Family_office/fo_registed';
$route['add_user'] = 'Family_office/add_user';
$route['create_user'] = 'Family_office/create_user';
$route['view_user/(:any)'] = 'Family_office/view_user/$1';
$route['edit_user/(:any)'] = 'Family_office/edit_user/$1';
$route['update_user'] = 'Family_office/update_user';
$route['approve_user/(:any)'] = 'Family_office/approve_user/$1';
$route['decline_user/(:any)'] = 'Family_office/decline_user/$1';
$route['delete_user/(:any)'] = 'Family_office/delete_user/$1';


$route['Sell_user_list'] = 'Sell_user/index';
$route['sell_side_registed'] = 'Sell_user/sell_side_registed';
$route['add_sell_user'] = 'Sell_user/add_sell_user';
$route['create_sell_user'] = 'Sell_user/create_sell_user';
$route['view_sell/(:any)'] = 'Sell_user/view_sell/$1';
$route['edit_sellside/(:any)'] = 'Sell_user/edit_sellside/$1';
$route['update_sell_user'] = 'Sell_user/update_sell_user';
$route['approve_sell/(:any)'] = 'Sell_user/approve_sell/$1';
$route['decline_sell/(:any)'] = 'Sell_user/decline_sell/$1';
$route['delete_sell/(:any)'] = 'Sell_user/delete_sell/$1';

$route['Service_provider'] = 'Service_provider/index';
$route['service_provider_registed'] = 'Service_provider/service_provider_registed';
$route['add_service_provider'] = 'Service_provider/add_service_provider';
$route['create_service_provider'] = 'Service_provider/create_service_provider';
$route['view_service_provider/(:any)'] = 'Service_provider/view_service_provider/$1';
$route['edit_service_provider/(:any)'] = 'Service_provider/edit_service_provider/$1';
$route['update_service_user'] = 'Service_provider/update_service_user';
$route['approve_service/(:any)'] = 'Service_provider/approve_service/$1';
$route['decline_service/(:any)'] = 'Service_provider/decline_service/$1';
$route['delete_service/(:any)'] = 'Service_provider/delete_service/$1';


$route['pending_investment'] = 'Dashboard/pending_investment';
$route['approve_investment/(:any)'] = 'Dashboard/approve_investment/$1';
$route['decline_investment/(:any)'] = 'Dashboard/decline_investment/$1';
$route['approved_investment'] = 'Dashboard/approved_investment';
$route['manage_investment_sector'] = 'Dashboard/manage_investment_sector';
$route['manage_investment_structure'] = 'Dashboard/manage_investment_structure';
$route['manage_investment_stage'] = 'Dashboard/manage_investment_stage';
$route['settings'] = 'Dashboard/settings';


$route['decline_sector/(:any)/(:any)'] = 'Dashboard/decline_sector/$1/$2';






 
 


$route['add_invest_sector'] = 'Dashboard/add_invest_sector';
$route['update_invest_sector'] = 'Dashboard/update_invest_sector';


$route['update_password'] = 'Dashboard/update_password';

$route['logout'] = 'Dashboard/logout';
$route['contact_user'] = 'Dashboard/contact_user';
$route['admin_login_check/(:any)'] = 'AdminLogin/admin_login_check/$1'; 
$route['translate_uri_dashes'] = FALSE;
