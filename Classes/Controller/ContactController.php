<?php

require_once("Models/ContactModel.php");
require_once("DAO/ContactDAO.php");
require_once("DAO/LicencieDAO.php");

class ContactController {
    private $licencieDAO;
    private $contactDAO;
    
    public function __construct() {
        $this->licencieDAO = new LicencieDAO();
        $this->contactDAO = new ContactDAO();
    }

    
    public function addContactView($id){
        
        include("View/addContact.php");
    }
    public function addContact(){
        $contact = new ContactModel(0,$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["tel"]);
        $this->contactDAO->create($contact);
        $idLicencie = $_POST["id"];
        $idContact = $this->contactDAO->getLastId();
        $this->licencieDAO->updateContact($idLicencie,$idContact["id"]);
        include("View/addContact.php");
        echo "insertion réussie";
    }
    public function updateContactView($id){
        
        $contact = $this->contactDAO->getById($id);
        include("View/UpdateContact.php");
    }
    public function updateContact(){
        $contact = new ContactModel($_POST["id"],$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["tel"]);
        $this->contactDAO->update($contact);
    
        $data = $this->licencieDAO->getAll();
       include("View/Licencie.php");
       
    }
    public function deleteContact($id){
        $this->contactDAO->delete($id);
        $this->licencieDAO->deleteContact($id);
        $data = $this->licencieDAO->getAll();
       include("View/Licencie.php");
    }
}
?>