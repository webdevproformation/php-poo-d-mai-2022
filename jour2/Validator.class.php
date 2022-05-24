<?php 

class Validator{
    private array $champs = [];

    public function __construct(array $champ_p){
        $this->champs = $champ_p;
    }

    public function getChamps(){
        return $this->champs;
    }
}