<?php 
namespace ôthentik;
use PDO;

class Connexion {
    public static function getPDO() : PDO
    {
        return new PDO('mysql:host=localhost;dbname=mon_djassa','root','',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}