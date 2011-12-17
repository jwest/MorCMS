<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-10 00:03:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'examples' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `examples` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-10 00:03:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'examples' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `examples` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/model/crud.php(126): Kohana_ORM->count_all()
#3 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#4 [internal function]: Controller_Admin_CRUD->GET_show()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 00:04:34 --- ERROR: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:04:34 --- STRACE: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(72): Kohana_ORM->__get('examples')
#1 /var/www/cms/application/classes/model/crud.php(119): CRUD_Item_Execute_ManyToMany->on_filter(Object(Model_Example), '1')
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:52:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method CRUD_Item_ManyToMany::all() ~ APPPATH/classes/model/test.php [ 20 ]
2011-12-10 00:52:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method CRUD_Item_ManyToMany::all() ~ APPPATH/classes/model/test.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-10 00:53:10 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:53:10 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(36): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:53:11 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:53:11 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(36): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:53:12 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:53:12 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(36): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:53:12 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:53:12 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(36): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:53:12 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-10 00:53:12 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 00:53:12 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:53:12 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(36): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:53:38 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:53:38 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(36): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:54:53 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:54:53 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(37): Kohana_ORM->__get('title')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:54:54 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-10 00:54:54 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(37): Kohana_ORM->__get('title')
#1 /var/www/cms/application/classes/model/crud.php(166): CRUD_Item_Execute_ManyToMany->on_show(Object(Model_Example))
#2 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#3 [internal function]: Controller_Admin_CRUD->GET_show()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 00:56:56 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 63 ]
2011-12-10 00:56:56 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-10 01:00:49 --- ERROR: ErrorException [ 8 ]: Undefined index: example ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
2011-12-10 01:00:49 --- STRACE: ErrorException [ 8 ]: Undefined index: example ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(1438): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/mo...', 1438, Array)
#1 /var/www/cms/application/classes/crud/item/execute/manytomany.php(82): Kohana_ORM->remove('example')
#2 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '1')
#3 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 01:01:04 --- ERROR: ErrorException [ 8 ]: Undefined index: examples ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
2011-12-10 01:01:04 --- STRACE: ErrorException [ 8 ]: Undefined index: examples ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(1438): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/mo...', 1438, Array)
#1 /var/www/cms/application/classes/crud/item/execute/manytomany.php(82): Kohana_ORM->remove('examples')
#2 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '1')
#3 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 01:02:11 --- ERROR: ErrorException [ 8 ]: Undefined index: exampleses ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
2011-12-10 01:02:11 --- STRACE: ErrorException [ 8 ]: Undefined index: exampleses ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(1438): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/mo...', 1438, Array)
#1 /var/www/cms/application/classes/crud/item/execute/manytomany.php(82): Kohana_ORM->remove('exampleses')
#2 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '1')
#3 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 01:02:26 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-10 01:02:26 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 01:02:30 --- ERROR: ErrorException [ 8 ]: Undefined index: examples ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
2011-12-10 01:02:30 --- STRACE: ErrorException [ 8 ]: Undefined index: examples ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(1438): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/mo...', 1438, Array)
#1 /var/www/cms/application/classes/crud/item/execute/manytomany.php(82): Kohana_ORM->remove('examples')
#2 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '1')
#3 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 01:03:09 --- ERROR: ErrorException [ 8 ]: Undefined index: examples ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
2011-12-10 01:03:09 --- STRACE: ErrorException [ 8 ]: Undefined index: examples ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(1438): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/mo...', 1438, Array)
#1 /var/www/cms/application/classes/crud/item/execute/manytomany.php(83): Kohana_ORM->remove('examples')
#2 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '1')
#3 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 01:03:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/classes/crud/item/execute/manytomany.php [ 82 ]
2011-12-10 01:03:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/classes/crud/item/execute/manytomany.php [ 82 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 82, Array)
#1 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '1')
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 01:04:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-10 01:04:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(85): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '2')
#4 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-10 01:05:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-10 01:05:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(86): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '2')
#4 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-10 01:06:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-10 01:06:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(86): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '2')
#4 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-10 01:06:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-10 01:06:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(86): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '2')
#4 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-10 01:07:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-10 01:07:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(86): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '2')
#4 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-10 01:08:24 --- ERROR: ErrorException [ 8 ]: Undefined index: examples ~ APPPATH/classes/crud/item/execute/manytomany.php [ 86 ]
2011-12-10 01:08:24 --- STRACE: ErrorException [ 8 ]: Undefined index: examples ~ APPPATH/classes/crud/item/execute/manytomany.php [ 86 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 86, Array)
#1 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '2')
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 01:08:55 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-10 01:08:55 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/cms/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/cms/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/cms/application/classes/controller/system/admin.php(48): Kohana_Session::instance()
#3 /var/www/cms/application/classes/controller/admin/crud.php(42): Controller_System_Admin->before()
#4 [internal function]: Controller_Admin_CRUD->before()
#5 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-10 01:09:01 --- ERROR: ErrorException [ 8 ]: Undefined index: examples ~ APPPATH/classes/crud/item/execute/manytomany.php [ 86 ]
2011-12-10 01:09:01 --- STRACE: ErrorException [ 8 ]: Undefined index: examples ~ APPPATH/classes/crud/item/execute/manytomany.php [ 86 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 86, Array)
#1 /var/www/cms/application/classes/model/crud.php(312): CRUD_Item_Execute_ManyToMany->after_update(Object(Model_Example), '2')
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-10 01:09:37 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-10 01:09:37 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-10 01:09:39 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-10 01:09:39 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-10 01:09:59 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-10 01:09:59 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-10 01:10:33 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-10 01:10:33 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-10 01:11:06 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-10 01:11:06 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-10 01:11:10 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-10 01:11:10 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}