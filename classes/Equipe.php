<?php

class Equipe{
    private string $nom;
    private DateTime $date_creation;

    public function __construct(string $nom, string $date_creation)
    {
        $this->nom = $nom;
        $this->date_creation = new DateTime($date_creation);
    }

    public function __toString()
    {
        return $this->getNom().' '.$this->getDate_creation()->format('Y-m-d');
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