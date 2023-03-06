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
$route['default_controller'] = 'welcome';
$route['Auth'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin/dashboard'] = 'DashboardController';

//aspirasi reses
$route['admin/a_reses'] = 'Aspirasi_resesController';
$route['admin/a_reses/tambah'] = 'Aspirasi_resesController/tambah_data';
$route['admin/a_reses/edit'] = 'Aspirasi_resesController/edit_data';

//aspirasi demo
$route['admin/a_demo'] = 'Aspirasi_demoController';
$route['admin/a_demo/tambah'] = 'Aspirasi_demoController/tambah_data';
$route['admin/a_demo/edit'] = 'Aspirasi_demoController/edit_data';

//aspirasi kunker
$route['admin/a_kunker'] = 'Aspirasi_kunkerController';
$route['admin/a_kunker/tambah'] = 'Aspirasi_kunkerController/tambah_data';
$route['admin/a_kunker/edit'] = 'Aspirasi_kunkerController/edit_data';

//aspirasi dialog
$route['admin/a_dialog'] = 'Aspirasi_dialogController';
$route['admin/a_dialog/tambah'] = 'Aspirasi_dialogController/tambah_data';
$route['admin/a_dialog/edit'] = 'Aspirasi_dialogController/edit_data';

//aspirasi mandiri
$route['admin/a_mandiri'] = 'Aspirasi_mandiriController';
$route['admin/a_mandiri/tambah'] = 'Aspirasi_mandiriController/tambah_data';
$route['admin/a_mandiri/edit'] = 'Aspirasi_mandiriController/edit_data';

//aspirasi lainnya
$route['admin/a_lainnya'] = 'Aspirasi_lainnyaController';
$route['admin/a_lainnya/tambah'] = 'Aspirasi_lainnyaController/tambah_data';
$route['admin/a_lainnya/edit'] = 'Aspirasi_lainnyaController/edit_data';

//dapil
$route['admin/dapil'] = 'DapilController';
$route['admin/dapil/tambah'] = 'DapilController/tambah_data';
$route['admin/dapil/edit'] = 'DapilController/edit_data';

//info aleg
$route['admin/info_aleg'] = 'InfoalegController';
$route['admin/info_aleg/tambah'] = 'InfoalegController/tambah_data';
$route['admin/info_aleg/edit'] = 'InfoalegController/edit_data';