<?php // http://localhost/php-poo/jour4/09-parent.php

class Etudiant {
    public function information(){
        var_dump("je suis la class Etudiant");
    }
}

class EtudiantDoranco extends Etudiant{
    public function information(){
        parent::information(); // $this // self::
        // exécute une fonction qui est stockée dans la
        // class parent => Etudiant 
        var_dump("je suis la formation au sein de Doranco");
    }
}

$etudiantDoranco = new EtudiantDoranco();

$etudiantDoranco->information();