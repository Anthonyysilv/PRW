<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cidade</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: left;
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff;
        }

        h2 {
            margin-top: 20px;
            color: #28a745;
        }

        .error-message {
            margin-top: 20px;
            color: #dc3545;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            include('includes/conexao.php');
            $nome = $_POST['nome'];
            $estado = $_POST['estado'];

            echo "<h1>Dados da Cidade</h1>";
            echo "Nome: $nome<br>";
            echo "Estado: $estado<br>";

            // Monta a query SQL para inserir os dados na tabela
            $sql = "INSERT INTO Cidade (nome, estado) VALUES ('$nome', '$estado')";

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
    </div>
</body>
</html>