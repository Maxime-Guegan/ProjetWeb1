<?php
require_once("Config/Connexion.php");
class ContactDAO {

    public function __construct() {
        $this->connexion = new Connexion();
    }
    public function create(ContactModel $contact){
        $sql = "INSERT INTO contact (numcontact, nom, prenom, email, numtel) VALUES (?,?,?,?,?)";
        $this->connexion->pdo->prepare($sql)->execute([$contact->getId(),$contact->getNom(),
        $contact->getPrenom(),$contact->getEmail(),$contact->getNumTel()]);
    }
    public function getAll(){
        $sql = "SELECT * FROM contact";
        return $this->connexion->pdo->query($sql);
    }
    public function getById($id){
        $sql = "SELECT * FROM contact Where numcontact = '$id'";
        return $this->connexion->pdo->query($sql)->fetch();
    }
    public function update(ContactModel $contact){
        $sql = "UPDATE contact SET nom = ?, prenom = ?, email = ?, numtel = ? WHERE numcontact = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$contact->getNom(),
        $contact->getPrenom(),$contact->getEmail(),$contact->getNumTel(),$contact->getId()]);
    }
    public function delete($id){
       
        $sql = "DELETE FROM contact WHERE numcontact = ?";
        return $this->connexion->pdo->prepare($sql)->execute([$id]);
    }
    public function getLastId(){
        $sql = "SELECT Max(numcontact) as id FROM contact";
        return $this->connexion->pdo->query($sql)->fetch();
    }
    
}
?>