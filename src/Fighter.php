<?php

class Fighter
{
    public const MAX_LIFE = 100;

    private string $name;

    private int $strength;
    private int $dexterity;
    private string $image;

    private int $life = self::MAX_LIFE;
    private ?Weapon $weapon = null;
    private ?Shield $shield = null;
    
    public function __construct(
        string $name,
        int $strength = 10,
        int $dexterity = 5,
        string $image = 'fighter.svg'
    ) {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->image = $image;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getDamage()
    {
        $damage = $this->getStrength();
        if ($this->getWeapon()) {
            $damage = $this->getStrength() + $this->getWeapon()->getDamage();
        }
        return $damage;
    }

    public function getDefense()
    {
        $defense = $this->getDexterity();
        if ($this->getShield()) {
            $defense = $this->getDexterity() + $this->getShield()->getProtection();
        }
        return $defense;
    }

    public function fight(Fighter $adversary): void
    {
        $damage = rand(1, $this->getDamage()) - $adversary->getDefense();
        if ($damage < 0) {
            $damage = 0;
        }
        $adversary->setLife($adversary->getLife() - $damage);
    }


    /**
     * Get the value of life
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     */
    public function setLife($life): self
    {
        if($life < 0) {
            $life = 0;
        }
        $this->life = $life;

        return $this;
    }

    public function isAlive(): bool
    {
        return $this->getLife() > 0;
    }

    /**
     * Get the value of strength
     */
    public function getStrength(): int
    {
        return $this->strength;
    }


    /**
     * Set the value of strength
     *
     */
    public function setStrength(int $strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get the value of dexterity
     */
    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    /**
     * Set the value of dexterity
     *
     */
    public function setDexterity(int $dexterity): self
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    /**
     * Get the value of weapon
     */ 
    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     */ 
    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get the value of shield
     */ 
    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     */ 
    public function setShield(Shield $shield): self
    {
        $this->shield = $shield;

        return $this;
    }
}
