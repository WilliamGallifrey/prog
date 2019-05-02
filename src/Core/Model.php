<?php
namespace PPR\Core;


/*
*Model
*/

class Model
{
    private static $bdd = null;

    private function __construct(){
        

    }

    public static function getBdd()
    {
        if(is_null(self::$bdd))
        {
            global $config;
            self::$bdd = new \mysqli($config['DB_SERVER'],$config['DB_USER'],$config['DB_PASS'],$config['DBDB']);
            if (self::$bdd->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . self::$bdd->connect_errno . ") " . self::$bdd->connect_error;
            }

        }
        return self::$bdd;
    }

}
?>