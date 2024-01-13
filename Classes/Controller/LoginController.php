<?php

require_once("DAO/EnseignantDAO.php");

class LoginController {

    private $enseignantDAO;
    public function __construct() {
        session_start();
        $this->enseignantDAO = new EnseignantDAO();
    }

    public function index() {
        
        echo $_SESSION["user"];
       include("View/Login.php");
    }
    public function login(){
        
        echo $_SESSION["user"];
        $login = $this->enseignantDAO->login($_POST["email"],$_POST["mdp"]);
        
        if($login != false){
            $_SESSION["user"] = "oui";
            include("View/Home.php");
        }else{
            include("View/Login.php");
            echo"Mot de passe ou email incorrect";
        }
        
    }
   
    public function logout(){
        session_destroy();
       include("View/Login.php");
    }
}
?>