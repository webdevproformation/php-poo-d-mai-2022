<?php // http://localhost/php-poo/jour3/03-crud.php

class CRUD{
    private PDO $connexion ;
    private string $table ;

    public function __construct(string $tableName){
        $dsn = "mysql:host=localhost;dbname=demo;charset=utf8";
        $login = "root";
        $password = ""; // "root" pour les utilisateurs de MacOS
        //$options = [PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_ASSOC];
        $this->connexion = new PDO($dsn , $login, $password );
        $this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);  
        $this->table = $tableName;
    }

    public function create(array $data){
        $keys = array_keys($data);
        $keyDot = [] ;
        foreach($keys as $k){
            $keyDot[] = ":".$k ;
        }
        $sql = "INSERT INTO $this->table ( ". implode("," ,$keys) . " ) VALUES ( " . implode("," , $keyDot) .  " )";
        $sth = $this->connexion->prepare($sql);
        $sth->execute($data);
        // var_dump($sql);
        // INSERT INTO articles ( titre ) VALUES ("nouvel article") ;
        // INSERT INTO $this->table ( titre ) VALUES ("nouvel article") ;
        // $this->table => vient du __construct($tableName)
        // titre => $data = ["titre"=> "nouvel article"]
        // "nouvel article"
    }

    public function read(){
        $sth = $this->connexion->prepare("SELECT * FROM $this->table");
        $sth->execute();
        return $sth->fetchAll();
    }

    public function update(array $data , int $id){
        $keys = array_keys($data);
        $sql = "UPDATE $this->table SET ";
        foreach($keys as $k){
            $sql .= " $k = :$k ,";
        }

        $sql = trim($sql , ","); // trim("!bonjour les amis !", "!") => "bonjour les amis "
        $sql .= " WHERE id = :id";
        // 'UPDATE commentaires SET  email = :email , contenu = :contenu  WHERE id = :id'
        $sth = $this->connexion->prepare($sql);
        $data["id"] = $id;
        $sth->execute($data);
    }

    public function delete(int $id){
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $sth = $this->connexion->prepare($sql);
        $sth->execute(["id" => $id]);
    }
}

// l'avantage 
// bon appétit ! 13h35 @ toute suite !!!

/* $articles = new CRUD("articles");
var_dump($articles->read()); // récupérer 
$articles->create(["titre" => "encore un test" ]); // insérer
$articles->delete(); // supprimer
$articles->update(); // update */

 $commentaires = new CRUD("commentaires");
 $commentaires->update(["email" => "balbla@yahoo.fr" , "contenu" => "modification"], 2); 
 //$commentaires->create(["email" => "toto@yahoo.fr" , "contenu" => "je viens d'ajouter un commentaire via php"]); // insérer
 var_dump($commentaires->read());
/* $commentaires->delete(); // supprimer
$commentaires->update(); // update  */