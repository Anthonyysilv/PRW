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
            $endereco = $_POST['endereco'];
            $bairro = $_POST['bairro'];
            $cep = $_POST['cep'];
            $cidade = $_POST['cidade'];

            echo "<h1>Dados das Pessoas</h1>";
            echo "Nome: $nome<br>";
            echo "Email: $email<br>";
            echo "Endereço: $endereco<br>";
            echo "Bairro: $bairro<br>";
            echo "Cep: $cep<br>";
            echo "Cidade: $cidade<br>";
            $sql = "INSERT INTO pessoa
                (nome, email, endereco, bairro, id_cidade, cep)";
            $sql .= "VALUES('".$nome."','".$email."','".$endereco."','".$bairro."',".$cidade.",'".$cep."')";
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
        <a href="../index.html" class="btn">Voltar à página inicial</a>
        <a href="CadastroPessoa.php" class="btn">Cadastrar outra Pessoa</a>
    </div>
</body>
</html>