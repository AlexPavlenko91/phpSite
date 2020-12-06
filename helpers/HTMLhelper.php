<?php
session_start();
class HTMLhelper
{
public static function css($name){
    return "<link rel='stylesheet' href='".Url::local("media/css/".$name.".css")."'/>";
}
    public static function js($name){
        return "<script src='".Url::local("media/js/".$name.".js")."'></script>";
    }
    public static function anchor($url,$content,$class=NULL){
        $dop=$class===NULL?"":" class='{$class}'";
        return "<a href='{$url}'{$dop}>{$content}</a>";
    }
    public static function __callStatic($name, $arguments)
    {
        $res="<{$name} ";
        $attrs=@$arguments[1];
        $content=@$arguments[0];
          if(is_array($attrs)) foreach ($attrs as $attr => $value) $res.=" {$attr}='{$value}'";
          $res.=">{$content}</{$name}>";
          return $res;
        // TODO: Implement __callStatic() method.
    }

    public static  function pagenation($page,$count,$baseUri){
$res="<ul>";
if($page>1) $res.=self::li(self::anchor("{$baseUri}/1","первая"));
if($page>2) $res.=self::li(self::anchor("{$baseUri}/".($page-2),$page-2));
if($page>1) $res.=self::li(self::anchor("{$baseUri}/".($page-1),$page-1));
        $res.=self::li(self::anchor("#",$page),["class"=>"active"]);
        if($page<$count) $res.=self::li(self::anchor("{$baseUri}/".($page+1),$page+1));
        if($page<$count-1) $res.=self::li(self::anchor("{$baseUri}/".($page+2),$page+2));
         if($page<$count) $res.=self::li(self::anchor("{$baseUri}/".($count),"последняя"));
$res.="</ul>";
return $res;
    }
}