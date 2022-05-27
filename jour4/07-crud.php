<?php // http://localhost/php-poo/jour4/07-crud.php
class CRUD {
    protected string $table = "aucune table";
    public function create(){
        $sql = "INSERT INTO $this->table (nom) VALUES (:nom)";
        var_dump($sql);
    }
    public function read(){
        $sql = "SELECT * FROM $this->table";
        var_dump($sql); 
    }
}
class Article extends CRUD{
    protected string $table = "articles"; // surcharge / override 
    public function readOne(int $id){ // définir une méthode spécifique pour Article
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        var_dump($sql);
    }
}
class Categorie extends CRUD{
    protected string $table = "categorie";
}
$article = new Article(); 
$article->create();
$article->readOne(10); 
$categorie = new Categorie();
$categorie->readOne() ; // ERREUR 
// Fatal error: Uncaught Error: Call to undefined method Categorie::readOne()

