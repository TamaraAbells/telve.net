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

$route['default_controller'] = "hot";
$route['404_override'] = '';

$route['yeni'] = 'xnew';
$route['yukselen'] = 'rising';
$route['tartismali'] = 'controversial';
$route['zirve'] = 'top';
$route['viki'] = 'wiki';
$route['konular'] = 'topics';
$route['aboneliklerim'] = 'subscriptions';
$route['tercihler'] = 'preferences';
$route['sifremi-unuttum'] = 'password';
$route['sifre-sifirla'] = 'password/reset';
$route['gonder'] = 'submit';
$route['arama'] = 'search';

$route['t/(:any)/yorumlar/(:any)'] = 'comments/view';
$route['t/(:any)/yorumlar/(:any)/(:any)'] = 'comments/view';
$route['t/(:any)'] = 'topic';
$route['t/(:any)/(:any)'] = 'topic';
$route['t/(:any)/(:any)/(:any)'] = 'topic';

$route[':num'] = 'hot';
$route['yeni/:num'] = 'xnew';
$route['yukselen/:num'] = 'rising';
$route['tartismali/:num'] = 'controversial';
$route['zirve/:num'] = 'top';
$route['aboneliklerim/:num'] = 'subscriptions';
$route['konular/:num'] = 'topics';
$route['arama/:num'] = 'search';

$route['alan-adi/(:any)'] = 'domain';
$route['alan-adi/(:any)/(:any)'] = 'domain';
$route['alan-adi/(:any)/(:any)/(:any)'] = 'domain';

$route['uye-ol'] = 'user/register';
$route['giris'] = 'user/login';
$route['cikis'] = 'user/logout';
$route['user/is_username_available'] = 'user/is_username_available';
$route['user/captcha'] = 'user/captcha';
$route['user/is_user_logged_in'] = 'user/is_user_logged_in';
$route['kullanici/(:any)'] = 'user';
$route['kullanici/(:any)/:num'] = 'user';
$route['kullanici/(:any)/(:any)'] = 'user';
$route['kullanici/(:any)/(:any)/:num'] = 'user';
$route['kullanici/(:any)/(:any)/(:any)/:num'] = 'user';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
