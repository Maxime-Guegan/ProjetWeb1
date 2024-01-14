<?php


class HomeController {

    
    public function __construct() {
        
        session_start();
        if(!isset($_SESSION["user"])){
            header('Location: index.php?page=login');
            exit();
        }
    }

    public function index() {
        
        include("View/Menu.php");
       include("View/Home.php");
    }
}
?>