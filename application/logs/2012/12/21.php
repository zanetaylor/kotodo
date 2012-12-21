<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-21 09:06:47 --- ERROR: ErrorException [ 1 ]: Class 'RESTful_Controller' not found ~ APPPATH/classes/controller/rest.php [ 3 ]
2012-12-21 09:06:47 --- STRACE: ErrorException [ 1 ]: Class 'RESTful_Controller' not found ~ APPPATH/classes/controller/rest.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 09:07:05 --- ERROR: ErrorException [ 500 ]: Undefined property: Controller_Rest::$_response_types ~ MODPATH/restful/classes/restful/controller.php [ 160 ]
2012-12-21 09:07:22 --- ERROR: ErrorException [ 500 ]: Undefined property: Controller_Rest::$_response_types ~ MODPATH/restful/classes/restful/controller.php [ 160 ]
2012-12-21 09:25:23 --- ERROR: ErrorException [ 1 ]: Class 'RESTful_Controller' not found ~ APPPATH/classes/controller/rest.php [ 3 ]
2012-12-21 09:25:23 --- STRACE: ErrorException [ 1 ]: Class 'RESTful_Controller' not found ~ APPPATH/classes/controller/rest.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 09:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:37:01 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2012-12-21 09:37:01 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/zane/Sit...', 402, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/route.php(402): preg_match('#^(?:(?P<direct...', 'api/todos', NULL)
#2 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(582): Kohana_Route->matches('api/todos')
#3 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(800): Kohana_Request::process_uri('api/todos', Array)
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/api/todos', NULL, Array)
#5 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#6 {main}
2012-12-21 09:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 09:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 09:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 09:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rest ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 09:52:43 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/model/rest/test.php [ 30 ]
2012-12-21 09:52:43 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/model/rest/test.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 09:53:46 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:53:46 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:53:48 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:53:48 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:53:50 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:53:50 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:07 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:07 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:08 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:08 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:08 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:08 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:11 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:11 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:47 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:47 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:48 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:48 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 09:54:50 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-12-21 09:54:50 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 10:03:39 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): [2002] No such file or directory (trying to connect via unix:///var/mysql/mysql.sock) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-12-21 10:03:39 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): [2002] No such file or directory (trying to connect via unix:///var/mysql/mysql.sock) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#9 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#10 [internal function]: Controller_Template_REST->before()
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#15 {main}
2012-12-21 10:04:12 --- ERROR: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-12-21 10:04:12 --- STRACE: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#9 [internal function]: Controller_Template_REST->before()
#10 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-12-21 10:04:45 --- ERROR: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-12-21 10:04:45 --- STRACE: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#9 [internal function]: Controller_Template_REST->before()
#10 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-12-21 10:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 10:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 10:07:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Todo' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-12-21 10:07:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Todo' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 10:12:21 --- ERROR: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-12-21 10:12:21 --- STRACE: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(48): Kohana_ORM->__get('find_all')
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_get(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 10:14:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_Rest_todos' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-12-21 10:14:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_Rest_todos' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 10:14:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Rest_todos' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-12-21 10:14:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Rest_todos' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 10:15:11 --- ERROR: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-12-21 10:15:11 --- STRACE: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#9 [internal function]: Controller_Template_REST->before()
#10 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-12-21 10:15:32 --- ERROR: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-12-21 10:15:32 --- STRACE: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#9 [internal function]: Controller_Template_REST->before()
#10 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-12-21 10:15:33 --- ERROR: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-12-21 10:15:33 --- STRACE: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#9 [internal function]: Controller_Template_REST->before()
#10 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-12-21 10:15:33 --- ERROR: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-12-21 10:15:33 --- ERROR: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-12-21 10:15:33 --- STRACE: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#9 [internal function]: Controller_Template_REST->before()
#10 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-12-21 10:15:33 --- STRACE: Database_Exception [ 1146 ]: Table 'apitest.rest_todos' doesn't exist [ SHOW FULL COLUMNS FROM `rest_todos` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/database/classes/kohana/database/mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(1538): Kohana_Database_MySQL->list_columns('rest_todos')
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns()
#3 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/zane/Sites/Zane Taylor/kotodo/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(611): Kohana_ORM->__construct()
#6 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(177): REST_Core->model('todo')
#7 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(75): REST_Core->__construct(Object(Controller_REST), Array)
#8 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(28): REST_Core::instance(Object(Controller_REST))
#9 [internal function]: Controller_Template_REST->before()
#10 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#11 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#14 {main}
2012-12-21 10:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 62 ]
2012-12-21 10:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 62 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_get(Object(Rest))
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#2 [internal function]: Controller_Template_REST->before()
#3 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-21 10:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 61 ]
2012-12-21 10:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 61 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_get(Object(Rest))
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#2 [internal function]: Controller_Template_REST->before()
#3 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-21 10:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 61 ]
2012-12-21 10:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 61 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_get(Object(Rest))
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#2 [internal function]: Controller_Template_REST->before()
#3 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-21 10:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 61 ]
2012-12-21 10:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Resource not found, ID: 1 ~ APPPATH/classes/model/rest/todo.php [ 61 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_get(Object(Rest))
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#2 [internal function]: Controller_Template_REST->before()
#3 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-21 10:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 10:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 10:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todos was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Resource not found, ID: get ~ APPPATH/classes/model/rest/todo.php [ 55 ]
2012-12-21 11:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Resource not found, ID: get ~ APPPATH/classes/model/rest/todo.php [ 55 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_get(Object(Rest))
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#2 [internal function]: Controller_Template_REST->before()
#3 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-21 11:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rest/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rest/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/rest/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/rest/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo/get/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo/get/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/todo/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-21 11:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/get/0 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-21 11:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo/get/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo/get/0 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Resource not found, ID: get ~ APPPATH/classes/model/rest/todo.php [ 55 ]
2012-12-21 11:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Resource not found, ID: get ~ APPPATH/classes/model/rest/todo.php [ 55 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_get(Object(Rest))
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#2 [internal function]: Controller_Template_REST->before()
#3 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-21 11:26:48 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-12-21 11:26:48 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zane/Sit...', 827, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/api/todo', NULL, Array)
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 11:27:02 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-12-21 11:27:02 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zane/Sit...', 827, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/api/todo', NULL, Array)
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 11:27:02 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-12-21 11:27:02 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zane/Sit...', 827, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/api/todo', NULL, Array)
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 11:27:03 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-12-21 11:27:03 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zane/Sit...', 827, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/api/todo', NULL, Array)
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 11:27:03 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-12-21 11:27:03 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zane/Sit...', 827, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/api/todo', NULL, Array)
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 11:27:03 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2012-12-21 11:27:03 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zane/Sit...', 827, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(208): Kohana_Request->__construct('/api/todo', NULL, Array)
#2 /Users/zane/Sites/Zane Taylor/kotodo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-12-21 11:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/main.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/backbone.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/underscore.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/backbone.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/underscore.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/underscore.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/underscore.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/backbone.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/lib/backbone.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:41:56 --- ERROR: Kohana_Exception [ 0 ]: The _data property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-12-21 11:41:56 --- STRACE: Kohana_Exception [ 0 ]: The _data property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(116): Kohana_ORM->__get('_data')
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 11:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:47:07 --- ERROR: Kohana_Exception [ 0 ]: The _data property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-12-21 11:47:07 --- STRACE: Kohana_Exception [ 0 ]: The _data property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(116): Kohana_ORM->__get('_data')
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 11:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:53:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Todo' not found ~ APPPATH/classes/model/rest/todo.php [ 118 ]
2012-12-21 11:53:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Todo' not found ~ APPPATH/classes/model/rest/todo.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 11:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:54:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/model/rest/todo.php [ 122 ]
2012-12-21 11:54:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/model/rest/todo.php [ 122 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(122): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zane/Sit...', 122, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 11:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:57:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/rest/todo.php [ 117 ]
2012-12-21 11:57:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/rest/todo.php [ 117 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zane/Sit...', 117, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 11:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:57:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/rest/todo.php [ 117 ]
2012-12-21 11:57:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/rest/todo.php [ 117 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zane/Sit...', 117, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 11:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:57:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/rest/todo.php [ 117 ]
2012-12-21 11:57:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/model/rest/todo.php [ 117 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(117): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zane/Sit...', 117, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 11:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 11:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 11:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:10:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:10:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:22:06 --- ERROR: ErrorException [ 1 ]: Class Model_REST_Todo contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch) ~ APPPATH/classes/model/rest/todo.php [ 140 ]
2012-12-21 12:22:06 --- STRACE: ErrorException [ 1 ]: Class Model_REST_Todo contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch) ~ APPPATH/classes/model/rest/todo.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:22:12 --- ERROR: ErrorException [ 1 ]: Class Model_REST_Todo contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch) ~ APPPATH/classes/model/rest/todo.php [ 140 ]
2012-12-21 12:22:12 --- STRACE: ErrorException [ 1 ]: Class Model_REST_Todo contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch) ~ APPPATH/classes/model/rest/todo.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:22:13 --- ERROR: ErrorException [ 1 ]: Class Model_REST_Todo contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch) ~ APPPATH/classes/model/rest/todo.php [ 140 ]
2012-12-21 12:22:13 --- STRACE: ErrorException [ 1 ]: Class Model_REST_Todo contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch) ~ APPPATH/classes/model/rest/todo.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:23:19 --- ERROR: ErrorException [ 1 ]: Class Model_REST_Todo contains 4 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch, ...) ~ APPPATH/classes/model/rest/todo.php [ 110 ]
2012-12-21 12:23:19 --- STRACE: ErrorException [ 1 ]: Class Model_REST_Todo contains 4 abstract methods and must therefore be declared abstract or implement the remaining methods (REST_Method_Head::rest_head, REST_Method_Trace::rest_trace, REST_Method_Patch::rest_patch, ...) ~ APPPATH/classes/model/rest/todo.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/3 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/4 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/5 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/2/todo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/2/todo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:27:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:27:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/todo.json ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:30:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/model/rest/todo.php [ 105 ]
2012-12-21 12:30:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/model/rest/todo.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:30:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/model/rest/todo.php [ 105 ]
2012-12-21 12:30:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/model/rest/todo.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:30:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/model/rest/todo.php [ 105 ]
2012-12-21 12:30:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/model/rest/todo.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:32:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:32:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:32:16 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/rest/todo.php [ 57 ]
2012-12-21 12:32:16 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/rest/todo.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:32:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:32:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:32:24 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/rest/todo.php [ 57 ]
2012-12-21 12:32:24 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/rest/todo.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-21 12:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:38:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/model/rest/todo.php [ 83 ]
2012-12-21 12:38:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/model/rest/todo.php [ 83 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zane/Sit...', 83, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 12:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:47:20 --- ERROR: Kohana_Exception [ 0 ]: The request property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2012-12-21 12:47:20 --- STRACE: Kohana_Exception [ 0 ]: The request property does not exist in the Model_REST_Todo class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(91): Kohana_ORM->__get('request')
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 12:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:47:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Rest::$request ~ APPPATH/classes/model/rest/todo.php [ 91 ]
2012-12-21 12:47:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Rest::$request ~ APPPATH/classes/model/rest/todo.php [ 91 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(91): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zane/Sit...', 91, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 12:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:48:09 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/rest/todo.php [ 91 ]
2012-12-21 12:48:09 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/rest/todo.php [ 91 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/application/classes/model/rest/todo.php(91): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zane/Sit...', 91, Array)
#1 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/rest/core.php(225): Model_REST_Todo->rest_post(Object(Rest))
#2 /Users/zane/Sites/Zane Taylor/kotodo/modules/REST/classes/controller/template/rest.php(31): REST_Core->execute()
#3 [internal function]: Controller_Template_REST->before()
#4 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#5 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zane/Sites/Zane Taylor/kotodo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-21 12:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 12:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 12:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 13:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 13:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-21 13:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-21 13:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/zane/Sites/Zane Taylor/kotodo/index.php(109): Kohana_Request->execute()
#1 {main}