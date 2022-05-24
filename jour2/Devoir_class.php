<?php 
class Devoir{
    private string $sujet = "";

    public function __construct(string $sujet_p){
        $this->sujet = $sujet_p;
    }

    public function getSujet(){
        return $this->sujet;
    }
}