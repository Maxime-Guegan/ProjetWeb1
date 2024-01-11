<?php
require_once("Config/Connexion.php");
class CategorieDAO {

    public function __construct() {
        $this->connexion = new Connexion();
    }
    public function create(CategorieModel $categorie){
        $sql = "INSERT INTO categorie (CodeCategorie, NomCategorie) VALUES (?,?)";
        $this->connexion->pdo->prepare($sql)->execute([$categorie->getCode(), 
        $categorie->getDescription()]);
    }
    public function getAll(){
        $sql = "SELECT * FROM categorie ";
        return $this->connexion->pdo->query($sql);
    }
    public function getById($id){
        $sql = "SELECT * FROM categorie Where codecategorie = '$id'";
        return $this->connexion->pdo->query($sql)->fetch();
    }
    public function update(CategorieModel $categorie){
        $sql = "UPDATE categorie SET NomCategorie = ? WHERE codecategorie = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$categorie->getDescription(), $categorie->getCode()]);
    }
    public function delete($id){
        $sql = "DELETE FROM categorie WHERE codecategorie = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$id]);
    }
}
?>