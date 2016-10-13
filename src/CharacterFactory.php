<?php
/**
 * Description of CharacterFactory
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\src;
use DesignPatterns_GOT\src\{Character, Person, Warg, Withc, Dragon, Giant, WhiteWalker};

class CharacterFactory{
    const VALID_RACES = array( "Person", "Warg", "Witch", "Dragon", "Giant", "WhiteWalker" );
    
    public function getCharacter($race = "Person"):Character{
        switch ($race){
            case "Person":
                $character = new Person();
                break;
            case "Warg":
                $character = new Warg();
                break;
            case "Witch":
                $character = new Witch();
                break;
            case "Dragon":
                $character = new Dragon();
                break;
            case "Giant":
                $character = new Giant();
                break;
            case "WhiteWalker":
                $character = new WhiteWalker();
                break;
        }
        return $character;
    }
    
}
