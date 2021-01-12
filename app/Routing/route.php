<?php

$router = new AltoRouter();

$router->map('GET', '/about/[i:id]', '\IndexController@indext', 'about_us');

$router->map('GET', '/admin', '\Admin\DashboardController@index', 'admin_dashboard');
$router->map('POST', '/admin/post', '\Admin\DashboardController@get', 'post');

$router->map('GET', '/admin/product/categories', '\Admin\AdminCategoryController@show', 'admin_show_category');
$router->map('POST', '/admin/product/categories', '\Admin\AdminCategoryController@store', 'create_category');