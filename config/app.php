<?php
$providers = [
    App\Providers\PaginationProviders::class
];

foreach ($providers as $provider){
    $pv = new $provider;
    $pv->register();
}