<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-12 20:37:15 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
2011-12-12 20:37:15 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 20:37:46 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
2011-12-12 20:37:46 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 20:37:48 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
2011-12-12 20:37:48 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 20:37:57 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/crud/item/manytomany.php [ 57 ]
2011-12-12 20:37:57 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/crud/item/manytomany.php [ 57 ]
--
#0 /var/www/cms/application/classes/crud/item/manytomany.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/cms/ap...', 57, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(179): CRUD_Item_ManyToMany::observe_param(Object(CRUD_Item_ManyToMany), 'page')
#2 /var/www/cms/application/classes/crud/observer/model.php(51): CRUD_Observer_Model->get_data(Array)
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('page', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:38:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/crud/item/manytomany.php [ 57 ]
2011-12-12 20:38:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/crud/item/manytomany.php [ 57 ]
--
#0 /var/www/cms/application/classes/crud/item/manytomany.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/cms/ap...', 57, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(179): CRUD_Item_ManyToMany::observe_param(Object(CRUD_Item_ManyToMany), 'page')
#2 /var/www/cms/application/classes/crud/observer/model.php(51): CRUD_Observer_Model->get_data(Array)
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('page', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:38:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant stop - assumed 'stop' ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
2011-12-12 20:38:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant stop - assumed 'stop' ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
--
#0 /var/www/cms/application/classes/crud/item/manytomany.php(48): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/cms/ap...', 48, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(179): CRUD_Item_ManyToMany::observe_param(Object(CRUD_Item_ManyToMany), 'page')
#2 /var/www/cms/application/classes/crud/observer/model.php(51): CRUD_Observer_Model->get_data(Array)
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('page', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:40:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
2011-12-12 20:40:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
--
#0 /var/www/cms/application/classes/crud/item/manytomany.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 48, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(179): CRUD_Item_ManyToMany::observe_param(Object(CRUD_Item_ManyToMany), 'page')
#2 /var/www/cms/application/classes/crud/observer/model.php(51): CRUD_Observer_Model->get_data(Array)
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('page', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:40:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
2011-12-12 20:40:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
--
#0 /var/www/cms/application/classes/crud/item/manytomany.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 48, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(179): CRUD_Item_ManyToMany::observe_param(Object(CRUD_Item_ManyToMany), 'page')
#2 /var/www/cms/application/classes/crud/observer/model.php(51): CRUD_Observer_Model->get_data(Array)
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('page', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:40:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
2011-12-12 20:40:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
--
#0 /var/www/cms/application/classes/crud/item/manytomany.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 48, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(179): CRUD_Item_ManyToMany::observe_param(Object(CRUD_Item_ManyToMany), 'page')
#2 /var/www/cms/application/classes/crud/observer/model.php(51): CRUD_Observer_Model->get_data(Array)
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('page', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:40:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
2011-12-12 20:40:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: models ~ APPPATH/classes/crud/item/manytomany.php [ 48 ]
--
#0 /var/www/cms/application/classes/crud/item/manytomany.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 48, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(179): CRUD_Item_ManyToMany::observe_param(Object(CRUD_Item_ManyToMany), 'page')
#2 /var/www/cms/application/classes/crud/observer/model.php(51): CRUD_Observer_Model->get_data(Array)
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('page', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-12 20:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-12 20:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menus was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-12 20:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menus was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-12 20:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menus was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-12 20:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menus was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-12 20:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menus was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-12 20:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menus was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-12 20:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-12 20:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-12 20:47:57 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Menu_CRUD' not found ~ APPPATH/classes/controller/admin/menu.php [ 3 ]
2011-12-12 20:47:57 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Menu_CRUD' not found ~ APPPATH/classes/controller/admin/menu.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 20:48:09 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-12 20:48:09 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 163, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(159): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 20:48:10 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 20:48:10 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:19:11 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-12 21:19:11 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 163, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(159): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:19:44 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-12 21:19:44 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 163, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(159): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:45:25 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:45:25 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:45:27 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:45:27 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:45:29 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:45:29 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:45:30 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:45:30 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:46:27 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:46:27 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:46:32 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:46:32 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:47:22 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:47:22 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:47:45 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:47:45 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:47:46 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:47:46 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:47:47 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:47:47 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:50:30 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:50:30 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:51:31 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:51:31 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:51:43 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:51:43 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:51:44 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:51:44 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:52:03 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:52:03 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:54:21 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:54:21 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:54:53 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:54:53 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:55:08 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:55:08 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:55:09 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:55:09 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:55:09 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:55:09 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:55:10 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:55:10 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:56:01 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:56:01 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:56:17 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:56:17 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:56:28 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:56:28 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:56:28 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:56:28 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:56:51 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:56:51 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:56:52 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:56:52 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:58:47 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:58:47 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:59:10 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:59:10 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:59:29 --- ERROR: ErrorException [ 2 ]: file_put_contents(/var/www/cms/application/workspace/migrations/data/menu/mig.dat) [function.file-put-contents]: failed to open stream: Brak dostępu ~ APPPATH/classes/crud/observer/model.php [ 93 ]
2011-12-12 21:59:29 --- STRACE: ErrorException [ 2 ]: file_put_contents(/var/www/cms/application/workspace/migrations/data/menu/mig.dat) [function.file-put-contents]: failed to open stream: Brak dostępu ~ APPPATH/classes/crud/observer/model.php [ 93 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/cms/ap...', 93, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(93): file_put_contents('/var/www/cms/ap...', 'a:2:{s:12:"migr...')
#2 /var/www/cms/application/classes/crud/observer/model.php(72): CRUD_Observer_Model->update_migrations_info()
#3 /var/www/cms/application/classes/crud/observer/model.php(49): CRUD_Observer_Model->get_migrations_info()
#4 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('menu', Array)
#5 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#7 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#8 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#9 [internal function]: Controller_Admin_CRUD->before()
#10 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#11 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/cms/index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-12 21:59:50 --- ERROR: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 120 ]
2011-12-12 21:59:50 --- STRACE: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 120 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(90): CRUD_Observer_Generator->create_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(159): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 21:59:56 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 21:59:56 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:00:40 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:00:40 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:01:36 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:01:36 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:01:37 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:01:37 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:01:42 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:01:42 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:01:43 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:01:43 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:02:08 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:02:08 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:02:09 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:02:09 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:02:23 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:02:23 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:02:24 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:02:24 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:05:56 --- ERROR: ErrorException [ 8 ]: Undefined property: CRUD_Observer_Model::$executed ~ APPPATH/classes/crud/observer/model.php [ 93 ]
2011-12-12 22:05:56 --- STRACE: ErrorException [ 8 ]: Undefined property: CRUD_Observer_Model::$executed ~ APPPATH/classes/crud/observer/model.php [ 93 ]
--
#0 /var/www/cms/application/classes/crud/observer/model.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/cms/ap...', 93, Array)
#1 /var/www/cms/application/classes/crud/observer/model.php(80): CRUD_Observer_Model->update_migrations_info()
#2 /var/www/cms/application/classes/crud/observer/model.php(56): CRUD_Observer_Model->get_migrations_info()
#3 /var/www/cms/application/classes/model/crud.php(467): CRUD_Observer_Model->__construct('menu', Array)
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:06:31 --- ERROR: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 120 ]
2011-12-12 22:06:31 --- STRACE: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 120 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(90): CRUD_Observer_Generator->create_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(168): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:06:32 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:06:32 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:06:33 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:06:33 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:09:03 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:09:03 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:10:11 --- ERROR: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 120 ]
2011-12-12 22:10:11 --- STRACE: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 120 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(90): CRUD_Observer_Generator->create_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(176): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:10:34 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:10:34 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:11:39 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:11:39 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:11:39 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:11:39 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:11:40 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:11:40 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:11:41 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:11:41 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:11:56 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-12 22:11:56 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 163, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(176): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:12:00 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:12:00 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:12:01 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:12:01 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:12:43 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-12 22:12:43 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 163, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(176): CRUD_Observer_Generator->exec()
#3 /var/www/cms/application/classes/model/crud.php(468): CRUD_Observer_Model->create_migration()
#4 /var/www/cms/application/classes/model/crud.php(61): Model_CRUD->observe_change()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:12:53 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:12:53 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:12:54 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:12:54 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-12 22:15:42 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-12 22:15:42 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('menu')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}