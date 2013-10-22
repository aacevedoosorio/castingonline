<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-07 15:52:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/model/list.php [ 17 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/list.php:17
2013-10-07 15:52:35 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/list.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 17, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php(8): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(45): Kohana_View->__toString()
#9 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#15 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#18 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/list.php:17
2013-10-07 15:54:24 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Model.php [ 27 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:27
2013-10-07 15:54:24 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(27): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/alejandr...', 27, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:27
2013-10-07 15:56:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'l' (T_STRING) ~ APPPATH/classes/Controller/Model.php [ 28 ] in :
2013-10-07 15:56:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-07 15:56:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function bind() ~ APPPATH/classes/Controller/Model.php [ 28 ] in :
2013-10-07 15:56:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-07 15:56:35 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Model.php [ 29 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:29
2013-10-07 15:56:35 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(29): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/alejandr...', 29, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:29
2013-10-07 16:27:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/Controller/Model.php [ 20 ] in :
2013-10-07 16:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-07 16:28:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/Controller/Model.php [ 20 ] in :
2013-10-07 16:28:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :