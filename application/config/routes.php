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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['csm-career'] = 'category/view/7';
$route['news/detail/(:any)'] = 'news/view/$1';
$route['service/detail/(:any)'] = 'service/view/$1';
$route['facility/detail/(:any)'] = 'facility/view/$1';
$route['category/detail/(:any)'] = 'category/view/$1';
$route['portfolio/detail/(:any)'] = 'portfolio/view/$1';
$route['newfacility/detail/(:any)'] = 'newfacility/view/$1';
$route['admin/company-profile'] = 'admin/content-home/item-bg';

/** HRD ROLE **/
$route['hrd/profile'] = 'admin/profile';
$route['hrd/profile/update'] = 'admin/profile/update';
$route['hrd/dashboard'] = 'admin/dashboard';
$route['hrd/company-profile'] = 'admin/content-home/item-bg';
$route['hrd/slider'] = 'admin/slider';
$route['hrd/slider/add'] = 'admin/slider/add';
$route['hrd/slider/edit/(:any)'] = 'admin/slider/edit/$1';
$route['hrd/slider/delete/(:any)'] = 'admin/slider/delete/$1';
$route['hrd/service'] = 'admin/service';
$route['hrd/service/add'] = 'admin/service/add';
$route['hrd/service/edit/(:any)'] = 'admin/service/edit/$1';
$route['hrd/facility'] = 'admin/facility';
$route['hrd/facility/add'] = 'admin/facility/add';
$route['hrd/facility/edit/(:any)'] = 'admin/facility/edit/$1';
$route['hrd/faq'] = 'admin/faq';
$route['hrd/faq/add'] = 'admin/faq/add';
$route['hrd/faq/edit/(:any)'] = 'admin/faq/edit/$1';
$route['hrd/faq/delete/(:any)'] = 'admin/faq/delete/$1';
$route['hrd/faq/main-photo'] = 'admin/faq/main-photo';
$route['hrd/photo'] = 'admin/photo';
$route['hrd/photo/add'] = 'admin/photo/add';
$route['hrd/photo/edit/(:any)'] = 'admin/photo/edit/$1';
$route['hrd/photo/delete/(:any)'] = 'admin/photo/delete/$1';
$route['hrd/product'] = 'admin/product';
$route['hrd/portfolio'] = 'admin/portfolio';
$route['hrd/portfolio-category'] = 'admin/portfolio-category';
$route['hrd/team-member'] = 'admin/team-member';
$route['hrd/team-member/add'] = 'admin/team-member/add';
$route['hrd/team-member/edit/(:any)'] = 'admin/team-member/edit/$1';
$route['hrd/team-member/delete/(:any)'] = 'admin/team-member/delete/$1';
$route['hrd/designation'] = 'admin/designation';
$route['hrd/designation/add'] = 'admin/designation/add';
$route['hrd/designation/edit/(:any)'] = 'admin/designation/edit/$1';
$route['hrd/designation/delete/(:any)'] = 'admin/designation/delete/$1';
$route['hrd/testimonial'] = 'admin/testimonial';
$route['hrd/partner'] = 'admin/partner';
$route['hrd/partner/add'] = 'admin/partner/add';
$route['hrd/partner/edit/(:any)'] = 'admin/partner/edit/$1';
$route['hrd/partner/delete/(:any)'] = 'admin/partner/delete/$1';
$route['hrd/page'] = 'admin/page';
$route['hrd/page/update'] = 'admin/page/update';
$route['hrd/news'] = 'admin/news';
$route['hrd/news/add'] = 'admin/news/add';
$route['hrd/news/edit/(:any)'] = 'admin/news/edit/$1';
$route['hrd/news-category'] = 'admin/news-category';
$route['hrd/news-category/add'] = 'admin/news-category/add';
$route['hrd/news-category/edit/(:any)'] = 'admin/news-category/edit/$1';
$route['hrd/(:any)'] = 'admin/(:any)';
$route['hrd/login'] = 'admin/login';
$route['hrd/login/logout'] = 'admin/login/logout';

/** STAFF ROLE **/
$route['staff/profile'] = 'admin/profile';
$route['staff/profile/update'] = 'admin/profile/update';
$route['staff/dashboard'] = 'admin/dashboard';
$route['staff/company-profile'] = 'admin/content-home/item-bg';
$route['staff/slider'] = 'admin/slider';
$route['staff/slider/add'] = 'admin/slider/add';
$route['staff/slider/edit/(:any)'] = 'admin/slider/edit/$1';
$route['staff/slider/delete/(:any)'] = 'admin/slider/delete/$1';
$route['staff/service'] = 'admin/service';
$route['staff/service/add'] = 'admin/service/add';
$route['staff/service/edit/(:any)'] = 'admin/service/edit/$1';
$route['staff/service/delete/(:any)'] = 'admin/service/delete/$1';
$route['hrd/facility'] = 'admin/facility';
$route['hrd/facility/add'] = 'admin/facility/add';
$route['hrd/facility/edit/(:any)'] = 'admin/facility/edit/$1';
$route['hrd/facility/delete/(:any)'] = 'admin/facility/delete/$1';
$route['staff/faq'] = 'admin/faq';
$route['staff/faq/add'] = 'admin/faq/add';
$route['staff/faq/edit/(:any)'] = 'admin/faq/edit/$1';
$route['staff/photo'] = 'admin/photo';
$route['staff/photo/add'] = 'admin/photo/add';
$route['staff/photo/edit/(:any)'] = 'admin/photo/edit/$1';
$route['staff/photo/delete/(:any)'] = 'admin/photo/delete/$1';
$route['staff/product'] = 'admin/product';
$route['staff/product/add'] = 'admin/product/add';
$route['staff/product/edit/(:any)'] = 'admin/product/edit/$1';
$route['staff/product/delete/(:any)'] = 'admin/product/delete/$1';
$route['staff/portfolio'] = 'admin/portfolio';
$route['staff/portfolio/add'] = 'admin/portfolio/add';
$route['staff/portfolio/edit/(:any)'] = 'admin/portfolio/edit/$1';
$route['staff/portfolio-category'] = 'admin/portfolio-category';
$route['staff/portfolio-category/add'] = 'admin/portfolio-category/add';
$route['staff/portfolio-category/edit/(:any)'] = 'admin/portfolio-category/edit/$1';
$route['staff/team-member'] = 'admin/team-member';
$route['staff/team-member/add'] = 'admin/team-member/add';
$route['staff/team-member/edit/(:any)'] = 'admin/team-member/edit/$1';
$route['staff/team-member/delete/(:any)'] = 'admin/team-member/delete/$1';
$route['staff/designation'] = 'admin/designation';
$route['staff/designation/add'] = 'admin/designation/add';
$route['staff/designation/edit/(:any)'] = 'admin/designation/edit/$1';
$route['staff/designation/delete/(:any)'] = 'admin/designation/delete/$1';
$route['staff/testimonial'] = 'admin/testimonial';
$route['staff/testimonial/add'] = 'admin/testimonial/add';
$route['staff/testimonial/edit/(:any)'] = 'admin/testimonial/edit/$1';
$route['staff/testimonial/main-photo'] = 'admin/testimonial/main-photo';
$route['staff/partner'] = 'admin/partner';
$route['staff/partner/add'] = 'admin/partner/add';
$route['staff/partner/edit/(:any)'] = 'admin/partner/edit/$1';
$route['staff/partner/delete/(:any)'] = 'admin/partner/delete/$1';
$route['staff/page'] = 'admin/page';
$route['staff/page/update'] = 'admin/page/update';
$route['staff/news'] = 'admin/news';
$route['staff/news/add'] = 'admin/news/add';
$route['staff/news/edit/(:any)'] = 'admin/news/edit/$1';
$route['staff/news-category'] = 'admin/news-category';
$route['staff/news-category/add'] = 'admin/news-category/add';
$route['staff/news-category/edit/(:any)'] = 'admin/news-category/edit/$1';
$route['staff/(:any)'] = 'admin/(:any)';
$route['staff/login'] = 'admin/login';
$route['staff/login/logout'] = 'admin/login/logout';