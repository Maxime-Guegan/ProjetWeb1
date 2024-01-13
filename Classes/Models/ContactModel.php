<?php
class ContactModel{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $numTel;

    public function __construct($id, $nom, $prenom, $email, $numTel){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numTel = $numTel;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setNumTel($numTel){
        $this->numTel = $numTel;
    }
    public function getNumTel(){
        return $this->numTel;
    }
}

?>