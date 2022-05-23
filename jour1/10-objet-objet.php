<?php  // http://localhost/php-poo/jour1/10-objet-objet.php

class Adresse {
    private string $rue = "75 rue de Paris";
    private string $ville = "Paris";
    private int $cp = 75000; 
}

class Personne {
    private string $nom = "";
    private Adresse $adresse ; // la propriété $adresse une objet de type Adresse

    public function getNom(){
        return $this->nom;
    }
    public function setNom($valeur){
        if(is_string($valeur)){
           return $this->nom = $valeur ;
        }
        throw new Exception("nom doit être de type string");
    }

    public function getAdresse(){
        return $this->adresse ;
    }
    public function setAdresse($valeur){
        if( $valeur instanceof Adresse ){ // vérifier que $valeur objet de type Adresse
           return $this->adresse = $valeur ;
        }
        throw new Exception("adresse doit être de type Adresse");
    }
}

// si je veux créer une Personne il faut d'ABORD créer une adresse
$adresse = new Adresse();
$personne = new Personne();
$personne->setNom("Alain");
// $personne->setAdresse($adresse); 
$personne->setAdresse(new Adresse()); 
var_dump($personne);

/**
C:\xampp\htdocs\php-poo\jour1\10-objet-objet.php:42:
object(Personne)[2]
  private string 'nom' => string 'Alain' (length=5)
  private Adresse 'adresse' => 
    object(Adresse)[3]
      private string 'rue' => string '75 rue de Paris' (length=15)
      private string 'ville' => string 'Paris' (length=5)
      private int 'cp' => int 75000
 */