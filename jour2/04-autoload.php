<?php // http://localhost/php-poo/jour2/04-autoload.php
declare(strict_types=1); // facultatif 

// correction 01-exo.php 
// 1 fichier qui contient plusieurs class 
// Maison / Person

// projet compliqué 
// 1 fichier = 1 class
// nom du fichier qui contient la class == nom class

// politique d'organisation de votre projet (parmis d'autre)
// Maison.php ====== class Maison{}
// Person.php ====== class Person{}

// autre politique possible 
// Maison.class.php ====== class Maison{}
// Person.class.php ====== class Person{}

// autre politique possible 
// MaisonPrincipale.class.php ====== class MaisonPrincipale{}

// autre politique possible 
// Maison_Principale.class.php ====== class MaisonPrincipale{}

// dépend de vous / ou l'équipe avec laquelle vous travaillez 

// class A => A.php  
// class B => B.php  
// ces deux class pas de propriétés 
// une fonction constructrice var_dump("je suis A") pour la class A
// une fonction constructrice var_dump("je suis B") pour la class B

// Fatal error: Uncaught Error: Class "A" not found 
/* require "A.php"; 
require "B.php"; */
/* require "Person.php";
require "Maison.php";
require "Etudiant.php";
require "Formulaire.php"; */

// https://www.php.net/manual/fr/function.spl-autoload-register.php
// si dans la code à la suite j'ai un new 
// créer un objet depuis une class 
// permettre de récupérer la nom de la class qui doit être exécutée 
spl_autoload_register(function($nomClass){
    $fichierClass = $nomClass. ".php"; // "A.php"
    require $fichierClass;
});
$a = new A();
$a = new A();
$a = new A();
$b = new B();
$b = new B();
$b = new B();
$a = new A();
$a = new A();
$a = new A();
$a = new A();
$b = new B();
$b = new B();

// cas pratique 
// créer 05-exo.php
// déclare strict
// une fonction d'autoload qui va charger toutes les class nécessaires

// créer un objet formulaire et créer un objet validateur

// créer deux fichiers qui contient chacun une class 
// nom du fichier Formulaire.class.php
// class Formulaire 
// contenir 1 propriété champs tableau par défaut vide
// constructeur et getter

// nom du fichier Validator.class.php
// class Validator
// contenir 1 propriété champs tableau par défaut vide
// constructeur et getter