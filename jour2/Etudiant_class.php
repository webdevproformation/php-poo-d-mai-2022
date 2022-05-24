<?php 
class Etudiant{
    private string $nom = "";

    public function __construct(string $nom_p){
        $this->nom = $nom_p;
    }

    public function getNom(){
        return $this->nom;
    }
}