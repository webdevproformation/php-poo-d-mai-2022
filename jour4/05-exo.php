<?php //http://localhost/php-poo/jour4/05-exo.php
declare(strict_types=1);

class Plat{
    private string $nom ;
    public string $saison ;
    public array $ingredient ;
    protected float $budget ;
    public function getNom(){
        return $this->nom ;
    }
    public function setNom(string $nom_p){
        $this->nom = $nom_p;
    }
}
class Cassoulet extends Plat{
    public function calculBudget(array $ingredients){
        // facultatif 
        $this->ingredient = $ingredients ; // ["ingredient1" => 10 , "ingredient2" => 20 , "ingredient3" => 10]
        // fin facultatif
        $total = 0 ;
        foreach($ingredients as $i){
            $total += $i; // 0 + 10 // 10 + 20 // 30 + 10
        }
        $this->budget = $total ; // 10 + 20 + 10
    }
    public function description(){
        // pour faire un cassoulet il faut 40 euros ; 
        var_dump("pour faire un " . $this->getNom() . " il faut " . $this->budget . " euros");
    }
}
$c = new Cassoulet();
$c->setNom("cassoulet");
$c->calculBudget(["ingredient1" => 10 , "ingredient2" => 20 , "ingredient3" => 10]);
$c->description(); // pour faire un cassoulet il faut 40 euros ; 