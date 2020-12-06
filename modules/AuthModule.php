<?php

class AuthModule
{
    private function __construct(){ }
    /* private static $instance=NULL;
    public static function instance(){
          return self::instance()===NULL ? self::$instance=new self():self::$instance;
     }
   /*  private $user=NULL;
     private function GUID(){
         return (function_exists('com_create_guid')===true)?
        str_replace("-", "",trim(com_create_guid(),'{}'))
        : sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
     }
     const SALT_LEN=10;
     const SALT_POS = 12;
 private function generateSalt(){
     $s1=md5(rand(1000000,9999999));
     $s2=sha1(time().rand());
     return substr(md5($s1.$s2),0,self::SALT_LEN);
 }
 private function passhash($pass,$salt){
     $h1=hash('sha256',$salt.$pass.$salt);
     $h2 = hash('sha256',$pass.$salt.$pass);
     $res=hash('sha256',$h1.$h2);
     return substr_replace($res,self::SALT_POS,self::SALT_LEN);
    }
    private function repairSalt($hash){
     return substr($hash,self::SALT_POS,self::SALT_LEN);
    }
    private function testPass($pass,$hash){
        $salt = $this->repairSalt($hash);
        $hash2=$this->passhash($pass,$salt);
        return $hash===$hash2;
    }
    const SESSION_LIVE_TIME=3600;
    const SESSION_LIVE_TIME_BIG = 3600*24*10;
    const SESSION_COOKIE_NAME = "SESID";
    public function createSession($user_id,$save=false){
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
    }
    private function sessionTimeTest($token){
        $exp = $token["expires"];
        if($exp<time()){
            DatabaseModule::instance()->tokens->delete($token["id"]);
            return false;
            }
            $lt=$token["expires"]-$token["logintime"];
            if(($token["logintime"]+$lt/2)<time()){
                $exp=time()+$lt;
                setcookie(self::SESSION_COOKIE_NAME, $token["token"],$exp,URLROOT."/");
                DatabaseModule::instance()->tokens->update($token["token"],[
                    "expires"=>$exp,

                ]);
        }

    }
    public function register($login, $pass, array $userdata=[]){
        $c=DatabaseModule::instance()->users->getCount("`login`=?",[$login]);
        if($c>0) throw new AuthException("User exists");
        $userdata["login"]=$login;
        $userdata["pass"] = $this->passhash($pass,$this->generateSalt());
    DatabaseModule::instance()->users->insert($userdata);
       }
       public function login($login,$pass){
        $user = DatabaseModule::instance()->users->selectOne("`login`=?",[$login]);
      if(!$user) throw new AuthException("user not exist");
    if(!$this->testPass($pass,$user["pass"])) throw new AuthException("invalid password");
 $this->createSession((int)$user["id"]);
    }
    public function isAuth(){
          echo "dsdfsdf";
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
       }*/
}