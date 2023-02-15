<?php
    function encryption($input){
        $c=$input;
        $ab=rand(0,90);
        $a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*()_-+={}[]:;<'>,.?/| ";
        $b="";
        $encrypted=substr($a,$ab,1);
        for($i=$ab;$i<91;$i++){
            $b=$b.substr($a,$i,1);
        }
        for($j=0;$j<$ab;$j++){
            $b=$b.substr($a,$j,1);
        }
        for($k=0;$k<strlen($c);$k++){
            for($i=0;$i<strlen($a);$i++){
                if(substr($c,$k,1)==(substr($a,$i,1))){
                    $encrypted=$encrypted.substr($b,$i,1);
                }
            }
        }
        return $encrypted;
    }
?>