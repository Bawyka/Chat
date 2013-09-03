<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-03 06:40:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'sid' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`login` AS `login`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`birthday` AS `birthday`, `user`.`name` AS `name`, `user`.`surname` AS `surname` FROM `users` AS `user` WHERE `sid` = 'm46lemnurpbrg3mn3uc00c44p6' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-09-03 06:40:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'sid' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`login` AS `login`, `user`.`email` AS `email`, `user`.`password` AS `password`, `user`.`birthday` AS `birthday`, `user`.`name` AS `name`, `user`.`surname` AS `surname` FROM `users` AS `user` WHERE `sid` = 'm46lemnurpbrg3mn3uc00c44p6' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\LS\chat\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\LS\chat\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\LS\chat\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 C:\LS\chat\www\application\classes\controller\base.php(21): Kohana_ORM->find()
#4 [internal function]: Controller_Base->before()
#5 C:\LS\chat\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\LS\chat\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\LS\chat\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\LS\chat\www\index.php(109): Kohana_Request->execute()
#9 {main}