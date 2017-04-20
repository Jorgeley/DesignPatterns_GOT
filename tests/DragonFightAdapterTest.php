<?php
/**
 * Description of DragonFightAdapterTest
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\tests;
use PHPUnit_Framework_TestCase;
use DesignPatterns_GOT\src\beans\Dragon;
use DesignPatterns_GOT\src\adapter\DragonFightAdapter;

class DragonFightAdapterTest extends PHPUnit_Framework_TestCase{
    
    /** @var Dragon */
    private $dragon;
    
    /** @var DragonFightAdapter */
    private $dragonFightAdapter;
    
    public function setUp(){
        $this->dragon = new Dragon("Drogo");
        $this->dragonFightAdapter = new DragonFightAdapter($this->dragon);
        $this->dragonFightAdapter->setDragon($this->dragon);
    }
    
    public function testDragonCanFight(){        
        $this->assertEquals(
                $this->dragonFightAdapter->fight(), 
                "Setting fire everywhere! Aaaaaaarrrrrrrrrrrrrrrggggghhhhh!!!\n"
                . "Eating everybody! Aaaaaaarrrrrrrrrrrrrrrggggghhhhh!!!\n"
                . "Smashing and beating! Aaaaaaarrrrrrrrrrrrrrrggggghhhhh!!!");
    }
    
}
