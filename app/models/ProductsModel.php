<?php
session_start();
class ProductsModel extends Model
{
    private function __construct()
    {

    }

    private static $instance = NULL;

    public static function Instance()
    {
        return self::$instance === NULL ? self::$instance = new self() : self::$instance;
    }

    const countPerPage = 2;


    public function getProducts($page)
    {
        $cp = self::countPerPage;
        if (!empty($page)) {
            $offset = ($page - 1) * self::countPerPage;
        } else $offset = self::countPerPage;
        $str = "SELECT * FROM products ORDER BY id LIMIT {$cp} OFFSET {$offset}";
        $tmp = DatabaseModule::instance()->products->query($str);
        return $tmp;
    }

    public function getProducts1($page, $idCat)
    {

        $cp = self::countPerPage;
        if (!empty($page)) {
            $offset = ($page - 1) * self::countPerPage;
        } else $offset = self::countPerPage;
        if ($idCat != 0) {

            $str = "SELECT * FROM products where Id_Category = {$idCat} ORDER BY id LIMIT {$cp} OFFSET {$offset}";
        } else {
            $str = "SELECT * FROM products ORDER BY id LIMIT {$cp} OFFSET {$offset}";
        }
        $tmp = DatabaseModule::instance()->products->query($str);
        return $tmp;
    }

    public function getCountProducts()
    {
        /*$tmp = DatabaseModule::instance()->products->query("SELECT count(*) FROM `products` ");
        return $tmp[0]["count(*)"]/self::countPerPage;*/
        $count = DatabaseModule::instance()->products->getCount();
        return ceil($count / self::countPerPage);
    }

    public function getCountProducts1($idCat)
    {
        session_start();
        var_dump($_SESSION);
        if ($idCat != 0) {
            $tmp = DatabaseModule::instance()->products->query("SELECT count(*) FROM `products` where Id_Category = {$idCat}");
        } else $tmp = DatabaseModule::instance()->products->query("SELECT count(*) FROM `products` ");
        return $tmp[0]["count(*)"] / self::countPerPage;
        /*$count = DatabaseModule::instance()->products->getCount();
        return ceil($count/self::countPerPage);*/
    }

    public function getCategory()
    {
        $tmp = DatabaseModule::instance()->category->query("SELECT * FROM `category` ");
        return $tmp;
    }

    public function getCategory1($idCat)
    {
        if ($idCat!=0){
            $tmp = DatabaseModule::instance()->category->query("SELECT Name FROM `category` where Id = {$idCat}");
        }
        return $tmp[0]['Name'];
    }
}
?>
<script language="php"> </script>