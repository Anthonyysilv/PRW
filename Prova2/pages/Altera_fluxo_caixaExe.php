<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Fluxo de Caixa</title>
</head>
<body>
    <?php
        include('../includes/conexao.php');
        $id = $_POST['id'];


        $data = $_POST['data'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];

        echo "<h1>Alteração de dados</h1>";
        echo "<p>Código: $id</p>";
        $sql = "update fluxo_caixa set 
            data = '$data',
            tipo = '$tipo',
            valor = '$valor',
            historico = '$historico',
            cheque = '$cheque'
            where id = $id";

        $result = mysqli_query($con, $sql);
        if ($result)
            echo "Dados editados com sucesso!<br>";
        else
            echo "Erro ao editar dados: " . $mysqli_error($con) . "!";
    ?>
    <button><a href="../index.html">Tela inicial</a></button>
</body>
</html>