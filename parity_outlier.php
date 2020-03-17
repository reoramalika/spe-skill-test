<?php
    function parity($arr){
        $oddID = null;
        $evenID = null;
        $isOddAllow=true;
        $isEvenAllow=true;
        foreach ($arr as $key => $val) {
            if($val%2==0 && $isEvenAllow){
                if($evenID==null){
                    $evenID = $val;
                }
                else{
                    $isEvenAllow=false;
                    $evenID = null;
                }
            }
            
            if($val%2==1 && $isOddAllow){
                if($oddID==null){
                    $oddID = $val;
                }
                else{
                    $isOddAllow=false;
                    $oddID = null;
                }
            }

            if(!$isEvenAllow && !$isOddAllow){
                return false;
            }
        }

        if($isEvenAllow){
            return $evenID;
        }
        elseif ($isOddAllow) {
            return $oddID;
        }
        else{
            return null;
        }

    }

    var_dump(parity([2, 4, 0, 100, 4, 11, 2602, 36]));
    var_dump(parity([160, 3, 1719, 19, 11, 13, -21]));
    var_dump(parity([11, 13, 15, 19, 9, 13, -21]));