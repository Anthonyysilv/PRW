<?php
    $Num = trim(intval(fgets(STDIN)));
    while($Num>0)
    {
        $en = trim(fgets(STDIN));
        $tam = strlen($en);
        
        for($i=0; $i<$tam; $i++)
        {
            if($en[$i]=='P'){
            $en[$i] = 'B';
            }else if($en[$i]=='F'){
                $en[$i] = 'V';
            }else if($en[$i] == 'T'){
                $en[$i] = 'D';
            }else if($en[$i]== 'R'){
                $en[$i] = 'L';
            }else if($en[$i] == 'F'){
                $en[$i] = 'S';
            }else if($en[$i]== 'J'){
                $en[$i] = 'Z';
            }else if($en[$i]== 'X'){
                $en[$i] = 'S';
            }else{
                continue;
            }
        }
        $str = explode(' ', $en);
        $strI = array_reverse($str);
        $strF = implode(' ', $strI);
        echo $strF . PHP_EOL;
        $Num--;
    }
?>