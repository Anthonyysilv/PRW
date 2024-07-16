<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center; /* Centraliza todo o conteúdo na horizontal */
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px; /* Espaço abaixo do formulário */
            text-align: left; /* Alinha o texto do formulário à esquerda */
        }

        fieldset {
            border: none;
            margin-bottom: 20px;
        }

        legend {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff; /* Azul */
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333; /* Cor mais escura para os labels */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        select {
            width: calc(100% - 24px); /* Largura total menos o padding */
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            outline: none; /* Remove o contorno ao focar */
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #007bff; /* Azul ao focar */
        }

        button {
            padding: 12px 24px;
            background-color: #007bff; /* Azul */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
        }

        .btn-container {
            text-align: center; /* Centraliza os botões dentro do container */
            margin-top: 20px; /* Espaço acima dos botões */
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745; /* Verde */
            border-radius: 4px;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #218838; /* Verde mais escuro ao passar o mouse */
        }

        .btn-secondary {
            background-color: #dc3545; /* Vermelho */
        }

        .btn-secondary:hover {
            background-color: #c82333; /* Vermelho mais escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM cliente WHERE id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="AlteraClienteExe.php" method="post">
        <fieldset>
            <legend>Alterar Cliente</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email']?>" required>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>" required>
                </div>
                <div style="width: 48%;">
                    <label for="cidade">Id Cidade</label>
                    <input type="number" name="id_cidade" id="cidade" value="<?php echo $row['id_cidade']?>" required>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarCliente.php" class="btn btn-secondary">Consultar Cadastros</a>
        <a href="index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>