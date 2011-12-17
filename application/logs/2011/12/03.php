<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-03 12:38:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: filters ~ APPPATH/classes/crud/tools.php [ 37 ]
2011-12-03 12:38:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: filters ~ APPPATH/classes/crud/tools.php [ 37 ]
--
#0 /var/www/cms/application/classes/crud/tools.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 37, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(75): CRUD_Tools::get_param('id')
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 12:38:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: filters ~ APPPATH/classes/crud/tools.php [ 37 ]
2011-12-03 12:38:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: filters ~ APPPATH/classes/crud/tools.php [ 37 ]
--
#0 /var/www/cms/application/classes/crud/tools.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 37, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(75): CRUD_Tools::get_param('id')
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 12:39:19 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
2011-12-03 12:39:19 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 12:39:20 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
2011-12-03 12:39:20 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 12:39:21 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
2011-12-03 12:39:21 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 12:39:21 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
2011-12-03 12:39:21 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/tools.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 12:40:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: value_param ~ APPPATH/classes/controller/admin/crud.php [ 79 ]
2011-12-03 12:40:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: value_param ~ APPPATH/classes/controller/admin/crud.php [ 79 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 79, Array)
#1 [internal function]: Controller_Admin_CRUD->GET_show()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:40:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: value_param ~ APPPATH/classes/controller/admin/crud.php [ 79 ]
2011-12-03 12:40:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: value_param ~ APPPATH/classes/controller/admin/crud.php [ 79 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 79, Array)
#1 [internal function]: Controller_Admin_CRUD->GET_show()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:41:02 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/crud.php [ 134 ]
2011-12-03 12:41:02 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/crud.php [ 134 ]
--
#0 /var/www/cms/application/classes/model/crud.php(134): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/cms/ap...', 134, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 12:41:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/crud.php [ 134 ]
2011-12-03 12:41:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/crud.php [ 134 ]
--
#0 /var/www/cms/application/classes/model/crud.php(134): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/cms/ap...', 134, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 12:41:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/crud.php [ 134 ]
2011-12-03 12:41:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/model/crud.php [ 134 ]
--
#0 /var/www/cms/application/classes/model/crud.php(134): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/cms/ap...', 134, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(82): Model_CRUD->get_array()
#2 [internal function]: Controller_Admin_CRUD->GET_show()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 12:43:13 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/crud/tools.php [ 40 ]
2011-12-03 12:43:13 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/crud/tools.php [ 40 ]
--
#0 /var/www/cms/application/classes/crud/tools.php(40): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/cms/ap...', 40, Array)
#1 /var/www/cms/application/classes/crud/tools.php(22): CRUD_Tools::get_param()
#2 /var/www/cms/application/classes/controller/admin/crud.php(167): CRUD_Tools::all_param()
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-03 12:44:21 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 12:44:21 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:44:48 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 12:44:48 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:47:27 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/crud.php [ 284 ]
2011-12-03 12:47:27 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 12:47:27 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 76565304 bytes) ~ SYSPATH/classes/kohana/debug.php [ 204 ]
2011-12-03 12:47:27 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 76565304 bytes) ~ SYSPATH/classes/kohana/debug.php [ 204 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 12:50:30 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 12:50:30 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:56:24 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 12:56:24 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:56:28 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 12:56:28 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:58:08 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 12:58:08 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:58:27 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 12:58:27 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 12:59:33 --- ERROR: ErrorException [ 8 ]: Undefined index: error ~ SYSPATH/classes/kohana/upload.php [ 171 ]
2011-12-03 12:59:33 --- STRACE: ErrorException [ 8 ]: Undefined index: error ~ SYSPATH/classes/kohana/upload.php [ 171 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(171): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/sy...', 171, Array)
#1 [internal function]: Kohana_Upload::size(Array, 100)
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(130): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#5 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-03 13:00:07 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH/classes/crud/item/execute/file.php [ 112 ]
2011-12-03 13:00:07 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH/classes/crud/item/execute/file.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/var/www/cms/ap...', 112, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(112): array_merge('media/data/imag...', Array)
#2 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 13:00:25 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 13:00:25 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:04:50 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 13:04:50 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:05:05 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 13:05:05 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:05:29 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ SYSPATH/classes/kohana/validation/exception.php [ 22 ]
2011-12-03 13:05:29 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ SYSPATH/classes/kohana/validation/exception.php [ 22 ]
--
#0 /var/www/cms/system/classes/kohana/validation/exception.php(22): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 22, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(138): Kohana_Validation_Exception->__construct(Array)
#2 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 13:05:44 --- ERROR: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ SYSPATH/classes/kohana/kohana/exception.php [ 60 ]
2011-12-03 13:05:44 --- STRACE: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ SYSPATH/classes/kohana/kohana/exception.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 13:05:55 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ SYSPATH/classes/kohana/validation/exception.php [ 22 ]
2011-12-03 13:05:55 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ SYSPATH/classes/kohana/validation/exception.php [ 22 ]
--
#0 /var/www/cms/system/classes/kohana/validation/exception.php(22): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 22, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(138): Kohana_Validation_Exception->__construct(Array)
#2 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 13:06:10 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ SYSPATH/classes/kohana/validation/exception.php [ 22 ]
2011-12-03 13:06:10 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ SYSPATH/classes/kohana/validation/exception.php [ 22 ]
--
#0 /var/www/cms/system/classes/kohana/validation/exception.php(22): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 22, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(138): Kohana_Validation_Exception->__construct(Array)
#2 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 13:06:21 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 13:06:21 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:06:49 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 13:06:49 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:07:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Images::$validation ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 13:07:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin_Images::$validation ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:07:28 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:07:28 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:07:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:07:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:08:05 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:08:05 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:08:13 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:08:13 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:08:32 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:08:32 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:08:56 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:08:56 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:12:40 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:12:40 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:13:32 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
2011-12-03 13:13:32 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 13:13:53 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ MODPATH/orm/classes/kohana/orm/validation/exception.php [ 34 ]
2011-12-03 13:13:53 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, array given, called in /var/www/cms/application/classes/crud/item/execute/file.php on line 138 and defined ~ MODPATH/orm/classes/kohana/orm/validation/exception.php [ 34 ]
--
#0 /var/www/cms/modules/orm/classes/kohana/orm/validation/exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/cms/mo...', 34, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(138): Kohana_ORM_Validation_Exception->__construct('image', Array)
#2 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 13:14:15 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
2011-12-03 13:14:15 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 13:14:24 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
2011-12-03 13:14:24 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 13:40:08 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Validation::error(), called in /var/www/cms/application/classes/crud/item/execute/file.php on line 139 and defined ~ SYSPATH/classes/kohana/validation.php [ 434 ]
2011-12-03 13:40:08 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Validation::error(), called in /var/www/cms/application/classes/crud/item/execute/file.php on line 139 and defined ~ SYSPATH/classes/kohana/validation.php [ 434 ]
--
#0 /var/www/cms/system/classes/kohana/validation.php(434): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/cms/sy...', 434, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(139): Kohana_Validation->error('image')
#2 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 13:40:21 --- ERROR: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ APPPATH/classes/crud/item/execute/file.php [ 139 ]
2011-12-03 13:40:21 --- STRACE: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ APPPATH/classes/crud/item/execute/file.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 13:41:21 --- ERROR: Exception [ 0 ]: image.image.Upload::size ~ APPPATH/classes/crud/item/execute/file.php [ 140 ]
2011-12-03 13:41:21 --- STRACE: Exception [ 0 ]: image.image.Upload::size ~ APPPATH/classes/crud/item/execute/file.php [ 140 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 13:41:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
2011-12-03 13:41:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ APPPATH/classes/crud/item/execute/file.php [ 138 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate(Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(167): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 13:43:24 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
2011-12-03 13:43:24 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 186 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(186): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 186, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:44:05 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
2011-12-03 13:44:05 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 187 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(187): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 187, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-03 13:44:55 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
2011-12-03 13:44:55 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
--
#0 /var/www/cms/application/classes/model/crud.php(198): Kohana_ORM->find()
#1 /var/www/cms/application/classes/controller/admin/crud.php(200): Model_CRUD->get_for_edit('3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 14:12:35 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-12-03 14:12:35 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('media/data/imag...')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(130): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('media/data/imag...')
#5 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-03 14:13:06 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-12-03 14:13:06 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('media/data/imag...')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(130): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('media/data/imag...')
#5 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-03 14:16:40 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 115 ]
2011-12-03 14:16:40 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 115 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(115): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 115, Array)
#1 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('')
#2 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-03 14:17:48 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-12-03 14:17:48 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('media/data/imag...')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(137): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('media/data/imag...')
#5 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-03 14:27:09 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-12-03 14:27:09 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 14:27:44 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-12-03 14:27:44 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 14:28:32 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-12-03 14:28:32 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 14:47:38 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-12-03 14:47:38 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 14:49:59 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-12-03 14:49:59 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 14:50:01 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-12-03 14:50:01 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '3')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-03 14:57:36 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-03 14:57:36 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-12-03 15:05:21 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-03 15:05:21 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-12-03 15:05:50 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/crud/item/execute/file.php [ 55 ]
2011-12-03 15:05:50 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/crud/item/execute/file.php [ 55 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(55): Kohana_Core::error_handler(8, 'Uninitialized s...', '/var/www/cms/ap...', 55, Array)
#1 /var/www/cms/application/classes/model/crud.php(233): CRUD_Item_Execute_File->on_create('')
#2 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#3 [internal function]: Controller_Admin_CRUD->action_add()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-03 15:15:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-03 15:15:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-12-03 15:16:14 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-12-03 15:16:14 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(64): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(233): CRUD_Item_Execute_File->on_create('')
#5 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#6 [internal function]: Controller_Admin_CRUD->action_add()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-03 15:16:56 --- ERROR: Database_Exception [ 1048 ]: Column 'example_id' cannot be null [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('vfrsmddv', NULL, '', '', 1322921816) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-03 15:16:56 --- STRACE: Database_Exception [ 1048 ]: Column 'example_id' cannot be null [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('vfrsmddv', NULL, '', '', 1322921816) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/cms/application/classes/model/crud.php(246): Kohana_ORM->save()
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 15:17:10 --- ERROR: Database_Exception [ 1048 ]: Column 'example_id' cannot be null [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('vmcdk', NULL, '', '', 1322921830) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-03 15:17:10 --- STRACE: Database_Exception [ 1048 ]: Column 'example_id' cannot be null [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('vmcdk', NULL, '', '', 1322921830) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/cms/application/classes/model/crud.php(246): Kohana_ORM->save()
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 15:17:51 --- ERROR: Database_Exception [ 1048 ]: Column 'example_id' cannot be null [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('vmcdk', NULL, '', '', 1322921871) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-12-03 15:17:51 --- STRACE: Database_Exception [ 1048 ]: Column 'example_id' cannot be null [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('vmcdk', NULL, '', '', 1322921871) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/cms/application/classes/model/crud.php(246): Kohana_ORM->save()
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 15:39:05 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/item/image.php [ 17 ]
2011-12-03 15:39:05 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/crud/item/image.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-03 15:39:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/crud/item/image.php [ 18 ]
2011-12-03 15:39:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/crud/item/image.php [ 18 ]
--
#0 /var/www/cms/application/classes/crud/item/image.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 18, Array)
#1 /var/www/cms/application/classes/model/image.php(21): CRUD_Item_Image::e('image')
#2 /var/www/cms/application/classes/model/crud.php(56): Model_Image->items()
#3 /var/www/cms/modules/orm/classes/kohana/orm.php(246): Model_CRUD->_initialize()
#4 /var/www/cms/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#5 /var/www/cms/application/classes/controller/admin/crud.php(54): Kohana_ORM::factory('image')
#6 [internal function]: Controller_Admin_CRUD->before()
#7 /var/www/cms/application/classes/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-03 15:40:02 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 15:40:02 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(96): CRUD_Item_Execute_Image->upload(Array, Object(Model_Image))
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:14:53 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 22:14:53 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(96): CRUD_Item_Execute_Image->upload(Array, Object(Model_Image))
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:20:04 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 22:20:04 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(86): CRUD_Item_Execute_Image->upload(Array, 'image_11')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:20:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 22:20:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(86): CRUD_Item_Execute_Image->upload(Array, 'image_12')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:21:03 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 22:21:03 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(86): CRUD_Item_Execute_Image->upload(Array, 'image_13')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:21:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 22:21:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(86): CRUD_Item_Execute_Image->upload(Array, 'image_14')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:21:58 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 22:21:58 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(86): CRUD_Item_Execute_Image->upload(Array, 'image_15')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:22:12 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2011-12-03 22:22:12 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(113): Kohana_Upload::save(Array, 'image_16.JPG')
#1 /var/www/cms/application/classes/crud/item/execute/image.php(27): CRUD_Item_Execute_File->upload(Array, 'image_16')
#2 /var/www/cms/application/classes/crud/item/execute/file.php(86): CRUD_Item_Execute_Image->upload(Array, 'image_16')
#3 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 22:26:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 22:26:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('media/data/imag...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(86): CRUD_Item_Execute_Image->upload(Array, 'image_17')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('Calineczka.JPG', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 22:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 22:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 22:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 22:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 22:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 22:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 22:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 22:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 22:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 22:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 22:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 22:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:18:27 --- ERROR: ErrorException [ 2 ]: unlink(Calineczka.JPG) [function.unlink]: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/crud/item/execute/file.php [ 39 ]
2011-12-03 23:18:27 --- STRACE: ErrorException [ 2 ]: unlink(Calineczka.JPG) [function.unlink]: Nie ma takiego pliku ani katalogu ~ APPPATH/classes/crud/item/execute/file.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(Calinecz...', '/var/www/cms/ap...', 39, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(39): unlink('Calineczka.JPG')
#2 /var/www/cms/application/classes/model/crud.php(285): CRUD_Item_Execute_File->on_update(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 23:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:19:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/crud/item/execute/file.php [ 191 ]
2011-12-03 23:19:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/crud/item/execute/file.php [ 191 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(191): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 191, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(65): CRUD_Item_Execute_File->rename_file()
#2 /var/www/cms/application/classes/model/crud.php(233): CRUD_Item_Execute_File->on_create(Array)
#3 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#4 [internal function]: Controller_Admin_CRUD->action_add()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-03 23:23:11 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2011-12-03 23:23:11 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/image.php(55): Kohana_Image->save('media/data/imag...')
#1 /var/www/cms/application/classes/crud/item/execute/image.php(36): CRUD_Item_Execute_Image->thumb('media/data/imag...', 20, 20, 'thumb_')
#2 /var/www/cms/application/classes/crud/item/execute/file.php(87): CRUD_Item_Execute_Image->upload(Array, 'Calineczka.JPG')
#3 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('Calineczka.JPG', '19')
#4 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '19')
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 23:26:15 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2011-12-03 23:26:15 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/image.php(55): Kohana_Image->save('media/data/imag...')
#1 /var/www/cms/application/classes/crud/item/execute/image.php(36): CRUD_Item_Execute_Image->thumb('media/data/imag...', 20, 20, 'thumb_')
#2 /var/www/cms/application/classes/crud/item/execute/file.php(105): CRUD_Item_Execute_Image->upload(Array, 'image_132295117...')
#3 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('image_132295117...', Object(Model_Image))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 23:27:50 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2011-12-03 23:27:50 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/image.php(55): Kohana_Image->save('media/data/imag...')
#1 /var/www/cms/application/classes/crud/item/execute/image.php(36): CRUD_Item_Execute_Image->thumb('media/data/imag...', 20, 20, 'thumb_')
#2 /var/www/cms/application/classes/crud/item/execute/file.php(105): CRUD_Item_Execute_Image->upload(Array, 'image_132295127...')
#3 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('image_132295127...', Object(Model_Image))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 23:28:54 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2011-12-03 23:28:54 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/image.php(55): Kohana_Image->save('media/data/imag...')
#1 /var/www/cms/application/classes/crud/item/execute/image.php(36): CRUD_Item_Execute_Image->thumb('media/data/imag...', 20, 20, 'thumb_')
#2 /var/www/cms/application/classes/crud/item/execute/file.php(105): CRUD_Item_Execute_Image->upload(Array, 'image_132295133...')
#3 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('image_132295133...', Object(Model_Image))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 23:30:03 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 23:30:03 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('images/image_13...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('images/image_13...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('images/image_13...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('images/image_13...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(105): CRUD_Item_Execute_Image->upload(Array, 'image_132295140...')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('image_132295140...', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 23:30:55 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2011-12-03 23:30:55 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/image.php(55): Kohana_Image->save('media/data/imag...')
#1 /var/www/cms/application/classes/crud/item/execute/image.php(36): CRUD_Item_Execute_Image->thumb('images/image_13...', 20, 20, 'thumb_')
#2 /var/www/cms/application/classes/crud/item/execute/file.php(105): CRUD_Item_Execute_Image->upload(Array, 'image_132295145...')
#3 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('image_132295145...', Object(Model_Image))
#4 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-12-03 23:31:20 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 23:31:20 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data//ima...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data//ima...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data//ima...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('/image_13229514...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(105): CRUD_Item_Execute_Image->upload(Array, 'image_132295147...')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('image_132295147...', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 23:31:33 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 23:31:33 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(45): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(31): CRUD_Item_Execute_Image->resize('image_132295149...', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(105): CRUD_Item_Execute_Image->upload(Array, 'image_132295149...')
#5 /var/www/cms/application/classes/model/crud.php(251): CRUD_Item_Execute_File->after_create('image_132295149...', Object(Model_Image))
#6 /var/www/cms/application/classes/controller/admin/crud.php(119): Model_CRUD->save_create(Array)
#7 [internal function]: Controller_Admin_CRUD->action_add()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 23:32:41 --- WARNING: file delete error in update values
2011-12-03 23:33:36 --- WARNING: file delete error in update values
2011-12-03 23:34:20 --- WARNING: file delete error in update values
2011-12-03 23:37:41 --- WARNING: file delete error in update values
2011-12-03 23:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322951861.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322951861.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322951861.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322951861.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:39:20 --- WARNING: file delete error in update values
2011-12-03 23:39:20 --- WARNING: file delete error in update values
2011-12-03 23:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322951960.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322951960.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952035.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952035.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:44:38 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/media/data/images ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 23:44:38 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/media/data/images ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(67): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(47): CRUD_Item_Execute_Image->resize('', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(95): CRUD_Item_Execute_Image->upload(Array, 'image_132295205...')
#5 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('image_132295205...', '28')
#6 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '28')
#7 [internal function]: Controller_Admin_CRUD->action_edit()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 23:45:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/media/data/images ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 23:45:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/media/data/images ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(67): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(47): CRUD_Item_Execute_Image->resize('', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(95): CRUD_Item_Execute_Image->upload(Array, 'image_132295205...')
#5 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('image_132295205...', '28')
#6 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '28')
#7 [internal function]: Controller_Admin_CRUD->action_edit()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 23:47:19 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-12-03 23:47:19 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-12-03 23:47:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/media/data/images ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2011-12-03 23:47:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/media/data/images ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/cms/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('media/data/imag...')
#1 /var/www/cms/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('media/data/imag...')
#2 /var/www/cms/application/classes/crud/item/execute/image.php(69): Kohana_Image::factory('media/data/imag...')
#3 /var/www/cms/application/classes/crud/item/execute/image.php(49): CRUD_Item_Execute_Image->resize('', 30, 30)
#4 /var/www/cms/application/classes/crud/item/execute/file.php(95): CRUD_Item_Execute_Image->upload(Array, 'image_132295205...')
#5 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('image_132295205...', '28')
#6 /var/www/cms/application/classes/controller/admin/crud.php(174): Model_CRUD->save_update(Array, '28')
#7 [internal function]: Controller_Admin_CRUD->action_edit()
#8 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#9 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/cms/index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-03 23:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952736.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952736.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952736.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952736.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952736.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952736.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:53:26 --- WARNING: file delete error in update values
2011-12-03 23:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952806.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952806.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-03 23:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952806.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-12-03 23:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/image_1322952806.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}