<?php
require_once("Models/CategorieModel.php");
class CategorieController {
    private $categorieDAO;

    public function __construct(CategorieDAO $categorieDAO) {
        $this->categorieDAO = $categorieDAO;
    }

    public function index() {
        $data = $this->categorieDAO->getAll();
       include("View/Categorie.php");
    }
    public function addCategorieView(){
        include("View/addCategorie.php");
    }
    public function addCategorie(){
        $categorie = new CategorieModel($_POST["code"],$_POST["description"]);
        $this->categorieDAO->create($categorie);
        include("View/addCategorie.php");
        echo "insertion réussie";
    }
    public function updateCategorieView($id){
        $categorie = $this->categorieDAO->getById($id);
        include("View/UpdateCategorie.php");
    }
    public function updateCategorie(){
        $categorie = new CategorieModel($_POST["code"],$_POST["description"]);
        $this->categorieDAO->update($categorie);
        $data = $this->categorieDAO->getAll();
       include("View/Categorie.php");
    }
    public function deleteCategorie($id){
        $this->categorieDAO->delete($id);
        $data = $this->categorieDAO->getAll();
       include("View/Categorie.php");
    }
}
?>