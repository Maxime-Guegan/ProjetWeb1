<?php
require_once("Config/Connexion.php");
class LicencieDAO {

    public function __construct() {
        $this->connexion = new Connexion();
    }
    public function create(LicencieModel $licencie){
        $sql = "INSERT INTO licencie (nom, prenom,codecategorie) VALUES (?,?,?)";
        $this->connexion->pdo->prepare($sql)->execute([$licencie->getNom(), 
        $licencie->getPrenom(),$licencie->getCodeCategorie()]);
    }
    public function getAll(){
        $sql = "SELECT numlicencie, nom, prenom, numcontact, nomcategorie FROM licencie l, categorie c WHERE c.codecategorie = l.codecategorie ";
        return $this->connexion->pdo->query($sql);
    }
    public function getById($id){
        $sql = "SELECT * FROM licencie Where numlicencie = '$id'";
        return $this->connexion->pdo->query($sql)->fetch();
    }
    public function update(LicencieModel $licencie){
        $sql = "UPDATE licencie SET nom = ?, prenom = ?, codecategorie = ? WHERE numlicencie = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$licencie->getNom(), $licencie->getPrenom(),
        $licencie->getCodeCategorie(), $licencie->getId()]);
    }
    public function delete($id){
       
        $sql = "DELETE FROM licencie WHERE numlicencie = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$id]);
    }
    public function getLastId(){
        $sql = "SELECT Max(numlicencie) as id FROM licencie";
        return $this->connexion->pdo->query($sql)->fetch();
    }
    public function updateContact($idLicencie,$idContact){
        $sql = "UPDATE licencie set numcontact = ? WHERE numlicencie = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$idContact, $idLicencie]); 
    }
    public function deleteContact($idContact){
        $sql = "UPDATE licencie set numcontact = null WHERE numcontact = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$idContact]); 
    }
}
?>