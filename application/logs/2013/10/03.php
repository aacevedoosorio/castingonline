<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-03 16:42:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::debug_source() ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in :
2013-10-03 16:42:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 16:54:26 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php:67
2013-10-03 16:54:26 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /Users/alejandroacevedo/Projects/vhosts/casting/index.php(131): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php:67
2013-10-03 16:54:44 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php:67
2013-10-03 16:54:44 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /Users/alejandroacevedo/Projects/vhosts/casting/index.php(131): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php:67
2013-10-03 16:54:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php:67
2013-10-03 16:54:51 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /Users/alejandroacevedo/Projects/vhosts/casting/index.php(131): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Cookie.php:67
2013-10-03 17:26:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 19 ] in :
2013-10-03 17:26:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 17:27:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 19 ] in :
2013-10-03 17:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 17:27:52 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-03 17:27:52 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#5 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#6 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/Auth/ORM.php(75): Kohana_ORM::factory('User')
#9 /Users/alejandroacevedo/Projects/vhosts/core/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('ale', 'acevedo', false)
#10 /Users/alejandroacevedo/Projects/vhosts/casting/application/classes/Controller/User.php(75): Kohana_Auth->login('ale', 'acevedo', false)
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#12 [internal function]: Kohana_Controller->execute()
#13 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /Users/alejandroacevedo/Projects/vhosts/casting/index.php(132): Kohana_Request->execute()
#17 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/database/classes/Kohana/Database/MySQL.php:75
2013-10-03 17:39:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 102 ] in :
2013-10-03 17:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 18:12:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '' ~ APPPATH/views/template.php [ 53 ] in :
2013-10-03 18:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 18:12:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/template.php [ 53 ] in :
2013-10-03 18:12:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 18:24:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/views/user/login.php [ 21 ] in :
2013-10-03 18:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 18:37:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''class'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/user/login.php [ 20 ] in :
2013-10-03 18:37:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 18:37:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''class'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/user/login.php [ 20 ] in :
2013-10-03 18:37:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 18:37:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''class'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/user/login.php [ 20 ] in :
2013-10-03 18:37:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-03 18:38:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''class'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/user/login.php [ 20 ] in :
2013-10-03 18:38:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :