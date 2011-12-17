<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-30 17:44:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
2011-11-30 17:44:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/belongsto.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/cms/ap...', 61, Array)
#1 /var/www/cms/application/views/crud/default/edit.php(38): CRUD_Item_Execute_BelongsTo->input_edit('2')
#2 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#3 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(206): Kohana_View->render()
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-30 17:44:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
2011-11-30 17:44:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/belongsto.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/cms/ap...', 61, Array)
#1 /var/www/cms/application/views/crud/default/edit.php(38): CRUD_Item_Execute_BelongsTo->input_edit('2')
#2 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#3 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(206): Kohana_View->render()
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-30 17:45:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
2011-11-30 17:45:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/belongsto.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/cms/ap...', 61, Array)
#1 /var/www/cms/application/views/crud/default/edit.php(38): CRUD_Item_Execute_BelongsTo->input_edit('2')
#2 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#3 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(206): Kohana_View->render()
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-30 17:45:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
2011-11-30 17:45:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/belongsto.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/cms/ap...', 61, Array)
#1 /var/www/cms/application/views/crud/default/edit.php(38): CRUD_Item_Execute_BelongsTo->input_edit('2')
#2 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#3 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(206): Kohana_View->render()
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-30 18:03:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
2011-11-30 18:03:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/belongsto.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/cms/ap...', 61, Array)
#1 /var/www/cms/application/views/crud/default/edit.php(38): CRUD_Item_Execute_BelongsTo->input_edit('2')
#2 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#3 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(191): Kohana_View->render()
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-30 18:04:06 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/crud/item/execute/file.php [ 38 ]
2011-11-30 18:04:06 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/crud/item/execute/file.php [ 38 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(38): Kohana_Core::error_handler(8, 'Uninitialized s...', '/var/www/cms/ap...', 38, Array)
#1 /var/www/cms/application/classes/model/crud.php(285): CRUD_Item_Execute_File->on_update('')
#2 /var/www/cms/application/classes/controller/admin/crud.php(169): Model_CRUD->save_update(Array, '5')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-30 18:04:32 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/crud/item/execute/file.php [ 38 ]
2011-11-30 18:04:32 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/crud/item/execute/file.php [ 38 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(38): Kohana_Core::error_handler(8, 'Uninitialized s...', '/var/www/cms/ap...', 38, Array)
#1 /var/www/cms/application/classes/model/crud.php(285): CRUD_Item_Execute_File->on_update('')
#2 /var/www/cms/application/classes/controller/admin/crud.php(169): Model_CRUD->save_update(Array, '5')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-30 18:05:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
2011-11-30 18:05:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 61 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/belongsto.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/cms/ap...', 61, Array)
#1 /var/www/cms/application/views/crud/default/edit.php(38): CRUD_Item_Execute_BelongsTo->input_edit('2')
#2 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#3 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#4 /var/www/cms/application/classes/controller/admin/crud.php(191): Kohana_View->render()
#5 [internal function]: Controller_Admin_CRUD->action_edit()
#6 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#7 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/cms/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-30 18:07:47 --- ERROR: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 71 ]
2011-11-30 18:07:47 --- STRACE: ErrorException [ 1 ]: Call to a member function clear() on a non-object ~ APPPATH/classes/crud/item/execute/belongsto.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-30 18:08:28 --- ERROR: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-11-30 18:08:28 --- STRACE: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/cms/modules/database/classes/kohana/database/result.php(136): Kohana_ORM->__get('email')
#1 /var/www/cms/application/classes/crud/item/execute/belongsto.php(72): Kohana_Database_Result->as_array('email')
#2 /var/www/cms/application/views/crud/default/edit.php(38): CRUD_Item_Execute_BelongsTo->input_edit('2')
#3 /var/www/cms/system/classes/kohana/view.php(61): include('/var/www/cms/ap...')
#4 /var/www/cms/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/cms/ap...', Array)
#5 /var/www/cms/application/classes/controller/admin/crud.php(191): Kohana_View->render()
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-30 18:11:50 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
2011-11-30 18:11:50 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 885 ]
--
#0 /var/www/cms/application/classes/model/crud.php(198): Kohana_ORM->find()
#1 /var/www/cms/application/classes/controller/admin/crud.php(187): Model_CRUD->get_for_edit('5')
#2 [internal function]: Controller_Admin_CRUD->action_edit()
#3 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#4 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/cms/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-30 20:30:29 --- ERROR: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH/classes/crud/item/execute/file.php [ 135 ]
2011-11-30 20:30:29 --- STRACE: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH/classes/crud/item/execute/file.php [ 135 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-30 20:31:25 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:31:25 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:33:04 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:33:04 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:40:07 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-11-30 20:40:07 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(135): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('')
#5 /var/www/cms/application/classes/controller/admin/crud.php(161): Model_CRUD->save_update(Array, '5')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-30 20:40:39 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-11-30 20:40:39 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(132): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('')
#5 /var/www/cms/application/classes/controller/admin/crud.php(161): Model_CRUD->save_update(Array, '5')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-30 20:41:29 --- ERROR: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/utf8.php [ 171 ]
2011-11-30 20:41:29 --- STRACE: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/utf8.php [ 171 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mb_strlen() exp...', '/var/www/cms/sy...', 171, Array)
#1 /var/www/cms/system/classes/kohana/utf8.php(171): mb_strlen(Array, 'utf-8')
#2 /var/www/cms/system/classes/kohana/valid.php(51): Kohana_UTF8::strlen(Array)
#3 [internal function]: Kohana_Valid::min_length(Array, 3)
#4 /var/www/cms/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/cms/application/classes/crud/item/execute/text.php(46): Kohana_Validation->check()
#6 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_Text->validate('test')
#7 /var/www/cms/application/classes/controller/admin/crud.php(161): Model_CRUD->save_update(Array, '5')
#8 [internal function]: Controller_Admin_CRUD->action_edit()
#9 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-11-30 20:41:41 --- ERROR: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/utf8.php [ 171 ]
2011-11-30 20:41:41 --- STRACE: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/utf8.php [ 171 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mb_strlen() exp...', '/var/www/cms/sy...', 171, Array)
#1 /var/www/cms/system/classes/kohana/utf8.php(171): mb_strlen(Array, 'utf-8')
#2 /var/www/cms/system/classes/kohana/valid.php(51): Kohana_UTF8::strlen(Array)
#3 [internal function]: Kohana_Valid::min_length(Array, 3)
#4 /var/www/cms/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/cms/application/classes/crud/item/execute/text.php(46): Kohana_Validation->check()
#6 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_Text->validate('test')
#7 /var/www/cms/application/classes/controller/admin/crud.php(161): Model_CRUD->save_update(Array, '5')
#8 [internal function]: Controller_Admin_CRUD->action_edit()
#9 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#10 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/cms/index.php(109): Kohana_Request->execute()
#13 {main}
2011-11-30 20:41:55 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:41:55 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:42:48 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:42:48 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:42:52 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:42:52 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:43:01 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:43:01 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:43:30 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:43:30 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:44:17 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-11-30 20:44:17 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(130): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('')
#5 /var/www/cms/application/classes/controller/admin/crud.php(161): Model_CRUD->save_update(Array, '5')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-30 20:44:31 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2011-11-30 20:44:31 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, string given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /var/www/cms/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/cms/sy...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty('')
#2 /var/www/cms/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/cms/application/classes/crud/item/execute/file.php(131): Kohana_Validation->check()
#4 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('')
#5 /var/www/cms/application/classes/controller/admin/crud.php(161): Model_CRUD->save_update(Array, '5')
#6 [internal function]: Controller_Admin_CRUD->action_edit()
#7 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#8 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/cms/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-30 20:45:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: _FILEs ~ APPPATH/classes/crud/item/execute/file.php [ 112 ]
2011-11-30 20:45:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: _FILEs ~ APPPATH/classes/crud/item/execute/file.php [ 112 ]
--
#0 /var/www/cms/application/classes/crud/item/execute/file.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/cms/ap...', 112, Array)
#1 /var/www/cms/application/classes/model/crud.php(284): CRUD_Item_Execute_File->validate('')
#2 /var/www/cms/application/classes/controller/admin/crud.php(161): Model_CRUD->save_update(Array, '5')
#3 [internal function]: Controller_Admin_CRUD->action_edit()
#4 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#5 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/cms/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-30 20:45:56 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:45:56 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:46:12 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:46:12 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:46:30 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:46:30 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:47:07 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 181 ]
2011-11-30 20:47:07 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 181 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(181): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 181, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:48:03 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 181 ]
2011-11-30 20:48:03 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 181 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(181): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 181, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:52:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method CRUD_Item_File::size() ~ APPPATH/classes/model/image.php [ 21 ]
2011-11-30 20:52:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method CRUD_Item_File::size() ~ APPPATH/classes/model/image.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-30 20:52:26 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:52:26 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:52:45 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:52:45 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:53:10 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:53:10 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:59:22 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:59:22 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 20:59:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 20:59:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-30 21:00:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
2011-11-30 21:00:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/crud.php [ 180 ]
--
#0 /var/www/cms/application/classes/controller/admin/crud.php(180): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/cms/ap...', 180, Array)
#1 [internal function]: Controller_Admin_CRUD->action_edit()
#2 /var/www/cms/application/classes/request/client/internal.php(129): ReflectionMethod->invoke(Object(Controller_Admin_Images))
#3 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/cms/index.php(109): Kohana_Request->execute()
#6 {main}