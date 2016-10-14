<?php
/**
 * Description of GOT_Test
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\tests;
use PHPUnit_Framework_TestCase;
use DesignPatterns_GOT\src\factory\{CharacterInterface, CharacterFactory};

class CharacterFactoryTest extends PHPUnit_Framework_TestCase{
    
    /** @var CharacterFactory */
    protected $CharacterFactoryTest;
    
    public function setUp(){
        $this->CharacterFactoryTest = new CharacterFactory();
    }
    
    public function testCharacterFactoryCanBeStantiated(){
        $this->assertInstanceOf('DesignPatterns_GOT\src\factory\CharacterFactory', $this->CharacterFactoryTest);
    }
    
    /**
     * @dataProvider charactersProvider
     */
    public function testCanGetCharacter($race){
        $person = $this->CharacterFactoryTest->getCharacter($race, "character name");
        $this->assertInstanceOf('DesignPatterns_GOT\src\factory\CharacterInterface', $person);
    }
    
    /**
     * @expectedException Exception
     */
    public function testRaceMustBeOneOfCharacterFactoryVALID_RACESarrayConst(){
        $this->CharacterFactoryTest->getCharacter("invalid race", "invalid name");
    }
    
    /**
     * 
     * @return array
     */
    public function charactersProvider(){
        return [ ["Person"], ["Warg"], ["Witch"], ["Dragon"], ["Giant"], ["WhiteWalker"] ];
    }
    
}