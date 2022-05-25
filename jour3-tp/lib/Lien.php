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