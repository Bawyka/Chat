<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-10 13:15:23 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-10 13:15:23 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 C:\LS\sites\home\randomchat.tar\www\index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-10 13:45:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Session_Native::$id ~ APPPATH\classes\controller\base.php [ 19 ]
2012-10-10 13:45:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Session_Native::$id ~ APPPATH\classes\controller\base.php [ 19 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\base.php(19): Kohana_Core::error_handler()
#1 [internal function]: Controller_Base->before(Object(Controller_Welcome))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 13:45:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Session_Native::$session_id ~ APPPATH\classes\controller\base.php [ 19 ]
2012-10-10 13:45:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Session_Native::$session_id ~ APPPATH\classes\controller\base.php [ 19 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\base.php(19): Kohana_Core::error_handler()
#1 [internal function]: Controller_Base->before(Object(Controller_Welcome))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 13:45:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM, expecting ',' or ';' ~ APPPATH\classes\controller\base.php [ 19 ]
2012-10-10 13:45:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM, expecting ',' or ';' ~ APPPATH\classes\controller\base.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Base')
#1 {main}
2012-10-10 13:45:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant session_id - assumed 'session_id' ~ APPPATH\classes\controller\base.php [ 19 ]
2012-10-10 13:45:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant session_id - assumed 'session_id' ~ APPPATH\classes\controller\base.php [ 19 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\base.php(19): Kohana_Core::error_handler()
#1 [internal function]: Controller_Base->before(Object(Controller_Welcome))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 13:54:01 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\LS\sites\home\randomchat.tar\www\application\classes\controller\base.php on line 21 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1719 ]
2012-10-10 13:54:01 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\LS\sites\home\randomchat.tar\www\application\classes\controller\base.php on line 21 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1719 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1719): Kohana_Core::error_handler('sid', 'fd46eggvd2khoco...')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\base.php(21): Kohana_ORM->where()
#2 [internal function]: Controller_Base->before(Object(Controller_Welcome))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 14:19:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '!', expecting ')' ~ APPPATH\classes\model\user.php [ 22 ]
2012-10-10 14:19:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '!', expecting ')' ~ APPPATH\classes\model\user.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_User')
#1 {main}
2012-10-10 14:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 14:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 15:01:56 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:01:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:01:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:01:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:01:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:01:58 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:01:58 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:01:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:01:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:01:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:01:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:00 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:00 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:10 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:10 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:10 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:10 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:16 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:16 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:16 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:16 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:17 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:17 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:20 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:20 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:20 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:20 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:25 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:25 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:25 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:25 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:26 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:26 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:26 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:26 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:30 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:30 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:31 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:31 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:32 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:32 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:32 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:32 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:33 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:33 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:34 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:34 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:35 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:35 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:36 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:36 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:38 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:38 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:38 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:38 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:39 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:39 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:41 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:41 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:42 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:42 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:43 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:43 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:43 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:43 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:44 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:44 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:46 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:46 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:47 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:47 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:50 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:50 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:52 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:52 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:52 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:52 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:53 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:53 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:53 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:53 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:55 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:55 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:56 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:56 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:58 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:58 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:58 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:58 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:02:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:02:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:00 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:00 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 15:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 15:03:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:03:16 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:03:16 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(47): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 15:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 15:05:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:16 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:16 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:17 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:17 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:20 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:20 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:25 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:25 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:26 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:26 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:30 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:30 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:31 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:31 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:33 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:33 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:34 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:34 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:35 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:35 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:36 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:36 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:38 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:38 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:39 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:39 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:41 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:41 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:42 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:42 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:43 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:43 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:46 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:46 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:47 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:47 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:50 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:50 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:52 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:52 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:53 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:53 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:53 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:53 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:55 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:55 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:56 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:58 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:58 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:58 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:58 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:05:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:05:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:00 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:00 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:08 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:08 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:10 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:10 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:16 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:16 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:17 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:17 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:20 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:20 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:25 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:25 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:26 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:26 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:27 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:27 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:30 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:30 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:31 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:31 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:32 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:32 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:33 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:33 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:34 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:34 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:35 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:35 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:36 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:36 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:38 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:38 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:39 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:39 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:41 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:41 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:42 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:42 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:43 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:43 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:44 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:44 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:46 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:46 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:47 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:47 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(46): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:50 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:50 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:52 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:52 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:56 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:06:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:06:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:00 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:00 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:08 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:08 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:16 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:16 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:17 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:17 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:18 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:18 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:19 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:19 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:20 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:20 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:21 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:21 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:22 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:22 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:23 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:23 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:24 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:24 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:25 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:25 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:25 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:25 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:27 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:27 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:27 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:27 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:28 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:28 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:29 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:29 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:30 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:30 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:31 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:31 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:32 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:32 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:32 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:32 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:33 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:33 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:34 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:34 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:34 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:34 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:35 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:35 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:36 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:36 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:37 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:37 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:38 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:38 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:38 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:38 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:39 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:39 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:40 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:40 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:41 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:41 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:41 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:41 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:42 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:42 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:43 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:43 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:43 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:43 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:44 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:44 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:45 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:45 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:46 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:46 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:46 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:46 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:47 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:47 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:48 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:48 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:49 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:49 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:50 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:50 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:50 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:50 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:52 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:52 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:53 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:53 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:54 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:54 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:55 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:55 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:55 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:55 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:56 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:57 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:57 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:07:59 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:07:59 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:01 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:01 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:02 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:02 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:03 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:03 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:04 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:04 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:05 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:05 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:06 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:06 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:07 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:07 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:08 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:08 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:08 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:08 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:10 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:10 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'fd46eggvd2khoco530ndv03fd0' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'fd46eggvd2khoco530ndv03fd0' WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:11 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:11 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:12 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:12 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:13 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:13 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:14 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:14 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:08:15 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:08:15 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: 'q629c88vpkc3fs2c3obbkve6j2' for column 'handle' at row 1 [ UPDATE `users` SET `status` = 'c', `handle` = 'q629c88vpkc3fs2c3obbkve6j2' WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(145): Kohana_ORM->update()
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('fd46eggvd2khoco...', 'q629c88vpkc3fs2...')
#4 [internal function]: Controller_Next->action_index()
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-10 15:11:04 --- ERROR: Database_Exception [ 1364 ]: Field 'handle' doesn't have a default value [ INSERT INTO `users` (`sid`, `status`) VALUES ('fd46eggvd2khoco530ndv03fd0', 'w') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:11:04 --- STRACE: Database_Exception [ 1364 ]: Field 'handle' doesn't have a default value [ INSERT INTO `users` (`sid`, `status`) VALUES ('fd46eggvd2khoco530ndv03fd0', 'w') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(12): Kohana_ORM->save()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\base.php(26): Model_User->Init('fd46eggvd2khoco...')
#5 [internal function]: Controller_Base->before()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 15:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 15:12:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(154): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(48): Model_User->SetConnection('q629c88vpkc3fs2...', 'fd46eggvd2khoco...')
#6 [internal function]: Controller_Next->action_index()
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-10 15:12:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'fd46eggvd2khoco530ndv03fd0' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('fd46eggvd2khoco...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:12:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:12:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:13:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-10 15:13:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hadle' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`sid` AS `sid`, `user`.`chat` AS `chat`, `user`.`status` AS `status`, `user`.`handle` AS `handle` FROM `users` AS `user` WHERE `hadle` = 'q629c88vpkc3fs2c3obbkve6j2' AND `status` = 'c' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\sites\home\randomchat.tar\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(29): Kohana_ORM->find()
#4 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(11): Model_User->CheckConnection('q629c88vpkc3fs2...')
#5 [internal function]: Controller_Next->action_index()
#6 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Next))
#7 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-10 15:14:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
2012-10-10 15:14:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(79): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 15:14:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
2012-10-10 15:14:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(79): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 15:14:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
2012-10-10 15:14:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(79): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 15:14:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
2012-10-10 15:14:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(79): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 15:14:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
2012-10-10 15:14:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(79): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 15:14:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
2012-10-10 15:14:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(79): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 15:14:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
2012-10-10 15:14:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 79 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(79): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 15:14:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 85 ]
2012-10-10 15:14:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\model\user.php [ 85 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\model\user.php(85): Kohana_Core::error_handler('fd46eggvd2khoco...', '9')
#1 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\next.php(15): Model_User->BreakConnection()
#2 [internal function]: Controller_Next->action_index(Object(Controller_Next))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-10 23:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 23:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 23:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 23:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 23:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 23:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 23:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 23:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 23:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-10 23:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-10 23:51:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:51:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:51:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:51:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-10 23:52:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
2012-10-10 23:52:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: sid ~ APPPATH\classes\controller\chat.php [ 11 ]
--
#0 C:\LS\sites\home\randomchat.tar\www\application\classes\controller\chat.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Chat->action_index(Object(Controller_Chat))
#2 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\LS\sites\home\randomchat.tar\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 C:\LS\sites\home\randomchat.tar\www\index.php(109): Kohana_Request->execute()
#6 {main}