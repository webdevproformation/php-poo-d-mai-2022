<?php // http://localhost/php-poo/jour2/03-exo.php
declare(strict_types=1);
// typehint

class Etudiant{
    private string $nom = "";
    private int $age = 0;
    private array $competences = [];

    // setter 
    public function __construct(string $nom_p, int $age_p , array $competences_p){
        $this->nom = $nom_p ;
        $this->age = $age_p ;
        $this->competences = $competences_p ;
    }
    public function getNom(){
        return $this->nom ;
    }
    public function getAge(){
        return $this->age ;
    }
    public function getCompetences(){
        return $this->competences ;
    }
}
$etudiant1 = new Etudiant("Alain", 22 , ["PHP", "JS"]);
$etudiant2 = new Etudiant("Céline" ,18 , ["NodeJS", "Symfony" , "HTML", "CSS"]);

var_dump($etudiant1, $etudiant2);