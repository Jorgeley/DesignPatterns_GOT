<?php

namespace DesignPatterns_GOT\src\dependency_injection;

use DesignPatterns_GOT\src\dependency_injection\CharacterDBInterface;
use DesignPatterns_GOT\src\factory\CharacterInterface;

class CharacterDB1 implements CharacterDBInterface{

	public function persist(CharacterInterface $character){
		echo 'simulating persisting in DB1: ' . $character->getName() . "\n";
	}

}
