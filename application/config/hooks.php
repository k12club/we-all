<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['post_controller_constructor'][] = array(
        'class'    => 'Loadpost',
        'function' => 'check_login',
        'filename' => 'loadpost.php',
        'filepath' => 'hooks'
);

$hook['post_controller_constructor'][] = array(
        'class'    => 'Loadpost',
        'function' => 'check_permission',
        'filename' => 'loadpost.php',
        'filepath' => 'hooks'
);
