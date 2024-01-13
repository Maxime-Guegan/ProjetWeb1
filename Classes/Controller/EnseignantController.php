<?php
require_once("Models/LicencieModel.php");
require_once("Models/EnseignantModel.php");
require_once("DAO/CategorieDAO.php");
require_once("DAO/LicencieDAO.php");
require_once("DAO/EnseignantDAO.php");
class EnseignantController {
    private $licencieDAO;
    private $categorieDAO;
    private $enseignantDAO;
    public function __construct() {
        session_start();
        if(!isset($_SESSION["user"])){
            header('Location: index.php?page=login');
            exit();
        }
        $this->licencieDAO = new LicencieDAO();
        $this->categorieDAO = new CategorieDAO();
        $this->enseignantDAO = new EnseignantDAO();
    }

    public function index() {
        $data = $this->enseignantDAO->getAll();
       include("View/Enseignant.php");
    }
    public function addEnseignantView(){
        $data = $this->categorieDAO->getAll();
        include("View/AddEnseignant.php");
    }
    public function addEnseignant(){
        $admin;
        if(isset($_POST["admin"])){
            $admin = 1;
        }else{
            $admin = 0;
        }
        $Licencie = new LicencieModel(0,$_POST["nom"],$_POST["prenom"],0,$_POST["code"]);
        $this->licencieDAO->create($Licencie);
        $id = $this->licencieDAO->getLastId();
        $enseignant = new EnseignantModel($id["id"],$_POST["email"],$_POST["mdp"],$admin);
        $this->enseignantDAO->create($enseignant);
        $data = $this->categorieDAO->getAll();
        include("View/AddEnseignant.php");
        echo "insertion réussie";
    }
    public function updateEnseignantView($id){
        $data = $this->categorieDAO->getAll();
        $enseignant = $this->enseignantDAO->getById($id);
        include("View/UpdateEnseignant.php");
    }
    public function updateEnseignant(){
        $admin;
        if(isset($_POST["admin"])){
            $admin = 1;
        }else{
            $admin = 0;
        }
        $Licencie = new LicencieModel($_POST["id"],$_POST["nom"],$_POST["prenom"],0,$_POST["code"]);
        $this->licencieDAO->update($Licencie);
        $data = $this->categorieDAO->getAll();
        $enseignant = new EnseignantModel($_POST["id"],$_POST["email"],$_POST["mdp"],$admin);
        $this->enseignantDAO->update($enseignant);
        $data = $this->enseignantDAO->getAll();
       include("View/Enseignant.php");
    }
    public function deleteEnseignant($id){
        $this->enseignantDAO->delete($id);
        $this->licencieDAO->delete($id);
        $data = $this->enseignantDAO->getAll();
       include("View/Enseignant.php");
    }
}
?>