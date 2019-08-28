<?php

namespace DesignPatterns_GOT\src\dependency_injection;
use DesignPatterns_GOT\src\factory\CharacterInterface;
use DesignPatterns_GOT\src\dependency_injection\CharacterDBInterface;
use DesignPatterns_GOT\src\dependency_injection\CharacterDB1;
use DesignPatterns_GOT\src\dependency_injection\CharacterDB2;

class CharacterDAO{

	public $db1;
	public $db2;	

	/**
	 * Injecting CharacterDB1 and CharacterDB2 as dependency to CharacterDAO
	 */
	public function __construct(CharacterDBInterface $db1, CharacterDBInterface $db2){
		$this->db1 = $db1;
		$this->db2 = $db2;
	}

	public function add(CharacterInterface $character){
		$this->db1->persist($character);
		$this->db2->persist($character);
	}

}
