<?php // http://localhost/php-poo/jour1/06-exo.php

class Livre {
    public $auteur = "Victor Hugo" ;
    public $nom = "Les Misérables" ;
    public $prix = 20 ;
    public $devise = "euros" ;
    public $anneeParution = 1862 ;
    public function synopsis(){
        $phrase = "$this->auteur a publié $this->nom en $this->anneeParution";
    $phrase = $this->auteur . ' a publié ' .$this->nom .' en ' . $this->anneeParution;
        var_dump($phrase);
    }
    public function vente(){
        $phrase = "Pour acheter, $this->nom il faudra débourser $this->prix $this->devise" ;
        $phrase = 'Pour acheter, ' . $this->nom . ' il faudra débourser ' . $this->prix . ' ' . $this->devise ;
        var_dump($phrase);
    }
}
$livre = new Livre();
$livre->synopsis();
$livre->vente();
