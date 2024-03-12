<?php
  list ($h_inicial, $h_final) = explode (" ", readline());
  if ($h_inicial < $h_final)
  {
    $ans = $h_final - $h_inicial;
    echo "O JOGO DUROU {$ans} HORA(S)\n";
  }
  else{
    $ans = (24 - $h_inicial) + $h_final;
    echo "O JOGO DUROU {$ans} HORA(S)\n";
  }
?>