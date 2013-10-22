<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-22 00:39:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/views/model/create.php [ 24 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:24
2013-10-22 00:39:34 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 24, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(137): Kohana_Response->body(Object(View))
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#9 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#12 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:24
2013-10-22 00:46:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/views/model/create.php [ 24 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:24
2013-10-22 00:46:32 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 24, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(137): Kohana_Response->body(Object(View))
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#9 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#12 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/create.php:24