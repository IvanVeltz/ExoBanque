<?php

class Titulaire{
    
    // Attributs
    private string $_nom;
    private string $_prenom;
    private string $_dateDeNaissance;
    private string $_ville;
    private $_comptes = [];

    //Assesseurs
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getDateDeNaissance(){
        return $this->_dateDeNaissance;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function getComptes(){
        return $this->_comptes;
    }

    // Mutateur
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function setDateDeNaissance($dateDeNaissance){
        $this->_dateDeNaissance = $dateDeNaissance;
    }
    public function setVille($ville){
        $this->_ville = $ville;
    }
    public function setComptes($comptes){
        $this->_comptes = $comptes;
    }

    // Constructeur
    public function __construct($nom, $prenom, $dateDeNaissance, $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateDeNaissance = $dateDeNaissance;
        $this->_ville = $ville;
    }

    // Methodes
    public function ajouterCompte(CompteBancaire $compte){
        array_push($this->_comptes, $compte);
    }

    public function calculerAge(){
        $dateDeNaissance = new DateTime($this->_dateDeNaissance);
        $aujourdhui = new DateTime(date("Y-m-d"));
        $age = $dateDeNaissance->diff($aujourdhui);
        return $age->format('%y');
    }

    public function __toString(){
        return "$this->_prenom $this->_nom";
    }

    public function infosTitulaire(){
        echo "********************<br>";
        echo "Comptes bancaire de $this->_prenom $this->_nom, ".$this->calculerAge()." ans, de $this->_ville<br>";
        foreach($this->_comptes as $compte){
            echo $compte;
        }
        echo "********************<br>";
    }
}