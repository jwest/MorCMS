<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-26 08:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-26 08:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-26 08:06:35 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-11-26 08:06:35 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('images')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(34): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(53): Kohana_ORM::factory('image')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-11-26 08:07:19 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-11-26 08:07:19 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('images')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(34): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(53): Kohana_ORM::factory('image')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-11-26 08:08:27 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: Permission denied ~ APPPATH/classes/crud/observer/model.php [ 90 ]
2011-11-26 08:08:27 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: Permission denied ~ APPPATH/classes/crud/observer/model.php [ 90 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/var/www/cms/ap...', 90, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(90): mkdir('/var/www/cms/ap...', 511)
#2 /var/www/cms/application/classes/crud/observer/model.php(72): CRUD_Observer_Model->update_migrations_info()
#3 /var/www/cms/application/classes/crud/observer/model.php(49): CRUD_Observer_Model->get_migrations_info()
#4 /var/www/cms/application/classes/model/crud.php(295): CRUD_Observer_Model->__construct('image', Array)
#5 /var/www/cms/application/classes/model/crud.php(35): Model_CRUD->observe_change()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#7 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#8 /var/www/cms/application/classes/controller/admin/crud.php(53): Kohana_ORM::factory('image')
#9 [internal function]: Controller_Admin_CRUD->before()
#10 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#11 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/cms/index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-26 08:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-26 08:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-26 08:20:19 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-11-26 08:20:19 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-26 08:20:20 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/observer/generator.php [ 154 ]
2011-11-26 08:20:20 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/observer/generator.php [ 154 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(154): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 154, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(159): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(296): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(35): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(53): Kohana_ORM::factory('image')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-11-26 08:20:23 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:20:23 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:20:24 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:20:24 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:20:25 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:20:25 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:20:26 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:20:26 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:20:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:20:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:20:28 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:20:28 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:21:46 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:21:46 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:22:54 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:22:54 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:26:56 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:26:56 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:27:03 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:27:03 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:28:24 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:28:24 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:28:56 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:28:56 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:29:34 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:29:34 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:30:38 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
2011-11-26 08:30:38 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
--
#0 /var/www/cms/application/classes/model/crud.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 52, Array)
#1 /var/www/cms/application/classes/model/crud.php(81): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:31:55 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:31:55 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:35:13 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
2011-11-26 08:35:13 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 51 ]
--
#0 /var/www/cms/application/classes/model/crud.php(51): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 51, Array)
#1 /var/www/cms/application/classes/model/crud.php(80): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:35:44 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:35:44 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:36:09 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:36:09 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:36:10 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:36:10 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:36:10 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:36:10 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:36:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-11-26 08:36:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-26 08:36:40 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:36:40 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:36:41 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:36:41 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:36:42 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:36:42 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:38:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:38:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:40:16 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:40:16 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:40:18 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:40:18 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:40:19 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:40:19 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:41:00 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:41:00 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:41:02 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:41:02 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:41:02 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
2011-11-26 08:41:02 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 53 ]
--
#0 /var/www/cms/application/classes/model/crud.php(53): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 53, Array)
#1 /var/www/cms/application/classes/model/crud.php(82): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:41:24 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
2011-11-26 08:41:24 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
--
#0 /var/www/cms/application/classes/model/crud.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 52, Array)
#1 /var/www/cms/application/classes/model/crud.php(81): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:41:25 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
2011-11-26 08:41:25 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
--
#0 /var/www/cms/application/classes/model/crud.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 52, Array)
#1 /var/www/cms/application/classes/model/crud.php(81): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-26 08:41:26 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
2011-11-26 08:41:26 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/model/crud.php [ 52 ]
--
#0 /var/www/cms/application/classes/model/crud.php(52): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/cms/ap...', 52, Array)
#1 /var/www/cms/application/classes/model/crud.php(81): Model_CRUD->get_items()
#2 /var/www/cms/application/classes/controller/admin/crud.php(74): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}