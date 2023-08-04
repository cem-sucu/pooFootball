<?php

class Pays{
    private string $nom;
    private $equipes = [];

    public function __construct(string $nom){
        $this->nom = $nom;
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

    // Méthode pour ajouter une équipe à la liste des équipes du pays
    public function ajouterEquipe(Equipe $equipe) {
        $this->equipes[] = $equipe;
    }

    // Méthode pour afficher toutes les équipes du pays
    public function afficherEquipes() {
        echo "<h3>Équipes du pays :" . $this->nom . "</h3>";
        foreach ($this->equipes as $equipe) {
            echo "<ul><li>".$equipe->getNom() . "</li></ul>";
        }
    }






}

?>