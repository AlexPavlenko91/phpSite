<?php
require_once CORE_BASE_PATH."Controller.php";
require_once CORE_BASE_PATH."Model.php";
require_once CORE_BASE_PATH."View.php";
require_once CORE_CLASSES_PATH."Router.php";
require_once EXEPTION_PATH."exeption_loader.php";
require_once CORE_CLASSES_PATH."Autoloader.php";
require_once CORE_CLASSES_PATH."Url.php";
require_once HELPER_PATH."HTMLhelper.php";
spl_autoload_register("Autoloader::load");

/*Router::add("news/<p1>?",[
    "action"=>"test",
    "controller"=>"main",
    "p1"=>1

]);*/
/*
Router::add("news/<page>?",[
    "controller"=>"news",
    "action"=>"index",
   "page"=>1
]);
Router::add("news1/<page>?",[
    "controller"=>"news1",
    "action"=>"index",
    "page"=>1
]);
*/
Router::add("products/<page>?",[
    "controller"=>"products",
    "action"=>"index",
    "page"=>1
]);
try {
    Router::Run();
}catch (RoutExeption $e){
    echo $e->getMessage();
    //Router::Load("404");
}
