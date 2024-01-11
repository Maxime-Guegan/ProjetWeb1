<?php
class LicencieModel{
    private $id;
    private $nom;
    private $prenom;
    private $idContact;
    private $codeCategorie;

    public function __construct($id, $nom, $prenom, $idContact, $codeCategorie){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->idContact = $idContact;
        $this->codeCategorie = $codeCategorie;
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
    
    public function setIdContact($idContact){
        $this->idContact = $idContact;
    }
    public function getIdContact(){
        return $this->idContact;
    }
    public function setCodeCategorie($codeCategorie){
        $this->codeCategorie = $codeCategorie;
    }
    public function getCodeCategorie(){
        return $this->codeCategorie;
    }
}

?>