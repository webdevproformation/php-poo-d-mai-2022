<?php // http://localhost/php-poo/jour2/01-exo.php
class Maison{
    private string $adresse = "";
    private bool $isVendu = false ;

    public function setAdresse($valeur){
        if(is_string($valeur)) return $this->adresse = $valeur;
        throw new Exception("erreur sur l'adresse");
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function setIsVendu($valeur){
        if(is_bool($valeur)) return $this->isVendu = $valeur;
        throw new Exception("erreur sur isVendu");
    }
    public function getIsVendu(){
        return $this->isVendu;
    }
}

class Person{
    private string $nom = "";

    public function acheter(Maison $maison){
        // la variable $maison n'est utilisable avec cette méthode
        // QUE si c'est un objet de type Maison
        // solution 1
        //$maison->setIsVendu(true);
        // solution 2
        $status = $maison->getIsVendu();
        $maison->setIsVendu(!$status);
    }
    public function setNom($valeur){
        if(is_string($valeur)) return $this->nom = $valeur;
        throw new Exception("erreur sur le nom");
    }
    public function getNom(){
        return $this->nom ;
    }   
}
$m = new Maison();
$m->setAdresse("75 rue de Paris 75000 Paris");

$p = new Person();
$p->setNom("Alain");

$p->acheter($m); 
var_dump($m); 