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
// pause café rdv 15 min => 15h15 !!

class Cahier{
    protected string $couleur ;
    public function setCouleur (string $c){
        $this->couleur = $c;
    }
}

$cahierRouge = new Cahier();
$cahierRouge->setCouleur("rouge");

var_dump($cahierRouge);

class CahierRouge extends Cahier{
    protected string $couleur = "Rouge";
}

$cahierRouge2 = new CahierRouge();

var_dump($cahierRouge2);

// qcm à 16h50 

