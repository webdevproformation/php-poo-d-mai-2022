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
//$categorie->readOne() ; // ERREUR 
// Fatal error: Uncaught Error: Call to undefined method Categorie::readOne()

// cas pratique : créer le fichier 08-exo.php 
// créer plusieurs class Article
// propriété protected = titre
// propriété protected = contenu
// propriété protected = dt_creation

// public méthode genererHTML(){
// return le html suivant
// <article>
// <h2>titre</h2>
// <p>contenu</p>
// <p>date de création : dt_creation </p>
// </article>
//}

// class ArticleTechnique hérité de Article
// définir les valeurs de 3 propriétés 
// titre "Article technique"
// contenu "lorem ipsum"
// dt_creation => date aujourd'hui au format jj/mm/aaaa


// class ArticleUne hérité de Article

// redéfinir public méthode genererHTML(){
// modifier les valeurs des 3 propriétés 
// return le html suivant
// <article class="article-une">
// <h2>titre</h2>
// <p>date de création : dt_creation </p>
// </article>
//}
