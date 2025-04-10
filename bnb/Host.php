<?php

class Host
{
    private int $User;
    private string $identity;
    private string $siret;
    private string $auth_number;


    /**
     * Get the value of User
     */
    public function getUser(): int
    {
        return $this->User;
    }

    /**
     * Set the value of User
     */
    public function setUser(int $User): self
    {
        $this->User = $User;

        return $this;
    }

    /**
     * Get the value of identity
     */
    public function getIdentity(): string
    {
        return $this->identity;
    }

    /**
     * Set the value of identity
     */
    public function setIdentity(string $identity): self
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Get the value of siret
     */
    public function getSiret(): string
    {
        return $this->siret;
    }

    /**
     * Set the value of siret
     */
    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get the value of auth_number
     */
    public function getAuthNumber(): string
    {
        return $this->auth_number;
    }

    /**
     * Set the value of auth_number
     */
    public function setAuthNumber(string $auth_number): self
    {
        $this->auth_number = $auth_number;

        return $this;
    }
}
