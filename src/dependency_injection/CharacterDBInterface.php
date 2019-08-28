<?php

namespace DesignPatterns_GOT\src\dependency_injection;
use DesignPatterns_GOT\src\factory\CharacterInterface;

interface CharacterDBInterface{

	public function persist(CharacterInterface $character);

}
