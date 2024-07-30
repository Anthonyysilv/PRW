<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="../css/CadastroPessoaExe.css">
</head>
<body>
<div class="container">
        <?php
            include('../includes/conexao.php');
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $ativo = $_POST['ativo'];
            $cidade = $_POST['cidade'];

            echo "<h1>Dados dos Clientes</h1>";
            echo "Nome: $nome<br>";
            echo "Email: $email<br>";
            echo "Senha: $senha<br>";
            echo "Situação: $ativo<br>";
            echo "Cidade: $cidade<br>";
            $sql = "INSERT INTO cliente
                (nome, email, senha, ativo, id_cidade)";
            $sql .= "VALUES('".$nome."','".$email."','".$senha."',".$ativo.",".$cidade.")";
            echo $sql;

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
        <a href="index.html" class="btn">Voltar à página inicial</a>
        <a href="CadastroCliente.php" class="btn">Cadastrar outro cliente</a>
    </div>
</body>
</html>