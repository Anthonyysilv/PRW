<?php
//$_GET obtem dado do formulário enviado via GET
//$_POST obtem dado do fomeulário enviado via POST
//nome entre '' deve ser igual ao name do input
//definido no formulário html
$opt = $_GET['opcao'];
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];

if($opt == 1){
    $calc = $n1+$n2;
    }
else if($opt == 2){
    $calc = $n1-$n2;
    }
else if($opt == 3){
    $calc = $n1/$n2;
    }
else if($opt == 4){
    $calc = $n1*$n2;
    }
    echo "O resultado do cálculo é: $calc";
    echo "<br>";
?>
<!-- codigo html do php-->
<a href='ex1.html'><button>Voltar</button></a>