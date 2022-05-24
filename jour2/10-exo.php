<?php // http://localhost/php-poo/jour2/10-exo.php
declare(strict_types=1);

class Serveur{
    private static int $port = 80 ;
    private static string $domaine = "localhost";
    private static string $protocol = "http";
    
    public function urlServeur(){
        return self::$protocol . "://" . self::$domaine . ":" . self::$port ;
    }
}

$server = new Serveur();

var_dump($server->urlServeur());
