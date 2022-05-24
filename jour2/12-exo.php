<?php //http://localhost/php-poo/jour2/12-exo.php

class Role{
    const USER = 0;
    const REDACTEUR = 1;
    const ADMIN = 2;
}

class Profil{
    private string $nom = "";
    private int $role  = Role::USER ; 

    public function __construct(string $nom_p , int $role_p ){
            $this->nom = $nom_p;
            $this->setRole($role_p);
    }

    public function getNom(){
        return $this->nom;
    }
    public function getRole(){
        return $this->role ;
    }
    public function setRole(int $role_p){
        if(
            $role_p == Role::USER ||
            $role_p == Role::REDACTEUR ||
            $role_p == Role::ADMIN 
        ){
          return  $this->role = $role_p;
        }
        throw new Exception("le role doit être une constante de la class Role");
    }
}

$webmaster = new Profil("Alain" , 2);
var_dump($webmaster);

$webmaster2 = new Profil("Céline" , Role::REDACTEUR);
var_dump($webmaster2);

// https://www.php.net/manual/fr/book.pdo.php
//