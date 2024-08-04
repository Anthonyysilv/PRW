<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Fluxo</title>
</head>
<body>
<?php
    include("../includes/conexao.php");
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    $sql = "select * from fluxo_caixa";

    echo "<h1>Dados</h1>";
    echo "Data: $data <br>";
    echo "Tipo: $tipo <br>";
    echo "Valor: $valor <br>";
    echo "Histórico: $historico <br>";
    echo "Cheque: $cheque <br>";
    
    $sql = "insert into fluxo_caixa (data,tipo,valor,historico,cheque)";

    $sql .= "values ('".$data."','".$tipo."', '".$valor."', '".$historico."','".$cheque."')";

    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
    
?>
    <br>
    <button><a href="../index.html">Voltar ao inicio</a></button>
</body>
</html>