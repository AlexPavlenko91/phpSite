<?php
session_start();
class ProductsController extends Controller
{
    public function action_index()
    {
        $v = new View("Products");
        $v->title = "Products";
        $c = new ProductsController();
        $v->category =  ProductsModel::Instance()->getCategory();
        $cat = 0;
        if (isset($_POST['IdCat'])){
            session_start();
            $_SESSION['IdCat'] = $_POST['IdCat'];

        }

        $count =  ProductsModel::Instance()->getCountProducts1( $_SESSION['IdCat']);
        $page = (int)Router::getUriParam("page");
        $v->products = ProductsModel::Instance()->getProducts1($page,  $_SESSION['IdCat']);
        $v->cat = ProductsModel::Instance()->getCategory1( $_SESSION['IdCat']);
        /*$c->action_demo();*/
        /*$v->component = $c->getResponce();*/
        $v->pagination = HTMLhelper::pagenation($page, $count, Url::local("products"));
        $v->viewTemplate();
        //$v->auth=AuthModule::instance()->isAuth();
        $this->responce($v);
    }


}