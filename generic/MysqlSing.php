<?php

namespace generic;

use PDO;

class MysqlSing
{
    private static $dataBaseSing = null;

    private $conexaoPDO = null;
    private $dsn = "mysql:host=localhost;dbname=biblioteca";
    private $username = "root";
    private $password = "";



    private function __construct()
    {
        if ($this->conexaoPDO == null) {
            $this->conexaoPDO = new PDO($this->dsn, $this->username, $this->password);
            $this->conexaoPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public static function getInstance()
    {
        if (!self::$dataBaseSing) { // se estiver vazio
            self::$dataBaseSing = new MysqlSing();
        }

        return self::$dataBaseSing;
    }

    public function prepare($sql)
    {
        if ($this->conexaoPDO != null) {
            return $this->conexaoPDO->prepare($sql);
        }
        return null;
    }

    public function query($sql, $param = array())
{
    if ($this->conexaoPDO != null) {
        $sth = $this->conexaoPDO->prepare($sql);
        foreach ($param as $key => &$value) {
            // Use :nome como o nome do parâmetro
            $sth->bindParam(":$key", $value, PDO::PARAM_STR);
        }

        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    return null;
}
    
}
?>