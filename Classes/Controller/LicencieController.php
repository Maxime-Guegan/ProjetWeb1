<?php
require_once("Models/LicencieModel.php");
require_once("DAO/CategorieDAO.php");
require_once("DAO/LicencieDAO.php");
require_once("DAO/EnseignantDAO.php");
class LicencieController {
    private $licencieDAO;
    private $categorieDAO;
    private $enseignantDAO;
    public function __construct() {
        if(!isset($_SESSION["user"])){
            header('Location: index.php?page=login');
            exit();
        }
        $this->licencieDAO = new LicencieDAO();
        $this->categorieDAO = new CategorieDAO();
        $this->enseignantDAO = new EnseignantDAO();
    }

    public function index() {
        $data = $this->licencieDAO->getAll();
       include("View/Licencie.php");
    }
    public function addLicencieView(){
        $data = $this->categorieDAO->getAll();
        include("View/addLicencie.php");
    }
    public function addLicencie(){
        $Licencie = new LicencieModel(0,$_POST["nom"],$_POST["prenom"],0,$_POST["code"]);
        $this->licencieDAO->create($Licencie);
        $data = $this->categorieDAO->getAll();
        include("View/addLicencie.php");
        echo "insertion réussie";
    }
    public function updateLicencieView($id){
        $data = $this->categorieDAO->getAll();
        $licencie = $this->licencieDAO->getById($id);
        include("View/UpdateLicencie.php");
    }
    public function updateLicencie(){
        $licencie = new LicencieModel($_POST["id"],$_POST["nom"],$_POST["prenom"],0,$_POST["code"]);
        $this->licencieDAO->update($licencie);
        $data = $this->licencieDAO->getAll();
       include("View/Licencie.php");
       
    }
    public function deleteLicencie($id){
        $this->enseignantDAO->delete($id);
        $this->licencieDAO->delete($id);
        $data = $this->licencieDAO->getAll();
       include("View/Licencie.php");
    }
}
?>