<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-05 19:37:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-05 19:37:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.example_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `tests` AS `test` WHERE `test`.`example_id` = '25' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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