<?php
/**
 * Description of Person
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\src\beans;
use DesignPatterns_GOT\src\factory\CharacterAbstract;

class Dragon extends CharacterAbstract{
    
    public function setFire(): string{
        return "Setting fire everywhere! Aaaaaaarrrrrrrrrrrrrrrggggghhhhh!!!";
    }
    
    public function eatPeople(): string{
        return "Eating everybody! Aaaaaaarrrrrrrrrrrrrrrggggghhhhh!!!";
    }
    
    public function smashAndBeat(): string{
        return "Smashing and beating! Aaaaaaarrrrrrrrrrrrrrrggggghhhhh!!!";
    }
    
}