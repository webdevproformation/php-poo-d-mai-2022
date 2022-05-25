<?php 

class Lien{

    private static array $liens = [
        "créer un commentaire" => "index.php",
        "créer un article" => "article.php"
    ];

    public static function Menu(){
        $html = "<nav class=\"navbar navbar-expand bg-primary navbar-dark px-3 mb-3\">";
        $html .= "<a href=\"#\" class=\"navbar-brand\">projet jour3</a>";
        $html .= "<ul class=\"navbar-nav\">";
        foreach(self::$liens as $libelle => $page){
            $html .= "<li class=\"nav-item\"> 
                <a href=\"$page\" class=\"nav-link\">$libelle</a>
            </li>";
        }
        $html .= "</ul>";
        $html .= "</nav>";
        return $html;
    }

}

// cas pratique créer une nouvelle page liste-article.php à la racine du dossier jour3-tp
// requete dans la table articles => récupérer tous les articles 

// dans la partie html 
// installer bootstrap
// ajouter le menu
// afficher dans un tableau la liste de tous les articles <table></table>
// id / titre / contenu 
// 