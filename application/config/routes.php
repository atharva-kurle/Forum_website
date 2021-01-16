<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'forum';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// C R

$route['add-post'] = 'forum/add';
$route['reply-reply'] = 'forum/radd';
