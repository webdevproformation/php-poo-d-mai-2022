<?php // http://localhost/php-poo/jour4/11-exo.php

interface PageInterface{
    public function render(string $url , array $tableau = []);
    public function container ( array $tableau );
    public function connexionDb (PDO $connexion);
}

class PageFrontOffice implements PageInterface{
    public string $name = "";
    public function render(string $url , array $tableau = []){}
    public function container ( array $tableau ){}
    public function connexionDb (PDO $connexion){}
}
class PageBackOffice implements PageInterface{
    private $user ; 
    public function __construct($user){
        $this->user = $user;
    }
    public function render(string $url , array $tableau = []){}
    public function container ( array $tableau ){}
    public function connexionDb (PDO $connexion){}
}