<?php 

class Formulaire{
    private array $data = [];
    public function __construct(array $data_p){
            $this->data = $data_p;
    }
    private function input(string $nom , string $label , string $type){
        $valeur = isset($this->data[$nom]) ? $this->data[$nom] : '' ;
        $html = "<div class=\"mb-3\">
                    <label for=\"$nom\">$label</label>
                    <input type=\"$type\" class=\"form-control\" name=\"$nom\" id=\"$nom\" value=\"$valeur\">
                </div>";
        return $html ; 
    }

    public function textarea(string $nom , string $label ){
        $valeur = isset($this->data[$nom]) ? $this->data[$nom] : '' ;
        $html = "<div class=\"mb-3\">
                    <label for=\"$nom\">$label</label>
                    <textarea class=\"form-control\" name=\"$nom\" id=\"$nom\">$valeur</textarea>
                </div>";
        return $html ; 
    }

    public function inputText(string $nom , string $label){
        return $this->input($nom , $label , "text");
    }
    public function inputColor(string $nom , string $label){
        return $this->input($nom , $label , "color");
    }
    public function inputEmail(string $nom , string $label){
        return $this->input($nom , $label , "email");
    }
    public function inputDate(string $nom , string $label){
        return $this->input($nom , $label , "date");
    }

    public function inputSubmit(){
        $html = "<div class=\"mb-3\">
                    <input type=\"submit\"  class=\"btn btn-primary\">
                </div>";
        return $html ;
    }
}

// cas pratique 
// pouvez vous créer une nouvelle méthode
// dans la class Formulaire
// qui va permettre d'ajouter des balises
// textarea

// une fois créée => l'utiliser dans le fichier
// 08-formulaire-poo.php 

// créer une nouvelle méthode qui permet de créer 
// <input type="date"> 

// une fois créée => l'utiliser dans le fichier
// 08-formulaire-poo.php 

// https://www.w3schools.com/tags/tag_input.asp