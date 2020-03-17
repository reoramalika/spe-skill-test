<?php
    function blueOcean($arr1, $arr2){
        $result=[];
        foreach ($arr1 as $val) {
            if(array_search($val,$arr2)===false){
                array_push($result,$val);
            }
        }

        return $result;
    }

    var_dump(blueOcean([1,2,3,4,6,10], [1]));
    var_dump(blueOcean([1,5,5,5,5,3], [5]));