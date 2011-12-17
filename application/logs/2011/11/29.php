<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-29 19:52:43 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-11-29 19:52:43 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-11-29 20:03:44 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-11-29 20:03:44 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-11-29 20:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/sort was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
2011-11-29 20:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/sort was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-29 20:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/sort was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
2011-11-29 20:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/sort was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-29 20:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/sort was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
2011-11-29 20:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/sort was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 121 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-29 20:42:49 --- ERROR: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
2011-11-29 20:42:49 --- STRACE: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(225): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 225, Array)
#1 [internal function]: Controller_Admin_CRUD->POST_sort()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-29 20:43:29 --- ERROR: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
2011-11-29 20:43:29 --- STRACE: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(225): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 225, Array)
#1 [internal function]: Controller_Admin_CRUD->POST_sort()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-29 20:45:22 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-11-29 20:45:22 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2011-11-29 20:45:37 --- ERROR: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
2011-11-29 20:45:37 --- STRACE: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(225): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 225, Array)
#1 [internal function]: Controller_Admin_CRUD->POST_sort()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-29 20:46:31 --- ERROR: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
2011-11-29 20:46:31 --- STRACE: ErrorException [ 8 ]: Undefined index: row ~ APPPATH/classes/controller/admin/crud.php [ 225 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(225): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 225, Array)
#1 [internal function]: Controller_Admin_CRUD->POST_sort()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Examples))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-29 20:57:25 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 20:57:25 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 20:58:57 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-11-29 20:58:57 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(107): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('Calineczka.JPG')
#5 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-29 21:00:39 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 21:00:39 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 21:04:32 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 21:04:32 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 21:07:20 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 41 ]
2011-11-29 21:07:20 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 41 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/var/www/cms/ap...', 41, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(41): mkdir('media/data/imag...', 511)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('alsa-hda-dkms-a...', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:08:19 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
2011-11-29 21:08:19 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/var/www/cms/ap...', 40, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(40): mkdir('media/data/imag...', 511)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('alsa-hda-dkms-a...', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:09:53 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
2011-11-29 21:09:53 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/var/www/cms/ap...', 40, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(40): mkdir('media/data/imag...', 511)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('alsa-hda-dkms-a...', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:11:37 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
2011-11-29 21:11:37 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/var/www/cms/ap...', 40, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(40): mkdir('media/data/imag...', 511)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('alsa-hda-dkms-a...', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:11:59 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
2011-11-29 21:11:59 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: Brak dostępu ~ APPPATH/classes/crud/item/execute/file.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/var/www/cms/ap...', 40, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(40): mkdir('media/data/imag...', 511)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('alsa-hda-dkms-a...', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-29 21:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-29 21:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-29 21:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-29 21:13:20 --- ERROR: ErrorException [ 8 ]: Undefined property: CRUD_Item_Execute_File::$field ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
2011-11-29 21:13:20 --- STRACE: ErrorException [ 8 ]: Undefined property: CRUD_Item_Execute_File::$field ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/cms/ap...', 72, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(43): CRUD_Item_Execute_File->upload(Array)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('alsa-hda-dkms-a...', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:13:59 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
2011-11-29 21:13:59 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 72, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(43): CRUD_Item_Execute_File->upload(Array)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('alsa-hda-dkms-a...', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:14:24 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
2011-11-29 21:14:24 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 72, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(43): CRUD_Item_Execute_File->upload(Array)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('Calineczka.JPG', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:17:05 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-11-29 21:17:05 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(106): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('Calineczka.JPG')
#5 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-29 21:17:40 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
2011-11-29 21:17:40 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/crud/item/execute/file.php [ 72 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(72): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 72, Array)
#1 /var/www/cms/application/classes/crud/item/execute/file.php(43): CRUD_Item_Execute_File->upload(Array)
#2 /var/www/cms/application/classes/model/crud.php(298): CRUD_Item_Execute_File->after_update('Calineczka.JPG', '2')
#3 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:18:09 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 21:18:09 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(181): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 21:20:50 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 21:20:50 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(183): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 21:21:20 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 21:21:20 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(184): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 21:21:41 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 21:21:41 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(184): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 21:24:04 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/controller/admin/crud.php [ 183 ]
2011-11-29 21:24:04 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/controller/admin/crud.php [ 183 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(183): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 183, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-29 21:24:15 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
2011-11-29 21:24:15 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/classes/model/crud.php [ 284 ]
--
#0 /var/www/cms/application/classes/model/crud.php(284): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/cms/ap...', 284, Array)
#1 /var/www/cms/application/classes/controller/admin/crud.php(186): Model_CRUD->save_update(Array, '2')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-29 21:25:40 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `images` SET `example_id` = '1', `image` = ('Calineczka (1).JPG', '', '', 1, 0), `date` = 1322598340 WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-11-29 21:25:40 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `images` SET `example_id` = '1', `image` = ('Calineczka (1).JPG', '', '', 1, 0), `date` = 1322598340 WHERE `id` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `images`...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1287): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/application/classes/model/crud.php(293): Kohana_ORM->update()
#3 /var/www/cms/application/classes/controller/admin/crud.php(185): Model_CRUD->save_update(Array, '2')
#4 [internal function]: Controller_Admin_CRUD->action_edit()
#5 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#6 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/cms/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-29 21:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-29 21:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/data/images/4ed5411c7e886Calineczka.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-29 21:32:02 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('test', '2', 'fsdfocbsdkvbxdkvds j', ('kuba1.doc', 'application/msword', '/tmp/phplmoBW2', 0, 22528), 1322598722) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-11-29 21:32:02 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `images` (`title`, `example_id`, `description`, `image`, `date`) VALUES ('test', '2', 'fsdfocbsdkvbxdkvds j', ('kuba1.doc', 'application/msword', '/tmp/phplmoBW2', 0, 22528), 1322598722) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 /var/www/cms/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/cms/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /var/www/cms/application/classes/model/crud.php(246): Kohana_ORM->save()
#4 /var/www/cms/application/classes/controller/admin/crud.php(132): Model_CRUD->save_create(Array)
#5 [internal function]: Controller_Admin_CRUD->action_add()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}