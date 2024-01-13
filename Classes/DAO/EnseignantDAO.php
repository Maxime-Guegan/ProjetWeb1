<?php
require_once("Config/Connexion.php");
class EnseignantDAO {

    public function __construct() {
        $this->connexion = new Connexion();
    }
    public function create(EnseignantModel $Enseignant){
        $sql = "INSERT INTO Enseignant (numlicencie, email, mdp, administrateur) VALUES (?,?,?,?)";
        $this->connexion->pdo->prepare($sql)->execute([$Enseignant->getId(), 
        $Enseignant->getEmail(),$Enseignant->getMdp(),$Enseignant->getAdmin()]);
    }
    public function getAll(){
        $sql = "SELECT l.numlicencie, nom, prenom, numcontact, nomcategorie, email, mdp ,administrateur FROM licencie l, categorie c, enseignant e WHERE c.codecategorie = l.codecategorie AND l.numlicencie = e.numlicencie";
        return $this->connexion->pdo->query($sql);
    }
    public function getById($id){
        $sql = "SELECT l.numlicencie, nom, prenom, numcontact, nomcategorie, email, mdp, administrateur FROM licencie l, categorie c, enseignant e WHERE c.codecategorie = l.codecategorie AND l.numlicencie = e.numlicencie AND l.numlicencie = '$id'";
        return $this->connexion->pdo->query($sql)->fetch();
    }
    public function update(EnseignantModel $enseignant){
       
        $sql = "UPDATE enseignant SET email = ?, mdp = ?, administrateur = ? WHERE numlicencie = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$enseignant->getEmail(), $enseignant->getMdp(),
        $enseignant->getAdmin(), $enseignant->getId()]);
    }
    public function delete($id){
        $sql = "DELETE FROM enseignant WHERE numlicencie = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$id]);
        
    }
    public function login($email,$mdp){
        $sql = "SELECT * FROM enseignant WHERE email = '$email' AND mdp = '$mdp'";
        return $this->connexion->pdo->query($sql)->fetch();
    }
}
?>