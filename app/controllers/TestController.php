<?php
class TestController extends Controller
{
public function action_index(){
    $v=new View("test");
    $v->title="Test";
    $c=new TestController();

    /*$v->flats=GalaryModel::Instance()->getFlats();*/
    $v->viewTemplate();
   $this->responce($v);
}

}