<?php
class GalaryModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
public function getFlats(){
    $tmp=DatabaseModule::instance()->flat->query("SELECT flat.*, entrance.Number as eNum, house.Street hStreet, house.Number as hNum FROM `flat` inner JOIN entrance on flat.Id_Entrance = entrance.Id inner JOIN house on entrance.House_id = house.Id");
    return $tmp;
}
    public function getServices(){
        $tmp=DatabaseModule::instance()->services->query("SELECT flat.Number, flat.Id as fId, services.Name as servName, services.Cost as servCost, bill.* FROM `services` INNER JOIN bill on bill.id_Service = services.Id INNER JOIN flat ON flat.Id = bill.id_Apartments INNER JOIN residents ON residents.id_Flat = flat.Id WHERE residents.Status = 'Хозяин' OR residents.Status = 'Квартиро-съемщик'");
        return $tmp;
    }public function getAllServices(){
    $tmp=DatabaseModule::instance()->services->query("SELECT * from services");
    return $tmp;
}
    public function getResidents(){
        $tmp=DatabaseModule::instance()->residents->query("SELECT house.Street, house.Number as hNum, entrance.Number as eNum, flat.Number as fNum, residents.* FROM `residents` INNER JOIN flat ON flat.Id = residents.id_Flat INNER JOIN entrance on entrance.Id = flat.Id_Entrance INNER JOIN house on house.Id = entrance.House_id");
        return $tmp;
    }
    public function getChart(){
        $tmp=DatabaseModule::instance()->residents->exec("SELECT month(Date_Provided) as 'name', Sum(Payment) as 'pr' FROM `bill` GROUP by month(Date_Provided)");
        return $tmp;
    }
    public function insertBill(){

    }
    public function gettovar($id){
        $tmp=DatabaseModule::instance()->kat_tov->select("id_k={$id}");
             return $tmp;
    }
   public function addImage($name,$url,$title2,$text,$big_text){
    DatabaseModule::instance()->kat_tov->insert(
        ["title"=>$name,
       "img"=>$url,
            "title2"=>$title2,
            "text"=>$text,
            "big_text"=>$big_text
        ]
    );
   }
   public function getHouses(){
       $tmp=DatabaseModule::instance()->house->select();
       return $tmp;
   }
}