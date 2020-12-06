<?php
class ServicesController extends Controller
{
public function action_index(){
    $v=new View("ServicesView");
    $v->title="Услуги-счета";
    $c=new ServicesController();

    $v->services=GalaryModel::Instance()->getServices();
    $v->viewTemplate();
    //$v->auth=AuthModule::instance()->isAuth();
   $this->responce($v);
}

public function action_insert(){
    $v=new View("ServicesView");
    $v->title="Услуги";
    $c=new ServicesController();
    $v->id=GalaryModel::Instance()->insertBill($_POST);
    $v->services=GalaryModel::Instance()->getServices();
    $v->viewTemplate();
    //$v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
}
}