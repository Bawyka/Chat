<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-03 06:57:28 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2013-09-03 06:57:28 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 C:\LS\chat\www\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\LS\chat\www\system\classes\kohana\request.php(202): Kohana_Cookie::get('session')
#2 C:\LS\chat\www\index.php(108): Kohana_Request::factory()
#3 {main}