<?php
require_once("Models/LicencieModel.php");
require_once("DAO/CategorieDAO.php");
class LicencieController {
    private $licenceDAO;
    private $categorieDAO;
    public function __construct(LicencieDAO $licenceDAO) {
        $this->licenceDAO = new LicencieDAO();
        $this->categorieDAO = new CategorieDAO();
    }

    public function index() {
        $data = $this->licenceDAO->getAll();
       include("View/Licencie.php");
    }
    public function addLicencieView(){
        $data = $this->categorieDAO->getAll();
        include("View/addLicencie.php");
    }
    public function addLicencie(){
        $Licencie = new LicencieModel(0,$_POST["nom"],$_POST["prenom"],0,$_POST["code"]);
        $this->licenceDAO->create($Licencie);
        include("View/addLicencie.php");
        echo "insertion réussie";
    }
    public function updateLicencieView($id){
        $data = $this->categorieDAO->getAll();
        $licencie = $this->licenceDAO->getById($id);
        include("View/UpdateLicencie.php");
    }
    public function updateLicencie(){
        $licencie = new LicencieModel($_POST["id"],$_POST["nom"],$_POST["prenom"],0,$_POST["code"]);
        $this->licenceDAO->update($licencie);
        $data = $this->licenceDAO->getAll();
       include("View/Licencie.php");
       
    }
    public function deleteLicencie($id){
        $this->licenceDAO->delete($id);
        $data = $this->licenceDAO->getAll();
       include("View/Licencie.php");
    }
}
?>