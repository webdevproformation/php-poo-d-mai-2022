<?php // http://localhost/php-poo/jour4/08-exo.php

class Article{
    protected string $titre;
    protected string $contenu;
    private DateTime $dt_creation;

    private function maintenant(){
        $this->dt_creation = new DateTime();
        return $this->dt_creation->format("d/m/Y");
    }

    public function genererHTML(){
        return "
            <article>
            <h2>$this->titre</h2>
            <p>$this->contenu</p>
            <p>date de création : " . $this->maintenant() . " </p>
            </article>
        ";
    }
}
class ArticleTechnique extends Article{
    protected string $titre = "Article technique";
    protected string $contenu  = "lorem ipsum";
}

class ArticleUne extends Article{
    protected string $titre = "nouvel article à la Une";
    protected string $contenu = "encore du lorem ipsum";
    public function genererHTML(){
        return "
            <article class=\"article-une\">
            <h2>$this->titre</h2>
            <p>$this->contenu</p>
            </article>
        ";
    }
}

$articleTechnique = new ArticleTechnique();
var_dump($articleTechnique->genererHTML());

$articleUne = new ArticleUne();
var_dump($articleUne->genererHTML());


/* function calcul(){ // Parent
    ///// .....
}

function calcul(){ // Enfant
    ///// .....
} */