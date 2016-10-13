<?php
/**
 * Description of GOT_Test
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */
namespace DesignPatterns_GOT\tests;

use PHPUnit_Framework_TestCase;
use DesignPatterns_GOT\src\{Character, CharacterFactory};

class GOT_Test extends PHPUnit_Framework_TestCase{
    protected $GOT_Test;
    
    public function setUp(){
        $this->GOT_Test = new CharacterFactory();
    }
    
    public function testGOTFactoryCanBeStantiated(){
        $this->assertInstanceOf('DesignPatterns_GOT\src\CharacterFactory', $this->GOT_Test);
    }
    
    /**
     * @dataProvider charactersProvider
     */
    public function testCanGetCharacter($character){
        $person = $this->GOT_Test->getCharacter($character);
        $this->assertInstanceOf('DesignPatterns_GOT\src\Character', $person);
    }
    
    public function charactersProvider(){
        return [ ["Person"], ["Warg"], ["Witch"], ["Dragon"], ["Giant"], ["WhiteWalker"] ];
    }
    
}