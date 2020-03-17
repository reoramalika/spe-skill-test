<?php
    function findNeedle($arr,$needle){
        foreach ($arr as $key => $val) {
            if($val==$needle){
                return $key;
            }
        }
        return -1;
    }

    var_dump(findNeedle(["red", "blue", "yellow", "black", "grey"], "blue"));
    var_dump(findNeedle(["red", "blue", "yellow", "black", "grey"], "grey"));