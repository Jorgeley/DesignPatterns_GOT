<?php
/**
 * Description of IronThrone
 *
 * @author Jorgeley <jorgeley@gmail.com>
 */

namespace DesignPatterns_GOT\src\singleton;
use DeepCopy\Exception\CloneException;

class IronThroneSingleton{
    
    private static $IronThroneSingleton;

    /**
     * no one can access the constructor
     */
    private function __construct() {
        
    }
    
    /**
     * this is the singleton method that garantee one unique instance of IronThrone class
     * @return IronThrone
     */
    public static function getIronThroneSingleton(): IronThroneSingleton{
        if ( self::$IronThroneSingleton == null )
            self::$IronThroneSingleton = new IronThroneSingleton();
        return self::$IronThroneSingleton;
    }
    
    /**
     * not even clone
     * @throws CloneException
     */
    public function __clone(){
        throw new CloneException();
    }
    
}