<?php
class Utilisateur
{
    public $nom;
    public $email;
    public $indentifiant;
    public $dateInscription;


    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of indentifiant
     */
    public function getIndentifiant()
    {
        return $this->indentifiant;
    }

    /**
     * Set the value of indentifiant
     */
    public function setIndentifiant($indentifiant): self
    {
        $this->indentifiant = $indentifiant;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     */
    public function setDateInscription($dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}
