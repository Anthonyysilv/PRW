<?php
    $name = $_GET['name'];
    $age = $_GET['age'];
    $sal = $_GET['sal'];
    echo "Nome: " . $name . "<br>";
    echo "Idade: " . $age . "<br>";
    echo "Salário: " . $sal . "<br>";
    $inss;
    $irpf; #Imposto de Renda
    if ($sal <= 1412)
    {
        $inss = $sal * 0.075;
        echo "O valor do desconto INSS é de: R$" . $inss;
    } else if ($sal <= 2666.68)
    {
        $inss = $sal * 0.09;
        echo "O valor do desconto INSS é de: R$" . $inss;
    } else if ($sal <= 4000.03)
    {
        $inss = $sal * 0.12;
        echo "O valor do desconto INSS é de: R$" . $inss;
    } else if ($sal <= 7786.02)
    {
        $inss = $sal * 0.14;
        echo "O valor do desconto INSS é de: R$" . $inss;
    } else
    {
        echo "Assalariado ou não foi possível calcular o desconto do INSS";
    }
    if ($sal <= 2826.65)
    {
        $irpf = ($sal - $inss) * 0.075;
        echo "O valor do IRPF é de: R$" . $irpf;
    } else if ($sal <= 3751.05)
    {
        $irpf = ($sal - $inss) * 0.15;
        echo "O valor do IRPF é de: R$" . $irpf;
    } else if ($sal <= 4664.68)
    {
        $irpf = ($sal - $inss) * 0.225;
        echo "O valor do IRPF é de: R$" . $irpf;
    } else if ($sal > 4664.68)
    {
        $irpf = ($sal - $inss) * 0.275;
        echo "O valor do IRPF é de: R$" . $irpf;
    } else
    {
        echo "Isento ou não foi possível calcular";
    }
    echo '<a href="http://localhost/PRW/Exemplo_PHP/form.html"> Voltar</a>';
?>