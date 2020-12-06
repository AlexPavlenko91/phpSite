<?php

class MainController extends Controller
{
    public function action_index()
    {
        $v = new View("main");
        $v->title = "mainpage";
        $c = new MainController();

        /*$v->products=ProductsModel::Instance()->getProducts();*/
        $v->viewTemplate();
        $this->responce($v);
    }

}