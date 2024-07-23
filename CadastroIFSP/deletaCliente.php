<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cidade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Cinza claro de fundo */
            color: #333; /* Cor do texto */
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #fff; /* Fundo branco */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Sombra suave */
            margin: 20px auto;
        }
        h1 {
            color: #333; /* Cor do título */
            border-bottom: 2px solid #333; /* Linha divisória */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        h2 {
            color: #333; /* Cor do subtítulo */
            margin-top: 20px;
        }
        .message {
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .success {
            background-color: #4CAF50; /* Verde */
            color: white;
        }
        .error {
            background-color: #f44336; /* Vermelho */
            color: white;
        }
        .btn {
            background-color: #2196F3; /* Azul */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0b7dda; /* Azul mais escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Deletar Cliente</h1>
        <?php
            include('includes/conexao.php');
            $id = $_GET['id'];
            
            // Preparando a consulta SQL com prepared statement
            $sql = "DELETE FROM cliente WHERE id = ?";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo '<div class="message success"><h2>Dados deletados com sucesso!</h2></div>';
            } else {
                echo '<div class="message error"><h2>Erro ao deletar</h2><p>' . mysqli_error($con) . '</p></div>';
            }
            
            mysqli_stmt_close($stmt);
            mysqli_close($con);
        ?>
        <!-- Botão para voltar à página anterior -->
        <button class="btn" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>