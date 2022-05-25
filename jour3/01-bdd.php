<?php // http://localhost/php-poo/jour3/01-bdd.php


class A{
    private int $id ;
    private string $titre ; 

    public function __construct(int $id_p , string $titre_p){
        $this->id = $id_p;
        $this->titre = $titre_p;
    }

    public function id(){
        return $this->id ;
    }
    public function titre(){
        return $this->titre ;
    }
}

/* $a = new A(1, "premier article"); // écrite nous même à la main 
$a2 = new A(2, "deuxieme article"); 
$a3 = new A(3, "troisieme article");  */

$data = [ // créer une base de données => SELECT 
    [1, "premier article"],
    [2, "deuxieme article"],
    [3, "troisieme article"],
    [4, "troisieme article"],
    [5, "troisieme article"],
    [6, "troisieme article"],
];
echo "<pre>";
foreach($data as $d){
    $a = new A($d[0] , $d[1]);
    var_dump($a); 
}

// récupérer des données depuis une base de données 
// PDO 
// SQL SELECT / UPDATE / INSERT 
// SQL dans du PHP 

// récupérer des données qui sont stockées dans une bdd MySQL 
// créer une base de données (manuellement) via phpMyAdmin 

// cas pratique : 
// créer une base demo
// créer une table articles
// contient 2 colonnes 
//    id INT Unsigned NOT NULL A_I clé primaire
//    titre VARCHAR 255 NOT NULL  


// windows  XAMPP / WAMP
// http://localhost/phpmyadmin

// MacOS
// http://localhost:8888/phpmyadmin