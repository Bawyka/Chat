<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-01 01:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:50:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\main.php [ 50 ]
2012-11-01 01:50:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: text ~ APPPATH\views\main.php [ 50 ]
--
#0 C:\LS\sites\home\chat.tar\www\application\views\main.php(50): Kohana_Core::error_handler('C:\LS\sites\hom...', Array)
#1 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(61): include('C:\LS\sites\hom...')
#2 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\LS\sites\home\chat.tar\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Welcome))
#5 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-01 01:52:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\views\main.php [ 84 ]
2012-11-01 01:52:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\views\main.php [ 84 ]
--
#0 C:\LS\sites\home\chat.tar\www\application\views\main.php(84): Kohana_Core::error_handler('C:\LS\sites\hom...', Array)
#1 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(61): include('C:\LS\sites\hom...')
#2 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\LS\sites\home\chat.tar\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Welcome))
#5 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-01 01:53:17 --- ERROR: ErrorException [ 2 ]: include(libs/countries.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\main.php [ 102 ]
2012-11-01 01:53:17 --- STRACE: ErrorException [ 2 ]: include(libs/countries.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\views\main.php [ 102 ]
--
#0 C:\LS\sites\home\chat.tar\www\application\views\main.php(102): Kohana_Core::error_handler('C:\LS\sites\hom...', Array)
#1 C:\LS\sites\home\chat.tar\www\application\views\main.php(102): include()
#2 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(61): include('C:\LS\sites\hom...')
#3 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\LS\sites\home\chat.tar\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after(Object(Controller_Welcome))
#6 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#7 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#9 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-11-01 01:54:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\main.php [ 106 ]
2012-11-01 01:54:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\main.php [ 106 ]
--
#0 C:\LS\sites\home\chat.tar\www\application\views\main.php(106): Kohana_Core::error_handler('C:\LS\sites\hom...', Array)
#1 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(61): include('C:\LS\sites\hom...')
#2 C:\LS\sites\home\chat.tar\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\LS\sites\home\chat.tar\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Welcome))
#5 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\chat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-01 01:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 01:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 01:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]01 02:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:17:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:17:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:22:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:22:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/fine.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/fine.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/fine.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/fine.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.cookie.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/driver.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/mystyle.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/5.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/0.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/8.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/6.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/9.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/7.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/10.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powerchat.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:47:54 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 20 ]
2012-11-01 02:47:54 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-01 02:48:08 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 20 ]
2012-11-01 02:48:08 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-01 02:49:51 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 20 ]
2012-11-01 02:49:51 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-01 02:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/img/ava.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 02:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 02:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\chat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}