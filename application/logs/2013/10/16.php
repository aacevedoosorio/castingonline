<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-16 17:34:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/model/template.php [ 43 ] in :
2013-10-16 17:34:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-16 17:37:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: extra_menu_options ~ APPPATH/views/template.php [ 31 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php:31
2013-10-16 17:37:37 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 31, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#10 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php:31
2013-10-16 17:37:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: extra_menu_options ~ APPPATH/views/template.php [ 31 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php:31
2013-10-16 17:37:47 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 31, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#10 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php:31
2013-10-16 17:37:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: extra_menu_options ~ APPPATH/views/template.php [ 31 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php:31
2013-10-16 17:37:57 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 31, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#10 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php:31
2013-10-16 17:57:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/paginator/pagination.php [ 5 ] in :
2013-10-16 17:57:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-16 18:03:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/model/template.php [ 48 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php:48
2013-10-16 18:03:02 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 48, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(42): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#14 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php:48
2013-10-16 18:16:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/model/template.php [ 46 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php:46
2013-10-16 18:16:48 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 46, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(42): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#14 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php:46