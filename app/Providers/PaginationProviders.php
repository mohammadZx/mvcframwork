<?php
namespace App\Providers;

use Illuminate\Pagination\Paginator;
class PaginationProviders{
    
    public function register(){
        Paginator::currentPathResolver(function () {
            return request()->url();
        });

        Paginator::currentPageResolver(function ($pageName = 'page') {
            $page = request()->$pageName;

            if (filter_var($page, FILTER_VALIDATE_INT) !== false && (int) $page >= 1) {
                return (int) $page;
            }

            return 1;
        });
    }
}