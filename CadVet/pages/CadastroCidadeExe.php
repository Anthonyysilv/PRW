<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cidade</title>
    <link rel="stylesheet" href="../css/CadastroCidadeExe.css">
</head>
<body>
    <div class="container">
        <?php
            include('../includes/conexao.php');
            $nome = $_POST['nome'];
            $estado = $_POST['estado'];

            echo "<h1>Dados da Cidade</h1>";
            echo "Nome: $nome<br>";
            echo "Estado: $estado<br>";

            // Monta a query SQL para inserir os dados na tabela
            $sql = "INSERT INTO Cidade (nome_cidade, estado) VALUES ('$nome', '$estado')";

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
        <a href="CadastroCidade.html" class="btn">Cadastrar outra cidade</a>
    </div>
</body>
</html>