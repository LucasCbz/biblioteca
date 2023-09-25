<?
namespace generic;
use generic\MysqlSing;

class ConnectionBD{
    public $bd;

    function __construct()
    {
        $this->bd=MysqlSing::getInstance();
    }

}