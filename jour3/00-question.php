<?php // http://localhost/php-poo/jour3/00-question.php

// la différence entre static / pas static
// quand on utilise static et de pas static ?? 

class Question{

    public string $sujet = "une question"; // propriété classique
    public static int $duree = 20 ; // propriété static 

    public function method1(){
        $this->sujet; 
    }
    public function method2(){
        self::$duree; 
    }
}

// la différence => accès à la valeur (syntaxe)

// classique 
$q = new Question();
var_dump($q->sujet);

echo "<hr>";

// static 
var_dump(Question::$duree) ; 

echo "<hr>";

// propriété classique => elle dépend de son objet 

class Question2{
    private float $note = 0;
    public static float $coeff = 1;
    public function __construct(float $note_p){
        $this->note = $note_p;
    }
    public function calcul(){
        var_dump(self::$coeff * $this->note);
    }
}

$q1 = new Question2(10.2); // 10.2
$q2 = new Question2(17);  // 17 
echo "<pre>";
var_dump($q1);
var_dump($q2); 

$q1->calcul(); // 10.2
$q2->calcul(); // 17

Question2::$coeff = 2 ; // modifier la class => modifie tous les objets qui utilisent cette propriété 

$q1->calcul(); // 20.4
$q2->calcul(); // 34

// propriete static => dépend de la class
// propriete classique => dépend de la objet issue de la class

// -------------------

// serveur de jeu vidéo => PHP => site internet / logiciel de gestion sur le web
// jeu vidéo => C++

// POO en PHP ou en C++ => la même chose 
// class propriété static 
// syntaxe 

/**
#include <iostream>
using namespace std;

int main()
{
    int n; $n = 0 ;

    cout << "Enter a positive integer: "; echo "";
    cin >> n; 

    for (int i = 1; i <= 10; ++i) {
        cout << n << " * " << i << " = " << n * i << endl;
    }
    
    return 0;
}
 */

