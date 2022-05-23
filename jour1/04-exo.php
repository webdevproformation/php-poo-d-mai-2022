<?php  // http://localhost/php-poo/jour1/04-exo.php

// si vous un fichier php qui ne contient
// QUE du php 
// PAS de HTML
// la partie fermante de php n'est pas 
// obligatoire voire déconseillée 

class Etudiant{
    public $nom = "Alain";
    public $age = 40 ;
    public $adresse = [
            "rue" => "75 rue de Paris" , 
            "ville" => "Paris",
            "cp" => 75000
    ];
    public $isAdmin = false ;
    public $competences = ["PHP" , "JS" , "NOdeJS" , "Symfony" , "React"] ;
}

// créer objet à partir de la class 

$etudiant1 = new Etudiant();
// echo "<pre>";
var_dump($etudiant1);

// https://github.com/webdevproformation/php-poo-d-mai-2022

// 05-method.php
