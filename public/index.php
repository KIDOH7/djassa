<?php

require '../vendor/autoload.php';
use ôthentik\Router;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__) . '/views');
$router->get('/default','layouts/default','default')
       ->get('/homme','posts/man/man','homme')
       ->run();

