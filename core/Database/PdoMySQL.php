<?php
namespace Database;

class PdoMySQL 
{


    /**
    * Retourne un objet PDO pour intéragir avec la base de données
    * 
    * @return \PDO
    * 
    * 
    */
 public static function getPdo():\PDO{

        $dsn = "mysql:host=localhost;dbname=magasinvelo;charset=utf8";
        $user = "hathroubiamina";
        $pwd = "_HDk0[h4XpXZ7CbL";
   
           $pdo = new \PDO($dsn, $user,$pwd, [
                   \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                   \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
           ]);
   
           return $pdo;
   
   }
}

