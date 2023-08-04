<?php

class Posseder{
    private Equipe $equipe;
    private Joueur $joueur;
    private DateTime $debut_saison;

    public function __construct(Equipe $equipe, Joueur $joueur, string $debut_saison)
    {
        $this->equipe = $equipe;
        $this->joueur = $joueur;
        $this->debut_saison = new DateTime($debut_saison);
    }
    

    /**
     * Get the value of equipe
     */ 
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe
     *
     * @return  self
     */ 
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get the value of joueur
     */ 
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set the value of joueur
     *
     * @return  self
     */ 
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get the value of debut_saison
     */ 
    public function getDebut_saison()
    {
        return $this->debut_saison;
    }

    /**
     * Set the value of debut_saison
     *
     * @return  self
     */ 
    public function setDebut_saison($debut_saison)
    {
        $this->debut_saison = $debut_saison;

        return $this;
    }
}


?>