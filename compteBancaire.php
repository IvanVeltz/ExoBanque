<?php

class CompteBancaire{
    
    // Attributs
    private string $_libelle;
    private float $_soldeInitial;
    private string $_devise;
    private Titulaire $_titulaire;

    //Accesseurs
    public function getLibelle(){
        return $this->_libelle;
    }
    public function getSoldeInitial(){
        return $this->_soldeInitial;
    }
    public function getDevise(){
        return $this->_devise;
    }
    public function getTitulaire(){
        return $this->_titulaire;
    }

    // Mutateurs
    public function setLibelle($libelee){
        $this->_libelle = $libelle;
    }
    public function setSoldeInitial($soldeInitial){
        $this->_soldeInitial = $soldeInitial;
    }
    public function setDevise($devise){
        $this->_devise = $devise;
    }
    public function setTitulaire($titulaire){
        $this->_titulaire = $titulaire;
    }

    // Constructeur
    public function __construct($libelle, $soldeInitial, $devise, Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_soldeInitial = $soldeInitial;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }

    public function crediter($montant){
        $this->_soldeInitial += $montant;
    }

    public function debiter($montant){
        $this->_soldeInitial -= $montant;
    }

    public function virement($montant, CompteBancaire $compte){
        $this->debiter($montant);
        $compte->crediter($montant);
        echo "Le virement d'un montant de $montant $this->_devise a bien été effctué<br>";
    }

    public function __toString(){
        return "Type de compte : $this->_libelle<br>
            Solde disponible = $this->_soldeInitial $this->_devise<br>";
    }

    public function afficherCompte(){
        echo "Titulaire ".$this."
            Type de compte : $this->_libelle<br>
            Solde disponible = $this->_soldeInitial $this->_devise<br>";
    }
}

// to do, gestion de la devise