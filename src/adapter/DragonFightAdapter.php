<?php
/**
 * Description of DragonFightAdapter
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\src\adapter;
use DesignPatterns_GOT\src\adapter\Fight;
use DesignPatterns_GOT\src\beans\Dragon;

class DragonFightAdapter implements Fight{
    
    /** @var Dragon */
    private $dragon;
    
    public function setDragon(Dragon $dragon){
        $this->dragon = $dragon;
    }
    
    /**
     * this is the method that 'adapts' the common fight method to the Dragon
     * class, because people (as you can see in the Person class) fight 
     * normally with weapons, but dragons not, that's the reason of this adapter
     */
    public function fight(): string{
        return  $this->dragon->setFire() ."\n".
                $this->dragon->eatPeople() ."\n".
                $this->dragon->smashAndBeat();
    }
    
}
