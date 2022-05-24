<?php 
class Professeur{
    private string $nom = "";

    public function __construct(string $nom_p){
        $this->nom = $nom_p;
    }

    public function donner(Devoir $devoir , Etudiant $etudiant){
        // "Alain doit réaliser le devoir de PHP"
        //$phrase = $etudiant->getNom() . " doit réaliser le devoir de " . $devoir->sujet;
        $phrase = $etudiant->getNom() . " doit réaliser le devoir de " . $devoir->getSujet();
        var_dump($phrase);
    }

    public function getNom(){
        return $this->nom;
    }
}