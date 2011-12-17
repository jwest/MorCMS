<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-11 00:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jw.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 00:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: jw.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 00:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/jw.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 00:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/jw.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 00:03:42 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-11 00:03:42 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 00:03:58 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
2011-12-11 00:03:58 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 00:05:06 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 69 ]
2011-12-11 00:05:06 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 00:05:27 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 70 ]
2011-12-11 00:05:27 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 00:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-11 00:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-11 00:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-11 00:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-11 00:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-12-11 00:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-11 00:40:22 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 70 ]
2011-12-11 00:40:22 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/manytomany.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 00:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application/classes/crud/item/execute/manytomany.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 00:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application/classes/crud/item/execute/manytomany.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 00:50:58 --- ERROR: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-12-11 00:50:58 --- STRACE: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('examples', NULL)
#1 /var/www/cms/application/classes/model/crud.php(297): Kohana_ORM->__set('examples', NULL)
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 00:55:27 --- ERROR: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-12-11 00:55:27 --- STRACE: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('examples', NULL)
#1 /var/www/cms/application/classes/model/crud.php(297): Kohana_ORM->__set('examples', NULL)
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:00:04 --- ERROR: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-12-11 01:00:04 --- STRACE: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('examples', NULL)
#1 /var/www/cms/application/classes/model/crud.php(297): Kohana_ORM->__set('examples', NULL)
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '1')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:04:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:04:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:04:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:04:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:06:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:06:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:06:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:06:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:06:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:06:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:06:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:06:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.test_id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`test_id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:06:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:06:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:06:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:06:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:06:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:06:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` JOIN `examples_tests` ON (`examples_tests`.`test_id` = `tests`.`id`) WHERE `examples_tests`.`example_id` = 22 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2011-12-11 01:15:02 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-11 01:15:02 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/result.php(136): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/crud/item/execute/manytomany.php(64): Kohana_Database_Result->as_array('name')
#2 /var/www/cms/application/classes/crud/item/execute.php(161): CRUD_Item_Execute_ManyToMany->input_create(Object(Model_Test))
#3 /var/www/cms/application/views/crud/default/edit.php(42): CRUD_Item_Execute->input_edit(Object(Model_Test))
#4 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#5 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#6 /var/www/cms/application/classes/controller/admin/crud.php(208): Kohana_View->render()
#7 [internal function]: Controller_Admin_CRUD->action_edit()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-11 01:16:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-11 01:16:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 01:16:45 --- ERROR: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-12-11 01:16:45 --- STRACE: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('examples', Array)
#1 /var/www/cms/application/classes/model/crud.php(243): Kohana_ORM->__set('examples', Array)
#2 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#3 [internal function]: Controller_Admin_CRUD->action_add()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:18:18 --- ERROR: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-12-11 01:18:18 --- STRACE: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('examples', Array)
#1 /var/www/cms/application/classes/model/crud.php(247): Kohana_ORM->__set('examples', Array)
#2 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#3 [internal function]: Controller_Admin_CRUD->action_add()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:20:09 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '12-0' for key 'PRIMARY' [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES (NULL, '12'), (NULL, '24') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:20:09 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '12-0' for key 'PRIMARY' [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES (NULL, '12'), (NULL, '24') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(115): Kohana_ORM->add('examples', Array)
#3 /var/www/cms/application/classes/model/crud.php(243): CRUD_Item_Execute_ManyToMany->on_create(Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-11 01:20:42 --- ERROR: ErrorException [ 2048 ]: Declaration of CRUD_Item_Execute_ManyToMany::after_create() should be compatible with that of CRUD_Item_Execute::after_create() ~ APPPATH/classes/crud/item/execute/manytomany.php [ 140 ]
2011-12-11 01:20:42 --- STRACE: ErrorException [ 2048 ]: Declaration of CRUD_Item_Execute_ManyToMany::after_create() should be compatible with that of CRUD_Item_Execute::after_create() ~ APPPATH/classes/crud/item/execute/manytomany.php [ 140 ]
--
#0 /var/www/cms/system/classes/kohana/core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/cms/ap...', 140, Array)
#1 /var/www/cms/system/classes/kohana/core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('CRUD_Item_Execu...')
#3 /var/www/cms/application/classes/model/crud.php(99): spl_autoload_call('CRUD_Item_Execu...')
#4 /var/www/cms/application/classes/model/crud.php(231): Model_CRUD->get_items()
#5 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#6 [internal function]: Controller_Admin_CRUD->action_add()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-11 01:20:59 --- ERROR: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-12-11 01:20:59 --- STRACE: Kohana_Exception [ 0 ]: The examples property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('examples', Array)
#1 /var/www/cms/application/classes/model/crud.php(247): Kohana_ORM->__set('examples', Array)
#2 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#3 [internal function]: Controller_Admin_CRUD->action_add()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:22:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:22:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(127): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(271): CRUD_Item_Execute_ManyToMany->after_create(Object(Model_Example), Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-11 01:25:59 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
2011-12-11 01:25:59 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(110): Kohana_ORM->find()
#1 /var/www/cms/application/classes/model/crud.php(271): CRUD_Item_Execute_ManyToMany->after_create(Object(Model_Example), Object(Model_Test))
#2 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#3 [internal function]: Controller_Admin_CRUD->action_add()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:26:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:26:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(110): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(271): CRUD_Item_Execute_ManyToMany->after_create(Object(Model_Example), Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-11 01:27:06 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-12-11 01:27:06 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Test class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/manytomany.php(110): Kohana_ORM->__get('name')
#1 /var/www/cms/application/classes/model/crud.php(271): CRUD_Item_Execute_ManyToMany->after_create(Object(Model_Example), Object(Model_Test))
#2 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#3 [internal function]: Controller_Admin_CRUD->action_add()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:27:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 01:27:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `examples_tests` (`test_id`, `example_id`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ex...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/crud/item/execute/manytomany.php(110): Kohana_ORM->add('examples', Object(Model_Example))
#3 /var/www/cms/application/classes/model/crud.php(271): CRUD_Item_Execute_ManyToMany->after_create(Object(Model_Example), Object(Model_Test))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-11 01:34:48 --- ERROR: ErrorException [ 2048 ]: Declaration of CRUD_Item_Execute_ManyToMany::after_create() should be compatible with that of CRUD_Item_Execute::after_create() ~ APPPATH/classes/crud/item/execute/manytomany.php [ 153 ]
2011-12-11 01:34:48 --- STRACE: ErrorException [ 2048 ]: Declaration of CRUD_Item_Execute_ManyToMany::after_create() should be compatible with that of CRUD_Item_Execute::after_create() ~ APPPATH/classes/crud/item/execute/manytomany.php [ 153 ]
--
#0 /var/www/cms/system/classes/kohana/core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/cms/ap...', 153, Array)
#1 /var/www/cms/system/classes/kohana/core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('CRUD_Item_Execu...')
#3 /var/www/cms/application/classes/model/crud.php(99): spl_autoload_call('CRUD_Item_Execu...')
#4 /var/www/cms/application/classes/model/crud.php(231): Model_CRUD->get_items()
#5 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#6 [internal function]: Controller_Admin_CRUD->action_add()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Tests))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-11 01:35:38 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-11 01:35:38 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-12-11 01:36:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-11 01:36:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 01:36:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-12-11 01:36:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 01:37:28 --- ERROR: Kohana_Exception [ 0 ]: The images property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-12-11 01:37:28 --- STRACE: Kohana_Exception [ 0 ]: The images property does not exist in the Model_Example class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('images', Object(Model_Image))
#1 /var/www/cms/application/classes/model/crud.php(327): Kohana_ORM->__set('images', Object(Model_Image))
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '25')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-11 01:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323563901.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 01:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323563901.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 01:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323563901.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 01:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323563901.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 01:38:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323563901.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 01:38:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323563901.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568257.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568546.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568546.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568546.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568546.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568546.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568546.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_1323568560.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image_1323568560.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 02:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568697.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 02:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323568697.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 03:04:21 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 117 ]
2011-12-11 03:04:21 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 117 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(117): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 117, Array)
#1 /var/www/cms/application/classes/crud/item/execute/image.php(101): CRUD_Item_Execute_File->upload(Array, 'image_132356904...')
#2 /var/www/cms/application/classes/crud/item/execute/file.php(98): CRUD_Item_Execute_Image->upload(Array, 'image_132356904...')
#3 /var/www/cms/application/classes/model/crud.php(278): CRUD_Item_Execute_File->after_create('image_132356904...', Object(Model_Image), Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-11 03:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323569174.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 03:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323569174.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 03:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application/classes/model/crud.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 03:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/application/classes/model/crud.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 03:10:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-11 03:10:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-12-11 03:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323569174.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-11 03:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1323569174.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-11 10:30:13 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:30:13 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(61): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 10:30:25 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:30:25 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(61): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 10:30:27 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:30:27 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(61): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 10:31:29 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:31:29 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(61): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 10:31:40 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:31:40 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(61): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 10:41:51 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:41:51 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 10:44:27 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:44:27 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 10:44:58 --- ERROR: ErrorException [ 8 ]: Undefined index: name2 ~ APPPATH/classes/crud/observer/generator.php [ 154 ]
2011-12-11 10:44:58 --- STRACE: ErrorException [ 8 ]: Undefined index: name2 ~ APPPATH/classes/crud/observer/generator.php [ 154 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(154): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 154, Array)
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
2011-12-11 10:45:55 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 10:45:55 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 12:11:21 --- ERROR: ErrorException [ 8 ]: Undefined index: name3 ~ APPPATH/classes/crud/observer/generator.php [ 154 ]
2011-12-11 12:11:21 --- STRACE: ErrorException [ 8 ]: Undefined index: name3 ~ APPPATH/classes/crud/observer/generator.php [ 154 ]
--
#0 /var/www/cms/application/classes/crud/observer/generator.php(154): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 154, Array)
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
2011-12-11 12:11:21 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 12:11:21 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 12:11:28 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 12:11:28 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 12:11:47 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-11 12:11:47 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/application/classes/model/crud.php(63): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 22:29:13 --- ERROR: ErrorException [ 2048 ]: Declaration of CRUD_Item_ManyToMany::observe_param() should be compatible with that of CRUD_Item::observe_param() ~ APPPATH/classes/crud/item/manytomany.php [ 94 ]
2011-12-11 22:29:13 --- STRACE: ErrorException [ 2048 ]: Declaration of CRUD_Item_ManyToMany::observe_param() should be compatible with that of CRUD_Item::observe_param() ~ APPPATH/classes/crud/item/manytomany.php [ 94 ]
--
#0 /var/www/cms/system/classes/kohana/core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/cms/ap...', 94, Array)
#1 /var/www/cms/system/classes/kohana/core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('CRUD_Item_ManyT...')
#3 /var/www/cms/application/classes/model/page.php(23): spl_autoload_call('CRUD_Item_ManyT...')
#4 /var/www/cms/application/classes/model/crud.php(56): Model_Page->items()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#6 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Admin_CRUD->before()
#9 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-11 22:51:07 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 50 ]
2011-12-11 22:51:07 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 22:51:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 50 ]
2011-12-11 22:51:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 22:51:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 50 ]
2011-12-11 22:51:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 22:51:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
2011-12-11 22:51:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 22:51:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
2011-12-11 22:51:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 22:51:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
2011-12-11 22:51:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-11 22:51:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
2011-12-11 22:51:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type CRUD_Item_ManyToMany as array ~ APPPATH/classes/crud/item/manytomany.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}