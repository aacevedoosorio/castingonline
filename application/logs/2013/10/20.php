<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-20 15:08:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The get property does not exist in the Model_Model class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php:600
2013-10-20 15:08:26 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('get')
#1 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/list.php(22): Kohana_ORM->__get('get')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php(46): Kohana_View->__toString()
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(43): Kohana_View->__toString()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#16 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#19 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php:600
2013-10-20 15:08:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The get property does not exist in the Model_Model class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php:600
2013-10-20 15:08:52 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('get')
#1 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/list.php(22): Kohana_ORM->__get('get')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php(46): Kohana_View->__toString()
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(43): Kohana_View->__toString()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#16 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#19 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php:600
2013-10-20 15:09:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The get property does not exist in the Model_Model class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php:600
2013-10-20 15:09:38 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('get')
#1 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/list.php(22): Kohana_ORM->__get('get')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/model/template.php(46): Kohana_View->__toString()
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(43): Kohana_View->__toString()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#16 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#19 {main} in /Users/alejandroacevedo/Projects/vhosts/core/modules/orm/classes/Kohana/ORM.php:600
2013-10-20 15:10:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/model/list.php [ 22 ] in :
2013-10-20 15:10:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:03:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:03:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:03:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:03:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:03:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:03:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:04:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:04:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:04:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:04:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:04:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:07:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:07:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:07:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:07:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:07:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:07:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:07:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:07:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:07:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:07:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:07:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:07:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:07:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in :
2013-10-20 16:07:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:11:33 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:11:33 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:11:39 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:11:39 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:13:30 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:13:30 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:01 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:01 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:14 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:14 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:32 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:32 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:49 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:49 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:52 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:52 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:56 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Model::action_edit(), called in /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Model.php [ 109 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:14:56 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php(109): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/alejandr...', 109, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(84): Controller_Model->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#7 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/Model.php:109
2013-10-20 16:51:29 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 19 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/User.php:19
2013-10-20 16:51:29 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/User.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/alejandr...', 19, Array)
#1 [internal function]: Controller_User->__construct(Object(Request), Object(Response))
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#6 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/classes/Controller/User.php:19
2013-10-20 16:54:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/Controller/Model.php [ 47 ] in :
2013-10-20 16:54:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-20 16:59:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: css_library ~ APPPATH/views/extra_css.php [ 8 ] in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/extra_css.php:8
2013-10-20 16:59:11 --- DEBUG: #0 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/extra_css.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/alejandr...', 8, Array)
#1 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#2 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#3 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/template.php(18): Kohana_View->__toString()
#5 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(61): include('/Users/alejandr...')
#6 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/alejandr...', Array)
#7 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Model))
#11 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/alejandroacevedo/Projects/vhosts/core/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/alejandroacevedo/Projects/vhosts/castingonline/index.php(132): Kohana_Request->execute()
#14 {main} in /Users/alejandroacevedo/Projects/vhosts/castingonline/application/views/extra_css.php:8