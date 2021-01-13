<?php
$providers = [
    App\Providers\PaginationProviders::class
];


// create object from provider

foreach ($providers as $provider){
    $pv = new $provider;
    $pv->register();
}