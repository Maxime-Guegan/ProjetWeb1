<?php
if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = "enseignant";
}
$controllers = [ "categorie" => "CategorieController", "licencie" => "LicencieController",
 "enseignant" => "EnseignantController", "contact" => "ContactController"];


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