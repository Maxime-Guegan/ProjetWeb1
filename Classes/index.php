<?php
if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = "login";
}
$controllers = [ "categorie" => "CategorieController", "licencie" => "LicencieController",
 "enseignant" => "EnseignantController", "contact" => "ContactController", "login" => "LoginController",
"home" => "HomeController"];


if(array_key_exists($page,$controllers)){
    $controllerName = $controllers[$page];
   
    require_once("Controller/".$controllerName.".php");
   
    $controller = new $controllerName();
}
if(isset($_GET["action"])){
    $action = $_GET["action"];
    if(isset($_GET["param"])){
        $param = $_GET["param"];   
        $controller->$action($param);
        
        
    }else{
    $controller->$action();
    }
}else{
    $controller->index();
}


?>