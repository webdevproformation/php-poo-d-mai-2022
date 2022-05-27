<?php 

// SQL 
// SELECT => recupérer des informations 

// commentaires => récupérer le commentaire qui a l'id = 1

// SELECT * FROM commentaires WHERE id = 1 ; 

// transformer cette requête en string PHP 

$id = 1 ; 
$sql = "SELECT * FROM commentaires WHERE id = $id ;" ; 

// super MAIS risque piratage injection SQL 

$id = "1 AND 1 = 1 ; DELETE FROM commentaires;"  ; 
$sql = "SELECT * FROM commentaires WHERE id = $id ;" ;

// pour éviter de se faire pirater (injection de code SQL dans ta requête)

$sql = "SELECT * FROM commentaires WHERE id = :id ;" ;

$sth = $connexion->prepare($sql);
$sth->execute([ 
    ":id" => 1
]);

// bloquer l'injection SQL via une requête préparée => echapper les caractères spéciaux
$sql = "SELECT * FROM commentaires WHERE id = :id ;" ;
$sth = $connexion->prepare($sql);
$sth->execute([ 
    "id" => "1 AND 1 = 1 ; DELETE FROM commentaires;"
]);


// UPDATE commentaires SET email = "mon@email.fr" , contenu = "hello" WHERE id = 5 ; 


$sql  = "UPDATE commentaires SET email = :email , contenu = :contenu WHERE id = :id" ; 
$sth = $connexion->prepare($sql);
$sth-> execute([
    "email" => "mon@email.fr" ,
    "contenu" => "hello" ,
    "id" => 5
]);

// UPDATE articles SET titre = "toto" , contenu = "tata" , auteur = "titi" WHERE id = 15 ; 
$tableau = [
    "titre" => "toto",
    "contenu" => "tata",
    "auteur" => "titi"
];
$keys = array_keys($tableau );  
$keys = ["titre" , "contenu" , "auteur"];
$sql = "UPDATE articles SET ";
foreach($keys as $k){
    $sql .= $k ." = :".$k . "," ;
}
$sql = trim($sql , ","); 
$sql .= "  WHERE id = :id"; 

// UPDATE articles SET titre = :titre , contenu = :contenu , auteur = :auteur  WHERE id = :id ; 

$tableau = [
    "email" => "mon@email.fr" ,
    "contenu" => "hello" ,
    "id" => 5
];
// "UPDATE commentaires SET email = :email , contenu = :contenu WHERE id = :id" ; 