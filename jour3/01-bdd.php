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

// remplir la table avec du SQL 
// INSERT INTO articles (titre) VALUES ("article 1" ) , ("article 2") , ("article 3" ) , ("article 4" )


// PDO 
// class native de PHP  => livré dans PHP (pas besoin de la créer )
/* class PDO{
    ////
} */
// => utiliser la class présente dans le langage PHP 
// PHP Data Objects => https://www.php.net/manual/fr/book.pdo.php

/*
https://www.php.net/manual/fr/pdo.construct.php
public PDO::__construct(
    string $dsn,
    ?string $username = null,
    ?string $password = null,
    ?array $options = null
)
*/
$dsn = "mysql:host=localhost;dbname=demo;charset=utf8"; // adresse de votre base de données sur le réseau
// http://google.fr => site internet
// mysql:host=localhost;dbname=demo;charset=utf8
$username = "root";
$password = "" ; // "root" pour les utilisateurs de MAMP
$connexion = new PDO($dsn , $username , $password);

var_dump($connexion); 
// 10h47 bon café @ toute suite !!!

// Symfony => ORM => ligne de commande 

$sth = $connexion->prepare("SELECT * FROM articles");
$sth->execute();

var_dump($sth->fetchAll()); // $data 

// cas pratique 
// dans la base demo 
// créer une nouvelle table commentaires contenant 3 colonnes
// id INT unsigned NOT NULL A_I clé primaire
// email VARCHAR 200 NOT NULL
// contenu TEXT NOT NULL 

// insérer dans la table commentaires 5 commentaires (utiliser la requête sql INSERT INTO)

// créer un nouveau fichier 02-exo.php 
// 1 établir une connexion à la base de donnée via la class PDO 
// 2 afficher dans le navigateur la liste des commentaires présentant dans la table commentaires