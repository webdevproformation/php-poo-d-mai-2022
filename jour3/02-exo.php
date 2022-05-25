<?php // http://localhost/php-poo/jour3/02-exo.php

// créer la nouvelle table
// phpMyAdmin
// formulaire remplir de champs 
// en SQL ()
// en ligne de commande 
// 
/* 
// migration 
CREATE TABLE commentaires(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    email VARCHAR(200) NOT NULL,
    contenu TEXT NOT NULL,
    CONSTRAINT cle_primaire PRIMARY KEY (id)
) 
*/

// phpMyAdmin et des formulaires
// phpMyAdmin et SQL 
/* // 
INSERT INTO commentaires 
(email , contenu)
VALUES 
("alain@yahoo.fr" , "premier commentaire"),
("alain@yahoo.fr" , "deuxieme commentaire"),
("alain@yahoo.fr" , "troisieme commentaire"),
("beatrice@yahoo.fr" , "premier commentaire"),
("celine@yahoo.fr" , "premier commentaire"); 

SELECT * FROM commentaires ; => dans phpMyAdmin
*/

$dsn = "mysql:host=localhost;dbname=demo;charset=utf8";
$login = "root";
$password = ""; // "root" pour les utilisateurs de MacOS
$options = [PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_ASSOC]; 

$connexion = new PDO($dsn , $login, $password , $options);
$connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$requete = $connexion->prepare("SELECT * FROM commentaires");

$requete->execute();

$data = $requete->fetchAll(PDO::FETCH_ASSOC);

var_dump($data);