<?php

namespace Models;

require_once "AbstractModel.php";

class Velo extends AbstractModel
{
    protected string $nomDeLaTable = "velos";

    /////////////////////////////////////////////
    private $id;
    /**
     * recupère la proprieté privée id
     * @return int 
     */
    public function getId(){
        return $this->id;
    }
    
    /////////////////////////////////////////////
    private $name;
    /**
     * recupère la proprieté privée name 
     * 
     * @return string 
     */
    public function getName(){
        return $this->name;
    }
    public function setName($name){
         $this->name = $name;
    }

    /////////////////////////////////////////////
    private $description;
    /**
     * recupère la proprieté privée ingredients
     * @return string 
     */
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
         $this->description = $description;
    }

    ///////////////////////////////////////////////
    private $image;
    /**
     * recupère la proprieté privée image
     * @return string 
     */
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
    }

    ////////////////////////////////////////////////
    private $price;
/**
 * recupère la proprieté privée price
 * @return int
 */
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }

}

?>



























namespace Models;

class Home extends AbstractModel
{

    protected string $nomDeLaTable = "ici le nom de la table SQL";

//il nous faut une propriété private, ainsi qu'un getter et un setter
//pour chaque colonne de la table SQL (pas de setter pour l'id)

// private $description

//
/* public function getDescription(){
    return $this->description;
} 

public function setDescription($description)
{
    $this->description = $description;
} */


// du fait d'hériter dela classe AbstractModel, et d'avoir paramétré un nom de table
//valide, on dispose déja de trois methodes pour intéragir avec la BDD : 

// findAll(), findById() et delete()

//pour tout autre requete SQL, il faudra développer ici une nouvelle méthode 
//(création, modification, recherche par clé étrangère, etc)


// je vais utiliser une method "save" pour récuperer un objet avec ses propriétés

}