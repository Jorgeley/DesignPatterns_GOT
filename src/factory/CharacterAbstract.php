<?php
/**
 * Description of CharacterAbstract
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\src\factory;
use DesignPatterns_GOT\src\factory\CharacterInterface;

abstract class CharacterAbstract implements CharacterInterface{
    protected $name;
    
    public function __construct(string $name){
        $this->name = $name;
    }
    
    public function getName(): string{
        return $this->name;
    }

    
}