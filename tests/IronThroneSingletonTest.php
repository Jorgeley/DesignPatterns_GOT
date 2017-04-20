<?php
/**
 * Description of IronThroneSingletonTest
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\tests;
use PHPUnit_Framework_TestCase;
use DesignPatterns_GOT\src\singleton\IronThroneSingleton;

class IronThroneSingletonTest extends PHPUnit_Framework_TestCase{
    
    /** @var IronThroneSingletonTest */
    private $IronThroneSingletonTest;
    
    public function setUp(){
        $this->IronThroneSingletonTest = IronThroneSingleton::getIronThroneSingleton();
    }
    
    public function testIronThroneIsInstantiated(){
        $this->assertInstanceOf('DesignPatterns_GOT\src\singleton\IronThroneSingleton', $this->IronThroneSingletonTest);
    }
    
    public function testIronThroneInstanceIsUnique(){
        $ironThrone = IronThroneSingleton::getIronThroneSingleton();
        $this->assertEquals($ironThrone, $this->IronThroneSingletonTest);
    }
    
    /**
     * @expectedException Error
     */
    public function testIronThroneConstructorCannotBeUsed(){
        $ironThrone = new IronThroneSingleton();
    }
    
    /**
     * @expectedException Error
     */
    public function testIronThroneCannotBeCloned(){
        IronThroneSingleton::__clone();
        IronThroneSingleton::getIronThroneSingleton()->__clone();
        $this->IronThroneSingletonTest->__clone();
    }
    
}