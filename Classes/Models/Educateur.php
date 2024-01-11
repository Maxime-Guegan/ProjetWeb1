<?php
class EducateurModel{
    private $id;
    private $email;
    private $mdp;

    public function __construct($id, $email, $mdp){
        $this->id = $id;
        $this->email = $email;
        $this->mdp = $mdp;
        
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setMdp($mdp){
        $this->mdp = $mdp;
    }
    public function getMdp(){
        return $this->mdp;
    }
    
}

?>