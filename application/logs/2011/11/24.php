<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-24 14:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL javascript: if(confirm("Remove row was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
2011-11-24 14:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL javascript: if(confirm("Remove row was not found on this server. ~ APPPATH/classes/request/client/internal.php [ 87 ]
--
#0 /var/www/cms/system/classes/kohana/request/client.php(64): Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/cms/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/cms/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-24 14:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/examples/admin/examples/delete/17 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-24 14:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/examples/admin/examples/delete/17 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/cms/index.php(109): Kohana_Request->execute()
#1 {main}