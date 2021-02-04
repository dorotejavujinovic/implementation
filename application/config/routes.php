<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
$route['events/create'] = 'events/create';
$route['events/update'] = 'events/update';
$route['events/(:any)'] = 'events/view/$1';
$route['events'] = 'events/index';
$route['members/(:any)'] = 'members/view/$1';
$route['members'] = 'members/index';
$route['choreographies'] = 'choreographies/index';
$route['choreographies/add'] = 'choreographies/add';


$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
