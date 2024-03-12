<?php 
#10% de erro, resolverei depois
    $count = 0;
    for ($i = 1; $i <= 5; $i++)
    {
	    $num = (int) readline ();
	    if ($valor % 2 == 0)
	    {
	        $count++;
	    }
    }
    echo "{$count} valores pares";
?>
