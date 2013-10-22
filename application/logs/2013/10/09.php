<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 16:47:38 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Paginator_Iterator::__construct() must implement interface Iterator, instance of Model_Model given, called in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php on line 185 and defined ~ MODPATH/paginator/classes/Paginator/Iterator.php [ 51 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:47:38 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php(51): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/alejandr...', 51, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php(185): Paginator_Iterator->__construct(Object(Model_Model))
#2 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(35): Paginator::factory(Object(Model_Model))
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#9 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:48:12 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Paginator_Iterator::__construct() must implement interface Iterator, instance of Model_Model given, called in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php on line 185 and defined ~ MODPATH/paginator/classes/Paginator/Iterator.php [ 51 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:48:12 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php(51): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/alejandr...', 51, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php(185): Paginator_Iterator->__construct(Object(Model_Model))
#2 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(36): Paginator::factory(Object(Model_Model))
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#9 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:50:38 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Paginator_Iterator::__construct() must implement interface Iterator, instance of Model_Model given, called in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php on line 185 and defined ~ MODPATH/paginator/classes/Paginator/Iterator.php [ 51 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:50:38 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php(51): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/alejandr...', 51, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php(185): Paginator_Iterator->__construct(Object(Model_Model))
#2 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(36): Paginator::factory(Object(Model_Model))
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#9 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:50:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ xdebug://debug-eval [ 1 ] in :
2013-10-09 16:50:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-09 16:51:47 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Paginator_Iterator::__construct() must implement interface Iterator, instance of Model_Model given, called in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php on line 185 and defined ~ MODPATH/paginator/classes/Paginator/Iterator.php [ 51 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:51:47 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php(51): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/alejandr...', 51, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php(185): Paginator_Iterator->__construct(Object(Model_Model))
#2 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(35): Paginator::factory(Object(Model_Model))
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#9 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:52:25 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Paginator_Iterator::__construct() must implement interface Iterator, instance of Model_Model given, called in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php on line 185 and defined ~ MODPATH/paginator/classes/Paginator/Iterator.php [ 51 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:52:25 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php(51): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/alejandr...', 51, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator.php(185): Paginator_Iterator->__construct(Object(Model_Model))
#2 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(35): Paginator::factory(Object(Model_Model))
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#9 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/paginator/classes/Paginator/Iterator.php:51
2013-10-09 16:52:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ xdebug://debug-eval [ 1 ] in :
2013-10-09 16:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-09 16:54:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ xdebug://debug-eval [ 1 ] in :
2013-10-09 16:54:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-09 16:54:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ xdebug://debug-eval [ 1 ] in :
2013-10-09 16:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-09 16:57:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ xdebug://debug-eval [ 1 ] in :
2013-10-09 16:57:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-09 16:57:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'model_name' in 'where clause' [ SELECT `model`.`id` AS `id`, `model`.`status` AS `status`, `model`.`name` AS `name`, `model`.`phone` AS `phone`, `model`.`email` AS `email`, `model`.`profile_picture` AS `profile_picture` FROM `models` AS `model` WHERE `status` = 'active' AND `model_name` LIKE '%Ale%' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/Query.php:251
2013-10-09 16:57:57 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `model`....', 'Model_Model', Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(31): Kohana_ORM->find_all()
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#10 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/Query.php:251
2013-10-09 16:57:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ xdebug://debug-eval [ 1 ] in :
2013-10-09 16:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :