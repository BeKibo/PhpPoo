<?php

class Image
{
    private string $url;
    private string $nom;
    private int $owner;


    /**
     * Get the value of url
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set the value of url
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of owner
     */
    public function getOwner(): int
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     */
    public function setOwner(int $owner): self
    {
        $this->owner = $owner;

        return $this;
    }
}
