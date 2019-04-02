<?php
namespace PPR\Core;


/*
*Model
*/

class Model
{
    private static $bdd = null;

    private function __construct()
    {

    }

    public static function getBdd()
    {
        if(is_null(self::$bdd))
        {
            global $config;

            self::$bdd = new \mysqli($config['DB_SERVER'],$config['DB_USER'],$config['DB_PASS'],$config['DBDB']);
        }
        return self::$bdd;
    }
}
?>