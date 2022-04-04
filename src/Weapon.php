<?php

class Weapon
{
    private int $damage = 10;
    private string $image = 'sword.svg';

    /**
     * Get the value of damage
     */ 
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     */ 
    public function setDamage($damage): self
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return "assets/images/" . $this->image;
    }

    /**
     * Set the value of image
     *
     */ 
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
}