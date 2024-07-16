<?php
    
    while(true){
        $Num = readline();
        if($Num ==0){
            break;
        }
        
        $entr1 = explode(' ', readline());
        $n = $entr1[0];
        $m = $entr1[1];
        for($i=0; $i<$Num; $i++){

            $entr2 = explode(' ', readline());
            $x = $entr2[0];
            $y = $entr2[1];
            $l='';
            if($y > $m) {
                $l = trim("N");
            }if($y < $m) {
                $l = trim("S");
            }
            if($x > $n) {
                $l .= trim("E");
            }if($x < $n) {
                $l .= trim("O");
            }
            if(($x == $n) || ($y == $m)) {
                $l = trim("divisa");
            }
            echo $l . PHP_EOL;
        }
    }
?>