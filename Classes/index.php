<?php
if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = "licencie";
}
$controllers = [ "categorie" => "CategorieController", "licencie" => "LicencieController"];
$daos = [ "categorie" => "CategorieDAO", "licencie" => "LicencieDAO"];

if(array_key_exists($page,$controllers) && array_key_exists($page,$daos)){
    $controllerName = $controllers[$page];
    $daoName = $daos[$page];
    require_once("Controller/".$controllerName.".php");
    require_once("DAO/".$daoName.".php");
    $dao = new $daoName();
    $controller = new $controllerName($dao);
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