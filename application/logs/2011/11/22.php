<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-22 15:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-22 15:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-22 15:24:53 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-11-22 15:24:53 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /var/www/cms/modules/auth/classes/kohana/auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/cms/application/classes/controller/system/auth.php(33): Kohana_Auth::instance()
#5 [internal function]: Controller_System_Auth->action_signin()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-22 15:29:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method CRUD_Item_Execute_Text::position() ~ APPPATH/views/crud/default/edit.php [ 19 ]
2011-11-22 15:29:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method CRUD_Item_Execute_Text::position() ~ APPPATH/views/crud/default/edit.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-22 15:31:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method CRUD_Item_Options::right2() ~ APPPATH/classes/model/example.php [ 23 ]
2011-11-22 15:31:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method CRUD_Item_Options::right2() ~ APPPATH/classes/model/example.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}