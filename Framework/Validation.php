<?php

namespace Framework;

class Validation {
    /**
     * Validate a string
     * 
     * @param string $value
     * @param int $min
     * @param int $max
     * @return string
     */
    public static function string($value, $min = 1,
    $max = INF) {
        if(is_string($value)){
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max;
        }

        return false;
    }

    /**
     * Validate email
     * 
     * @param string $value
     * @return mixed
     */
    public static function email($value) {
        $value = trim($value);

        return filter_var($value, FILTER_VALIDATE_EMAIL);
        
    }

}