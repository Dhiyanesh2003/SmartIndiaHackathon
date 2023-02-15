<?php

    function decryption($input){
        $encrypted=$input;
        $a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*()_-+={}[]:;<'>,.?/| ";
        $y=0;
        $x=substr($encrypted,0,1);
        $decrypted="";
        $z="";
        for($i=0;$i<strlen($a);$i++){
            if(substr($encrypted,0,1)==substr($a,$i,1)){
                $y=$i;
            }
        }
        for($i=$y;$i<91;$i++){
            $z=$z.substr($a,$i,1);
        }
        for($j=0;$j<$y;$j++){
            $z=$z.substr($a,$j,1);
        }
        for($j=1;$j<strlen($encrypted);$j++){
            for($k=0;$k<strlen($z);$k++){
                if(substr($encrypted,$j,1)==substr($z,$k,1)){
                    $decrypted=$decrypted.substr($a,$k,1);
                }
            }
        }
        return $decrypted;
    }

?>