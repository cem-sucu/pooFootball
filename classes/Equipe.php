<?php

class Equipe{
    private string $nom;
    private DateTime $date_creation;

    private $joueurs = [];

    public function __construct(string $nom, string $date_creation)
    {
        $this->nom = $nom;
        $this->date_creation = new DateTime($date_creation);

        $this->joueurs = [];
    }

    public function __toString()
    {
        return $this->getNom().' '.$this->getDate_creation()->format('Y-m-d');
    }

    //ajouter des joueurs
    public function ajouterJoueur(Joueur $joueur) {
        $this->joueurs[] = $joueur;
    }

    // Méthode pour afficher les joueurs de l'équipe
    public function afficherJoueurs() {
        echo "<h3>Joueurs de l'équipe " . $this->nom . "</h3>";
        foreach ($this->joueurs as $joueur) {
            echo "<ul><li>".$joueur->getPrenom() . " " . $joueur->getNom() . "</ul></li>";
        }
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
     * Get the value of date_creation
     */ 
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }
}


?>