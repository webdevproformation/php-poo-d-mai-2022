<?php //http://localhost/php-poo/jour4/01-heritage.php
// héritage 
class Objet {
    public string $nom ;
    public float $prix ;
    public function action(){
        var_dump("j'ai acheté $this->nom au prix de $this->prix euros");
    }
}
class Table {
    public string $nom ;
    public float $prix ;
    public function action(){
        var_dump("j'ai acheté $this->nom au prix de $this->prix euros");
    }
    public function prixTTC(){ // Objet  avec méthode en +
        var_dump($this->prix  * 1.2);
    }
}
class Chaise {
    public string $nom ;
    public float $prix ;
    public string $couleur = "rouge"; // Objet avec une propriété en + 
    public function action(){
        var_dump("j'ai acheté $this->nom au prix de $this->prix euros");
    }
}

