
<?php
require_once  __DIR__ . '/blade.php';
require_once  __DIR__ . '/session.php';
require_once  __DIR__ . '/csrftoken.php';
require_once  __DIR__ . '/upload.php';
require_once  __DIR__ . '/request.php';

use Philo\Blade\Blade;

function view($path, $data = []){

    $view = __DIR__ . '/../../resources/view';
    $cache =  __DIR__ . '/../../bootstrap/cache';  
    $blade = new Blade($view, $cache);
    echo $blade->view()->make($path,$data)->render();
    // require_once  __DIR__ . '/../../resources/view/' . $path . '.blade.php';
}

function make($file, $data){
    extract($data);
    ob_start();
    include(__DIR__. '/../../resources/view/emails/'. $file. '.php');
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

function asset($path){
    return getenv('APP_URL') . '/public/' . $path;
}
function redirect($path){
    return header('Location:' . public_path() . $path);
}

function  public_path(){
    return getenv('APP_URL') . '/public/'; 
}