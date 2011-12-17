<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-07 17:53:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:53:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:56:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
2011-12-07 17:56:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:56:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
2011-12-07 17:56:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:56:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
2011-12-07 17:56:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:56:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
2011-12-07 17:56:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:56:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
2011-12-07 17:56:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:56:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
2011-12-07 17:56:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/crud/item/execute/hasmany.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:57:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:57:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:57:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:57:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:57:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:57:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:57:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:57:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:57:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:57:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:57:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:57:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:59:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:59:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:59:55 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-07 17:59:55 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 17:59:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:59:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:59:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:59:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:59:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:59:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 17:59:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 17:59:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:00:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:00:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:00 --- ERROR: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-07 18:01:00 --- STRACE: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->__get('image')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#4 [internal function]: Controller_Admin_CRUD->action_index()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 18:01:01 --- ERROR: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-07 18:01:01 --- STRACE: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->__get('image')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#4 [internal function]: Controller_Admin_CRUD->action_index()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 18:01:01 --- ERROR: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-07 18:01:01 --- STRACE: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->__get('image')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#4 [internal function]: Controller_Admin_CRUD->action_index()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 18:01:02 --- ERROR: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-07 18:01:02 --- STRACE: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->__get('image')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#4 [internal function]: Controller_Admin_CRUD->action_index()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 18:01:02 --- ERROR: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-07 18:01:02 --- STRACE: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->__get('image')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#4 [internal function]: Controller_Admin_CRUD->action_index()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 18:01:02 --- ERROR: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-07 18:01:02 --- STRACE: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->__get('image')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#4 [internal function]: Controller_Admin_CRUD->action_index()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 18:01:02 --- ERROR: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-07 18:01:02 --- STRACE: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->__get('image')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#4 [internal function]: Controller_Admin_CRUD->action_index()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 18:01:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:01:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:01:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(14): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:02:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:02:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:03:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:03:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:03:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:03:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:03:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:03:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:03:37 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:03:37 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:03:48 --- ERROR: ErrorException [ 8 ]: Undefined index: test ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:03:48 --- STRACE: ErrorException [ 8 ]: Undefined index: test ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:04:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:04:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:04:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:04:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:04:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:04:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:04:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:04:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:04:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:04:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:04:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-07 18:04:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/hasmany.php(15): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_HasMany->on_show(Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#5 /var/www/cms/application/classes/controller/admin/crud.php(64): Controller_Admin_CRUD->GET_show()
#6 [internal function]: Controller_Admin_CRUD->action_index()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-07 18:05:20 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:05:20 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:41 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:41 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:42 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:42 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:43 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:43 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:44 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:44 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:44 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:44 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:45 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:45 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:45 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:45 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:45 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:45 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:46 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:46 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:46 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:46 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:47 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:47 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:47 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:47 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:47 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:47 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:47 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:47 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:48 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:48 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:48 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:48 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:48 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:48 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:49 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:49 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:49 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:49 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:49 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:49 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:49 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:49 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:49 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:49 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:06:51 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:06:51 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:01 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:01 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:02 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:02 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:03 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:03 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:03 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:03 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:04 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:04 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:38 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:38 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:39 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:39 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:40 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:40 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:08:40 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:08:40 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:09:24 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
2011-12-07 18:09:24 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 120 ]
--
#0 /var/www/cms/application/classes/model/crud.php(120): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 120, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:10:35 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:10:35 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:10:36 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:10:36 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:10:37 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:10:37 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-07 18:10:38 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
2011-12-07 18:10:38 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ APPPATH/classes/model/crud.php [ 119 ]
--
#0 /var/www/cms/application/classes/model/crud.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 119, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}