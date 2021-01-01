<?php

$router = new AltoRouter();

$router->map('GET', '/mvcecom/public/about/[i:id]', '\App\Controllers\IndexController@indext', 'about_us');