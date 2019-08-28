<?php
/**
 * Description of GOT_Test
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\tests;
use PHPUnit_Framework_TestCase;
use DesignPatterns_GOT\src\beans\Person;
use DesignPatterns_GOT\src\dependency_injection\CharacterDAO;
use DesignPatterns_GOT\src\dependency_injection\CharacterDB1;
use DesignPatterns_GOT\src\dependency_injection\CharacterDB2;

class CharacterDAOTest extends PHPUnit_Framework_TestCase{
    
	public function testDependencyInjection(){
		$tyrion = new Person('Tyrion');
		$characterDB1 = new CharacterDB1();
		$characterDB2 = new CharacterDB2();
		$characterDAO = new CharacterDAO($characterDB1, $characterDB2);
		$characterDAO->add($tyrion);
	}

}
