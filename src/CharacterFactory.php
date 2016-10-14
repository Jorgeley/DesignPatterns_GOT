<?php
/**
 * Description of CharacterFactory
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\src;
use DesignPatterns_GOT\src\{CharacterInterface, Person, Warg, Withc, Dragon, Giant, WhiteWalker};
use Exception;

class CharacterFactory{
    
    /** @var array Valid races to be created by the factory method bellow */
    const VALID_RACES = [ "Person", "Warg", "Witch", "Dragon", "Giant", "WhiteWalker" ];
    
    /**
     * This is the method to get a character using the Factory Design Pattern
     * @param string $race The race of the character, must be one of these: 
     *          "Person", "Warg", "Witch", "Dragon", "Giant", "WhiteWalker"
     * @return CharacterInterface
     * @throws Exception
     */
    public function getCharacter(string $race = "Person", string $name ):CharacterInterface{
        switch ($race){
            case self::VALID_RACES[0]:
                $character = new Person($name);
                break;
            case self::VALID_RACES[1]:
                $character = new Warg($name);
                break;
            case self::VALID_RACES[2]:
                $character = new Witch($name);
                break;
            case self::VALID_RACES[3]:
                $character = new Dragon($name);
                break;
            case self::VALID_RACES[4]:
                $character = new Giant($name);
                break;
            case self::VALID_RACES[5]:
                $character = new WhiteWalker($name);
                break;
            default:
                throw new Exception("This race is invalid or is not implemented!\n"
                        . "These are the valid races (according to the factory): "
                        . implode(", ", self::VALID_RACES));
                break;
        }
        return $character;
    }
    
}
