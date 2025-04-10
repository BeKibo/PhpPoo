<?php

class Availability
{
    private string $id;
    private bool $status;
    private int $rent;

    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of rent
     */
    public function getRent(): int
    {
        return $this->rent;
    }

    /**
     * Set the value of rent
     */
    public function setRent(int $rent): self
    {
        $this->rent = $rent;

        return $this;
    }
}
