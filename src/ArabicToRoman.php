<?php

namespace App;

class ArabicToRoman
{
    /**
     * Receive an arabic number and return a string with its roman counterpart
     *
     * @param int $arabicNumber Arabic number to be transformed (e.g. 121)
     *
     * @return string The roman number equivalent (e.g. CXXI)
     */
    public static function transform(int $num): ?string
    {

        if($num < 1) {
            return null;
        }

        $romanTableValue = [["","I","II","III","IV","V","VI","VII","VIII","IX"],        
        ["","X","XX","XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"],   
        ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM"],
        ["","M","MM","MMM"]];

        $romanNumber = "";
    
        foreach (str_split(strrev(strval($num))) as $i => $e) {
            $romanNumber = $romanTableValue[$i][intval($e)] . $romanNumber;
        }

        return $romanNumber;
        
    }
}