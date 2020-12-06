<?php
class AdminModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
public function getImages()
{
    $tmp = DatabaseModule::instance()->kat->select();
    return array_column($tmp, "name", "id");
}
    public function getKat(){
        $tmp=DatabaseModule::instance()->kat->select();
        return $tmp;
    }
    public function gettovar(){
        $tmp=DatabaseModule::instance()->kat_tov->select();
        return $tmp;
    }

   public function addKat($name){
    DatabaseModule::instance()->kat->insert(
        ["name"=>$name
        ]
    );
   }
    public function delKat($id)
{
    DatabaseModule::instance()->kat->delete($id
    );
}
    public function deltov($id)
    {
        DatabaseModule::instance()->kat_tov->delete($id
        );
    }
        public function editKat($id,$name){
            DatabaseModule::instance()->kat->update($id,["name"=>$name]);

    }
    public function edittov($id,$name,$big_text,$text,$img,$id_k){
        DatabaseModule::instance()->kat_tov->update($id,["title"=>$name,
            "big_text"=>$big_text,
            "text"=>$text,
            "img"=>$img,
            "id_k"=>$id_k
        ]);

    }
    public function addtov($title,$big_text,$text,$img,$id_k){
               DatabaseModule::instance()->kat_tov->insert1(
            [   "title"=>$title,
                "big_text"=>$big_text,
                "text"=>$text,
                "img"=>$img,
                "id_k"=>$id_k
            ]
        );
    }
}