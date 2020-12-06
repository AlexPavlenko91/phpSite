<?php
class LoginModel extends Model
{
    private function __construct(){

    }
    private static $instance=NULL;
    public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    public function getLogin($login, $email)
    {
        $str = "SELECT COUNT(*) from `users` WHERE users.Login = '{$login}' or users.Email = '{$email}' ";
        $tmp=DatabaseModule::instance()->users->query($str);
        return $tmp;
    }
    public function userInsert($FULL_NAME, $Login, $Password, $Email, $Phone, $Ip){
        $date = Date("yy-m-d");
        $str = "INSERT INTO `users`( `FULL_NAME`, `Login`, `Password`, `Role`, `Email`, `Phone`, `RegisteredDate`, `Ip`, `Commit`)
 VALUES ('{$FULL_NAME}','{$Login}','{$Password}',2,'{$Email}','{$Phone}','{$date}','{$Ip}', 'Yes')";
        echo $str;
/*die();*/
        DatabaseModule::instance()->users->query2($str);
    }
}