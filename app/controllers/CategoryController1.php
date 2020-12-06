<?php
class CategoryController1 extends Controller
{
public function action_index(){
    $v=new View("Products");
    $v->title="Products";
    $c=new CategoryController1();

    $v->category=ProductsModel::Instance()->getCategory();
    $v->viewTemplate();
    //$v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
}
}