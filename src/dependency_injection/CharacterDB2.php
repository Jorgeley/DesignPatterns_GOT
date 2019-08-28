<?php

namespace DesignPatterns_GOT\src\dependency_injection;

use DesignPatterns_GOT\src\dependency_injection\CharacterDBInterface;
use DesignPatterns_GOT\src\factory\CharacterInterface;

class CharacterDB2 implements CharacterDBInterface{

        public function persist(CharacterInterface $character){
                echo 'simulating persisting in DB2: ' . $character->getName() . "\n";
        }

}
