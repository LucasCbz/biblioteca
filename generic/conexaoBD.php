<?
namespace generic;
class ConnectionBD{
    public $bd;

    function __construct()
    {
        $this->bd=MysqlSing::getInstance();
    }

}