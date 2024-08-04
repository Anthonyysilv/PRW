<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fluxo do Caixa</title>
    <link rel="stylesheet" href="../css/Cadastro_fluxo_caixaPHP.css">
</head>
<body>
<div class="container">
        <?php
            include('../includes/conexao.php');
            $data = $_POST['data'] ?? "";
            $tipo = $_POST['tipo'];
            $valor = $_POST['valor'];
            $historico = $_POST['historico'];
            $cheque = $_POST['cheque'];

            echo "<h1>Dados do Cadastro</h1>";
            echo "Data: $data<br>";
            echo "Tipo: $tipo<br>";
            echo "Valor: $valor<br>";
            echo "Histórico: $historico<br>";
            echo "Cheque: $cheque<br>";

            $sql = "INSERT INTO fluxo_caixa
                (data, tipo, valor, historico, cheque)";
            $sql .= "VALUES('".$data."',".$tipo.",'".$valor."','".$historico."','".$cheque."')";
            //echo $sql;

            // Executa a query no banco de dados
            $result = mysqli_query($con, $sql);

            // Verifica se a inserção foi bem-sucedida
            if ($result) {
                echo "<h2>Dados cadastrados com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar!</h2>";
                echo "<p class='error-message'>" . mysqli_error($con) . "</p>";
            }

            // Fecha a conexão com o banco de dados
            mysqli_close($con);
        ?>
        <a href="../index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>