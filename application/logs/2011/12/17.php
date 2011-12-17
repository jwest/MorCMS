<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-17 01:34:43 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/model/crud.php [ 456 ]
2011-12-17 01:34:43 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/model/crud.php [ 456 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 01:35:33 --- ERROR: ErrorException [ 8 ]: Undefined index: pages ~ APPPATH/classes/model/crud.php [ 243 ]
2011-12-17 01:35:33 --- STRACE: ErrorException [ 8 ]: Undefined index: pages ~ APPPATH/classes/model/crud.php [ 243 ]
--
#0 /var/www/cms/application/classes/model/crud.php(243): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 243, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#2 [internal function]: Controller_Admin_CRUD->action_add()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-17 12:20:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/model/crud.php [ 456 ]
2011-12-17 12:20:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/model/crud.php [ 456 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 12:25:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-17 12:25:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 12:26:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-17 12:26:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 12:26:23 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-17 12:26:23 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-17 12:26:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-17 12:26:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 12:30:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-17 12:30:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 12:31:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-17 12:31:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 12:31:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-17 12:31:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 12:31:50 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-17 12:31:50 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menus')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/crud/item/execute/manytomany.php(78): Kohana_ORM::factory('menu')
#8 /var/www/cms/application/views/crud/default/edit.php(40): CRUD_Item_Execute_ManyToMany->input_create(NULL)
#9 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#10 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#11 /var/www/cms/application/classes/controller/admin/crud.php(152): Kohana_View->render()
#12 [internal function]: Controller_Admin_CRUD->action_add()
#13 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#14 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/cms/index.php(109): Kohana_Request->execute()
#17 {main}
2011-12-17 12:31:51 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-17 12:31:51 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menus')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/crud/item/execute/manytomany.php(78): Kohana_ORM::factory('menu')
#8 /var/www/cms/application/views/crud/default/edit.php(40): CRUD_Item_Execute_ManyToMany->input_create(NULL)
#9 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#10 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#11 /var/www/cms/application/classes/controller/admin/crud.php(152): Kohana_View->render()
#12 [internal function]: Controller_Admin_CRUD->action_add()
#13 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#14 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/cms/index.php(109): Kohana_Request->execute()
#17 {main}
2011-12-17 12:31:52 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-17 12:31:52 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menus')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/crud/item/execute/manytomany.php(78): Kohana_ORM::factory('menu')
#8 /var/www/cms/application/views/crud/default/edit.php(40): CRUD_Item_Execute_ManyToMany->input_create(NULL)
#9 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#10 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#11 /var/www/cms/application/classes/controller/admin/crud.php(152): Kohana_View->render()
#12 [internal function]: Controller_Admin_CRUD->action_add()
#13 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#14 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/cms/index.php(109): Kohana_Request->execute()
#17 {main}
2011-12-17 12:31:53 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-17 12:31:53 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menus')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/crud/item/execute/manytomany.php(78): Kohana_ORM::factory('menu')
#8 /var/www/cms/application/views/crud/default/edit.php(40): CRUD_Item_Execute_ManyToMany->input_create(NULL)
#9 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#10 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#11 /var/www/cms/application/classes/controller/admin/crud.php(152): Kohana_View->render()
#12 [internal function]: Controller_Admin_CRUD->action_add()
#13 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#14 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#15 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/cms/index.php(109): Kohana_Request->execute()
#17 {main}
2011-12-17 12:32:25 --- ERROR: ErrorException [ 8 ]: Undefined index: pages ~ APPPATH/classes/model/crud.php [ 243 ]
2011-12-17 12:32:25 --- STRACE: ErrorException [ 8 ]: Undefined index: pages ~ APPPATH/classes/model/crud.php [ 243 ]
--
#0 /var/www/cms/application/classes/model/crud.php(243): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 243, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#2 [internal function]: Controller_Admin_CRUD->action_add()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-17 12:34:52 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'menu_pages' [ SELECT `menu`.* FROM `menu` AS `menu` JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) WHERE `menu_pages`.`page_id` = '1' AND `menu_pages`.`page_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-17 12:34:52 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'menu_pages' [ SELECT `menu`.* FROM `menu` AS `menu` JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) WHERE `menu_pages`.`page_id` = '1' AND `menu_pages`.`page_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `menu`.*...', 'Model_Menu', Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/cms/application/classes/model/crud.php(147): Kohana_ORM->find_all()
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 [internal function]: Controller_Admin_CRUD->GET_show()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-17 13:03:43 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'menu_pages' [ SELECT `menu`.* FROM `menu` AS `menu` JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) WHERE `menu_pages`.`page_id` = '2' AND `menu_pages`.`page_id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-17 13:03:43 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'menu_pages' [ SELECT `menu`.* FROM `menu` AS `menu` JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) JOIN `menu_pages` ON (`menu_pages`.`menu_id` = `id`) WHERE `menu_pages`.`page_id` = '2' AND `menu_pages`.`page_id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `menu`.*...', 'Model_Menu', Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/cms/application/classes/model/crud.php(147): Kohana_ORM->find_all()
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 [internal function]: Controller_Admin_CRUD->GET_show()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-17 13:04:34 --- ERROR: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-17 13:04:34 --- STRACE: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(37): Kohana_ORM->__get('email')
#1 /var/www/cms/application/classes/model/crud.php(167): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Menu))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-17 13:04:36 --- ERROR: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-17 13:04:36 --- STRACE: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(37): Kohana_ORM->__get('email')
#1 /var/www/cms/application/classes/model/crud.php(167): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Menu))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-17 13:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-17 13:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 13:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-17 13:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 13:12:33 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
2011-12-17 13:12:33 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:12:34 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
2011-12-17 13:12:34 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:12:35 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
2011-12-17 13:12:35 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:12:35 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
2011-12-17 13:12:35 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:12:35 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
2011-12-17 13:12:35 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Users_CRUD' not found ~ APPPATH/classes/controller/admin/users.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:12:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
2011-12-17 13:12:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:16:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
2011-12-17 13:16:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:17:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
2011-12-17 13:17:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:17:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
2011-12-17 13:17:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:17:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
2011-12-17 13:17:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get_array() ~ APPPATH/classes/controller/admin/crud.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
2011-12-17 13:37:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
2011-12-17 13:37:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
2011-12-17 13:37:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
2011-12-17 13:37:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
2011-12-17 13:37:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED, expecting '{' ~ MODPATH/orm/classes/model/auth/user.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:48 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:48 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:48 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:48 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:49 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:49 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:50 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:50 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:50 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:50 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:51 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:51 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:51 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:51 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:52 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:52 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 13:37:52 --- ERROR: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
2011-12-17 13:37:52 --- STRACE: ErrorException [ 1 ]: Class Model_Auth_User contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Model_CRUD::items) ~ MODPATH/orm/classes/model/auth/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 14:03:38 --- ERROR: ErrorException [ 8 ]: Undefined index: auto ~ APPPATH/classes/crud/item/execute/date.php [ 54 ]
2011-12-17 14:03:38 --- STRACE: ErrorException [ 8 ]: Undefined index: auto ~ APPPATH/classes/crud/item/execute/date.php [ 54 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/date.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 54, Array)
#1 /var/www/cms/application/classes/model/crud.php(327): CRUD_Item_Execute_Date->on_update('1324120646')
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-17 14:05:17 --- ERROR: ErrorException [ 8 ]: Undefined index: auto ~ APPPATH/classes/crud/item/execute/date.php [ 54 ]
2011-12-17 14:05:17 --- STRACE: ErrorException [ 8 ]: Undefined index: auto ~ APPPATH/classes/crud/item/execute/date.php [ 54 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/date.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 54, Array)
#1 /var/www/cms/application/classes/model/crud.php(327): CRUD_Item_Execute_Date->on_update(NULL)
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-17 14:05:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-17 14:05:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-17 14:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-17 14:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 14:10:58 --- ERROR: Kohana_Exception [ 0 ]: The menu property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-17 14:10:58 --- STRACE: Kohana_Exception [ 0 ]: The menu property does not exist in the Model_Page class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/model/crud.php(170): Kohana_ORM->__get('menu')
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#3 [internal function]: Controller_Admin_CRUD->action_index()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-17 14:11:08 --- ERROR: Kohana_Exception [ 0 ]: The pages property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-17 14:11:08 --- STRACE: Kohana_Exception [ 0 ]: The pages property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/model/crud.php(170): Kohana_ORM->__get('pages')
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#3 [internal function]: Controller_Admin_CRUD->action_index()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-17 14:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-17 14:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 14:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-17 14:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 14:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-17 14:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 14:24:00 --- ERROR: ErrorException [ 8 ]: Undefined index: crud_options ~ APPPATH/classes/model/crud.php [ 123 ]
2011-12-17 14:24:00 --- STRACE: ErrorException [ 8 ]: Undefined index: crud_options ~ APPPATH/classes/model/crud.php [ 123 ]
--
#0 /var/www/cms/application/classes/model/crud.php(123): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 123, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-17 14:58:12 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.menu_roles' doesn't exist [ SELECT `menu`.* FROM `menu` AS `menu` JOIN `menu_roles` ON (`menu_roles`.`menu_id` = `menu`.`id`) WHERE `menu_roles`.`role_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-17 14:58:12 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.menu_roles' doesn't exist [ SELECT `menu`.* FROM `menu` AS `menu` JOIN `menu_roles` ON (`menu_roles`.`menu_id` = `menu`.`id`) WHERE `menu_roles`.`role_id` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `menu`.*...', 'Model_Menu', Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/cms/application/classes/crud/item/execute/manytomany.php(32): Kohana_ORM->find_all()
#4 /var/www/cms/application/classes/model/crud.php(170): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Menu))
#5 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#6 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#7 [internal function]: Controller_Admin_CRUD->action_index()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Roles))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-17 14:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/auth/noaccess was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
2011-12-17 14:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/auth/noaccess was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 15:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/auth/noaccess was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
2011-12-17 15:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/auth/noaccess was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 15:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-17 15:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/index was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}