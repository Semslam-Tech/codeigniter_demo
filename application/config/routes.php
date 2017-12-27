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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['enquiry/table'] = 'registration/index';
$route['enquiry/add'] = 'Registration/insert';
$route['enquiry/form'] = 'Registration/enquiry';
$route['enquiry/process'] = 'Registration/enquiry_insert';

//users url route
$route['login'] = 'Registration/login_form';
$route['login/process'] = 'LoginControl/login';
$route['logout'] = 'LoginControl/logout';
$route['staff/registration'] = 'UsersControl/registration';
$route['admin/dashboard'] = 'UsersControl/dashboard';
$route['staff/add'] = 'UsersControl/insert';
$route['staff/list'] = 'UsersControl/user_list';
$route['staff/delete/(:num)'] = 'UsersControl/temporary_delete/$1';
$route['staff/profile/(:num)'] = 'UsersControl/user_profile/$1';
$route['staff/edit/(:num)'] = 'UsersControl/edit_user_form/$1';
$route['staff/process'] = 'UsersControl/edit_user';


$route['student'] = 'StudentControl';
$route['student/process'] = 'StudentControl/std_add';
$route['student/list'] = 'StudentControl/std_list';
