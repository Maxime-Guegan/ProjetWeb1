<?php
class CategorieModel{
    private $code;
    private $description;
    

    public function __construct($code, $description){
        $this->code = $code;
        $this->description = $description;
        
    }

    public function setCode($code){
        $this->code = $code;
    }
    public function getCode(){
        return $this->code;
    }
    public function setDescritprion($description){
        $this->description = $description;
    }
    public function getDescription(){
        return $this->description;
    }
    
}

?>