<?php
/**
 * Description of Person
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\src\beans;
use DesignPatterns_GOT\src\factory\CharacterAbstract;
use DesignPatterns_GOT\src\adapter\Fight;

class Person extends CharacterAbstract implements Fight{
    
    /** @var string */
    private $weapon;
    
    public function setWeapon(string $weapon){
        $this->weapon = $weapon;
    }
    
    public function fight(): string{
        return "Fighting with " .$this->weapon. " bravely!";
    }
    
}