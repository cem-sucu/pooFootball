<?php

class Joueur {
    private string $nationalitee;
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;

    private $possessions = [];

    public function __construct(string $nationalitee, string $nom, string $prenom, string $date_naissance)
    {
        $this->nationalitee = $nationalitee;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);

        $this->possessions = [];
    }

    public function __toString()
    {
        return $this->getNationalitee() ." ".$this->getNom()." ".$this->getPrenom()." ".$this->getDate_naissance()->format('Y-m-d');
    }

    // Méthode pour ajouter une possession (liaison entre joueur et équipe)
    public function ajouterPossession(Posseder $possession) {
        $this->possessions[] = $possession;
    }

    // Méthode pour rechercher toutes les équipes pour lesquelles le joueur aurait pu jouer, il suffit de ajiuter dans le index directement les equipe que l'on veut
    public function trouverEquipesDuJoueur() {
        $equipesDuJoueur = [];
        foreach ($this->possessions as $possession) {
            $equipe = $possession->getEquipe();
            $equipesDuJoueur[] = $equipe;
        }
        return $equipesDuJoueur;
    }

    // Méthode pour afficher toutes les équipes pour lesquelles le joueur aurait pu jouer
    public function afficherEquipesDuJoueur() {
        $equipesDuJoueur = $this->trouverEquipesDuJoueur();
        echo "<h4>Équipe pour lesqueles le joueur " . $this->getPrenom() . " " . $this->getNom() . " aurait pu jouer :</h4>\n";
        foreach ($equipesDuJoueur as $equipe) {
            echo "<ul><li>".$equipe->getNom() . "</ul></li>\n";
        }
    }
    

    /**
     * Get the value of nationalitee
     */ 
    public function getNationalitee()
    {
        return $this->nationalitee;
    }

    /**
     * Set the value of nationalitee
     *
     * @return  self
     */ 
    public function setNationalitee($nationalitee)
    {
        $this->nationalitee = $nationalitee;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of date_naissance
     */ 
    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set the value of date_naissance
     *
     * @return  self
     */ 
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }
}

?>