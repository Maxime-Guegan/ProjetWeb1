<?php
class EnseignantModel{
    private $id;
    private $email;
    private $mdp;
    private $admin;
    public function __construct($id, $email, $mdp, $admin){
        $this->id = $id;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->admin = $admin;
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
    public function setAdmin($admin){
        $this->admin = $admin;
    }
    public function getAdmin(){
        return $this->admin;
    }
    
}

?>