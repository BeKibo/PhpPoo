<?php
Class Rent
{
private string $type;
private string $location;
private float $price;
private int $host;

/**
 * Get the value of type
 */
public function getType(): string
{
return $this->type;
}

/**
 * Set the value of type
 */
public function setType(string $type): self
{
$this->type = $type;

return $this;
}

/**
 * Get the value of location
 */
public function getLocation(): string
{
return $this->location;
}

/**
 * Set the value of location
 */
public function setLocation(string $location): self
{
$this->location = $location;

return $this;
}

/**
 * Get the value of price
 */
public function getPrice(): float
{
return $this->price;
}

/**
 * Set the value of price
 */
public function setPrice(float $price): self
{
$this->price = $price;

return $this;
}

/**
 * Get the value of host
 */
public function getHost(): int
{
return $this->host;
}

/**
 * Set the value of host
 */
public function setHost(int $host): self
{
$this->host = $host;

return $this;
}
}