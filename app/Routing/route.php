<?php

$router = new AltoRouter();

$router->map('GET', '/gitrepo/mvcframwork/public/about/[i:id]', '\App\Controllers\IndexController@indext', 'about_us');

$router->map('GET', '/gitrepo/mvcframwork/public/admin', '\App\Controllers\Admin\DashboardController@index', 'admin_dashboard');