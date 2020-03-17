<?php
    function narcissistic($number){
        $strNumber = strval($number);
        $digitCount = strlen($strNumber);

        $total=0;
        for ($i=0; $i < $digitCount; $i++) { 
            $total+=pow(intval($strNumber[$i]),$digitCount);
        }

        if($total == intval($strNumber)){
            return true;
        }
        else{
            return false;
        }
    }

    var_dump(narcissistic(153));
    var_dump(narcissistic(111));