<?php
class AuthModel extends Model
{
private function __construct(){

}
    const SESSION_LIVE_TIME=3600;
    const SESSION_LIVE_TIME_BIG = 3600*24*10;
    const SESSION_COOKIE_NAME = "SESID";
    private $user=NULL;
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
    public function isAuth(){
              if(empty($_COOKIE[self::SESSION_COOKIE_NAME])) return false;
        $ip=$_SERVER["REMOTE_ADDR"];
        $agent = md5($_SERVER["HTTP_USER_AGENT"]);

        $token = DatabaseModule::instance()->tokens->selectOne("`token`=? AND `user_id`=? AND `user_agent`=?",[$_COOKIE[self::SESSION_COOKIE_NAME],$ip,$agent]);
        if(!$token) return false;
        if(!$this->sessionTimeTest($token)) return false;
        $this->user = DatabaseModule::instance()->getById($token["user_id"]);
        if(!$this->user) return false;
        return true;
    }
    public function getUser(){
        return $this->user;
    }
    public function logout($all=false){
        if(!$this->isAuth())return;
        if($all){
            DatabaseModule::instance()->tokens->deleteWhere("`user_id`=?",[(int)$this->user["id"]]);
        }else{

            DatabaseModule::instance()->tokens->deleteWhere("`token`=?",[$_COOKIE[self::SESSION_COOKIE_NAME]]);
            setcookie(self::SESSION_COOKIE_NAME, "",time()-1,URLROOT."/");
        }
    }
   /* public function createSession($user_id,$save=false){
        $ip=$_SERVER["REMOTE_ADDR"];
        $agent = md5($_SERVER["HTTP_USER_AGENT"]);
        $token = $this->GUID();
        $exp = time()+$save?self::SESSION_LIVE_TIME_BIG:self::SESSION_LIVE_TIME;
        DatabaseModule::instance()->tokens->insert([
            "user_id"=>$user_id,
            "user_ip"=>$ip,
            "user_agent"=>$agent,
            "expires"=>$exp,
            "logintime"=>time(),
            "token"=>$token
        ]);
        setcookie(self::SESSION_COOKIE_NAME, $token,$exp,URLROOT."/");
    }*/
    public function login($login,$pass){
        $user = DatabaseModule::instance()->users->selectOne("`login`=?",[$login]);
        if(!$user) throw new AuthException("user not exist");
        //if(!$this->testPass($pass,$user["pass"])) throw new AuthException("invalid password");

    }
}