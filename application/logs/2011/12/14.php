<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-14 17:33:46 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:33:46 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:36:04 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-14 17:36:04 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
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
2011-12-14 17:37:26 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:37:26 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:37:27 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:37:27 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:38:07 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-14 17:38:07 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
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
2011-12-14 17:41:25 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:41:25 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:41:25 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:41:25 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:41:26 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:41:26 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:41:27 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:41:27 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:43:43 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:43:43 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:43:44 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:43:44 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:43:53 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-14 17:43:53 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 163, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(177): CRUD_Observer_Generator->exec()
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
2011-12-14 17:43:57 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:43:57 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:44:21 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
2011-12-14 17:44:21 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 163 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(163): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 163, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(91): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(174): CRUD_Observer_Generator->exec()
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
2011-12-14 17:44:25 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:44:25 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:46:18 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:46:18 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:46:19 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:46:19 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:46:27 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 169 ]
2011-12-14 17:46:27 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 169 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(169): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 169, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(96): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(173): CRUD_Observer_Generator->exec(8)
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
2011-12-14 17:46:29 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:46:29 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:46:32 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:46:32 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:46:33 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:46:33 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:46:36 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 169 ]
2011-12-14 17:46:36 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url ~ APPPATH/classes/crud/observer/generator.php [ 169 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(169): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 169, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(96): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(173): CRUD_Observer_Generator->exec(9)
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
2011-12-14 17:47:45 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-14 17:47:45 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-14 17:47:45 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:47:45 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:47:47 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:47:47 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:47:51 --- ERROR: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 168 ]
2011-12-14 17:47:51 --- STRACE: ErrorException [ 8 ]: Undefined index: title_url2 ~ APPPATH/classes/crud/observer/generator.php [ 168 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(168): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 168, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(96): CRUD_Observer_Generator->alter_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(173): CRUD_Observer_Generator->exec(10)
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
2011-12-14 17:50:11 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:50:11 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:50:12 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:50:12 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:50:18 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:50:18 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:51:20 --- ERROR: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 125 ]
2011-12-14 17:51:20 --- STRACE: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 125 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(125): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 125, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(95): CRUD_Observer_Generator->create_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(173): CRUD_Observer_Generator->exec(1)
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
2011-12-14 17:51:59 --- ERROR: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 136 ]
2011-12-14 17:51:59 --- STRACE: ErrorException [ 8 ]: Undefined index: var ~ APPPATH/classes/crud/observer/generator.php [ 136 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(136): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 136, Array)
#1 /var/www/cms/application/classes/crud/observer/generator.php(95): CRUD_Observer_Generator->create_table()
#2 /var/www/cms/application/classes/crud/observer/model.php(173): CRUD_Observer_Generator->exec(1)
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
2011-12-14 17:52:35 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:52:35 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:56:41 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:56:41 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:56:56 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:56:56 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 17:56:57 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 17:56:57 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 18:00:30 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 18:00:30 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-14 18:00:40 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-14 18:00:40 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu' doesn't exist [ SHOW FULL COLUMNS FROM `menu` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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