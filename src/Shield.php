<?php

class Shield
{
    private int $protection = 10;
    private string $image = 'shield.svg';
    

    /**
     * Get the value of protection
     */ 
    public function getProtection(): int
    {
        return $this->protection;
    }

    /**
     * Set the value of protection
     *
     */ 
    public function setProtection($protection): self
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
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