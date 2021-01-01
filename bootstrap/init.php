<?php


if(!isset($_SESSION)) session_start();
require_once __DIR__ . '/../app/config/_env.php';

new \App\Classes\Database();

require_once __DIR__ . '/../app/routing/route.php';
require_once __DIR__ . '/../app/functions/helper.php';


//set Error Handler
set_error_handler([new \App\Classes\ErrorHandler(), 'handleErrors']);

new \App\Routing\RouteDispatcher($router);