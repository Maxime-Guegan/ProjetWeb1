<?php

require_once("DAO/EnseignantDAO.php");

class LoginController {

    private $enseignantDAO;
    public function __construct() {

        $this->enseignantDAO = new EnseignantDAO();
    }

    public function index() {

       include("View/Login.php");
    }
    public function login(){
        $login = $this->enseignantDAO->login($_POST["email"],$_POST["mdp"]);
        echo var_dump($login);
        if($login != false){
            $_SESSION["user"] = $login["Email"];
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