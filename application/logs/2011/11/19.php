<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-19 18:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-19 18:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-19 18:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-19 18:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cms was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-19 18:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-19 18:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:37:07 --- ERROR: Database_Exception [ 1017 ]: Can't find file: './morcms/users.frm' (errno: 13) [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-11-19 18:37:07 --- STRACE: Database_Exception [ 1017 ]: Can't find file: './morcms/users.frm' (errno: 13) [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/cms/modules/orm/classes/kohana/auth/orm.php(75): Kohana_ORM::factory('user')
#7 /var/www/cms/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('root', 'wanna1', false)
#8 /var/www/cms/application/classes/controller/system/auth.php(44): Kohana_Auth->login('root', 'wanna1')
#9 [internal function]: Controller_System_Auth->action_signin()
#10 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#11 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/cms/index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-19 18:42:09 --- ERROR: Database_Exception [ 1146 ]: Table 'morcms.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-11-19 18:42:09 --- STRACE: Database_Exception [ 1146 ]: Table 'morcms.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/cms/modules/orm/classes/kohana/auth/orm.php(75): Kohana_ORM::factory('user')
#7 /var/www/cms/modules/auth/classes/kohana/auth.php(90): Kohana_Auth_ORM->_login('root', 'wanna1', false)
#8 /var/www/cms/application/classes/controller/system/auth.php(44): Kohana_Auth->login('root', 'wanna1')
#9 [internal function]: Controller_System_Auth->action_signin()
#10 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#11 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/cms/index.php(109): Kohana_Request->execute()
#14 {main}
2011-11-19 18:55:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-19 18:55:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:56:39 --- ERROR: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_admin_crud ~ APPPATH/classes/request/client/internal.php [ 96 ]
2011-11-19 18:56:39 --- STRACE: Kohana_Exception [ 0 ]: Cannot create instances of abstract controller_admin_crud ~ APPPATH/classes/request/client/internal.php [ 96 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:56:46 --- ERROR: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/model/crud.php [ 72 ]
2011-11-19 18:56:46 --- STRACE: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/model/crud.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/jquery.jgrowl.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/reset.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/css3buttons.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/tpl-std.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/css/aristo/jquery-ui-1.8.7.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-1.5.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery-ui-1.8.13.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/core.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-19 18:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/wunder/js/jquery.jgrowl_minimized.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-19 18:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-19 18:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-19 18:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/menu was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 18:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL examples/show was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-19 18:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL examples/show was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 19:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL examples/edit/19 was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-19 19:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL examples/edit/19 was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-19 19:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminexamples/show was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-19 19:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminexamples/show was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}