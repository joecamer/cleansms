<?php

namespace Undjike\CleanSmsPhp;

/**
 * Some static helpful fonctions
 */
class Helpers {


    /**
     * Check if an array contains only string elements
     * @param Array $arr 
     * @return bool
     */
    public static function containsString(Array $arr) : bool {
        $response = true;

        foreach ($arr as $value){
            $response = is_string($value);
            if (!$response) break;
        } 

        return $response;
    }

}