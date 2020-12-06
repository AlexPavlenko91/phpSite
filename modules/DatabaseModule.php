<?php
session_start();
class DatabaseModule
{
    private $dbh, $tables, $table = NULL;
    private static $instance = NULL;

    public static function instance()
    {
        return self::$instance === NULL
            ? self::$instance = new self()
            : self::$instance;

    }

    private function __construct()
    {
        $config = ConfigModule::load("Database/Database");
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $this->dbh = new PDO("mysql:host=ao9moanwus0rjiex.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=wpakjw2xv11rgbif";port=3306, "exh4jcg6wh0dm7op", "l4iw9tohedf1rtvp", $opt
        );
        $this->tables = $this->dbh->query("SHOW TABLES;")->fetchAll(PDO::FETCH_COLUMN);

    }

    public function __get($name)
    {
        if (!in_array($name, $this->tables)) throw new Exception("Table {$name} not exists");
        $this->table = $name;
        return $this;
        // TODO: Implement __get() method.
    }

    public function exec($query, array $data = [])
    {
        /*echo $query;*/
        $stmt = $this->dbh->prepare($query);
        $stmt->execute($data);
    }

    public function query($query, array $data = [], $mode = PDO::FETCH_ASSOC)
    {
        /*echo $query;*/
        $stmt = $this->dbh->prepare($query);


//var_dump($stmt);

        $stmt->execute($data);
        return $stmt->fetchAll($mode);
    }

    public function query2($query, array $data = [], $mode = PDO::FETCH_ASSOC)
    {
        $stmt = $this->dbh->prepare($query);
//var_dump($stmt);

        $stmt->execute($data);
    }

    public function select($where = "1", array $data = [], array $columns = NULL)
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $collist = $columns === NULL ? "*" : "`" . implode("`,`", $columns) . "`";
        $q = "SELECT {$collist} FROM `{$this->table}` WHERE {$where}";
        $this->table = NULL;
        return $this->query($q, $data);
    }

    public function selectColumn($column, $where = "1", array $data = [])
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $q = "SELECT {$column} FROM `{$this->table}` WHERE {$where}";
        $this->table = NULL;
        return $this->query($q, $data, PDO::FETCH_COLUMN);
    }

    public function selectOne($where = "1", array $data = [])
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $stmt = $this->dbh->prepare("SELECT * FROM `{$this->table}` WHERE {$where}");
        $stmt->execute($data);
        $this->table = NULL;
        return $stmt->fetch();
    }

    public function getById($id)
    {
        return $this->selectOne("id=?", [$id]);
    }

    public function getByIdk($id)
    {
        return $this->selectOne("id_k=?", [$id]);
    }

    public function getCount($where = "1", array $data = [])
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $stmt = $this->dbh->prepare("SELECT COUNT(*) FROM `{$this->table}` WHERE {$where}");
        $stmt->execute($data);
        $this->table = NULL;
        return $stmt->fetchColumn();
    }

    public function insert(array $data)
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $fields = array_keys($data);
        $q = "INSERT INTO `{$this->table}`(`" . implode("`,`", $fields) . "`) VALUES(:" . implode(",:", $fields) . ");";
        $this->exec($q, $data);
        $this->table = NULL;
        return $this->dbh->lastInsertId();
    }

    public function insert1(array $data)
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $fields = array_keys($data);
        $values = array_values($data);

        $q = "INSERT INTO `{$this->table}`(`" . implode("`,`", $fields) . "`) VALUES('" . implode("','", $values) . "');";
        /*echo $q;*/
        $this->exec($q, $data);
        $this->table = NULL;
        return $this->dbh->lastInsertId();
    }

    public function deleteWhere($where = "0", array $data = [])
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $this->exec("DELETE FROM `{$this->table}` WHERE {$where}", $data);
        $this->table = NULL;
    }

    public function delete($id)
    {
        $this->deleteWhere("`id`=?", [$id]);
    }

    public function updateWhere(array $values, $where = "0", array $data = [])
    {
        if ($this->table === NULL) throw new Exception("Table was not be selected");
        $new_values = [];
        $q = "UPDATE `{$this->table}` SET ";
        foreach ($values as $field => $value) {
            $q .= "`{$field}`=:update_prefix_{$field}";
            $new_values["update_prefix_{$field}"] = $value;
        }
        $q .= " WHERE {$where}";
        $data = array_merge($data, $new_values);
        $this->exec($q, $data);
        $this->table = NULL;
    }

    public function Update($id, array $values)
    {
        $this->updateWhere($values, "`id`=:id", ["id" => $id]);
    }
}
