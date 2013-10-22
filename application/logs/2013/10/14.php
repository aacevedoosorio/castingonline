<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-14 15:28:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/model/create.php [ 8 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:8
2013-10-14 15:28:31 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 8, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(45): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#14 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:8
2013-10-14 15:28:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/model/create.php [ 8 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:8
2013-10-14 15:28:56 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 8, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(45): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#14 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:8