<?php


class HomeController {

    
    public function __construct() {
        session_start();
        
    }

    public function index() {
        
     
       include("View/Home.php");
    }
}
?>