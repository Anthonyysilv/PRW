<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Pessoa</title>
    <link rel="stylesheet" href="../css/deletaPessoa.css"><style>
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Deletar Pessoa</h1>
        <?php
            include('../includes/conexao.php');

            $id = $_GET['id'];

            // Verifica se existem registros na tabela `animal` relacionados à `pessoa`
            $sql_check = "SELECT COUNT(*) FROM animal WHERE id_pessoa = ?";
            $stmt_check = mysqli_prepare($con, $sql_check);
            mysqli_stmt_bind_param($stmt_check, "i", $id);
            mysqli_stmt_execute($stmt_check);
            mysqli_stmt_bind_result($stmt_check, $count);
            mysqli_stmt_fetch($stmt_check);
            mysqli_stmt_close($stmt_check);

            if ($count > 0) {
                echo '<div class="message error"><h2>Não é possível excluir esta pessoa porque há animais associados a ela.</h2></div>';
            } else {
                // Exclui a pessoa se não houver registros associados
                $sql_pessoa = "DELETE FROM pessoa WHERE id = ?";
                $stmt_pessoa = mysqli_prepare($con, $sql_pessoa);
                mysqli_stmt_bind_param($stmt_pessoa, "i", $id);
                mysqli_stmt_execute($stmt_pessoa);

                if (mysqli_stmt_affected_rows($stmt_pessoa) > 0) {
                    echo '<div class="message success"><h2>Dados deletados com sucesso!</h2></div>';
                } else {
                    echo '<div class="message error"><h2>Erro ao deletar</h2><p>' . mysqli_error($con) . '</p></div>';
                }

                mysqli_stmt_close($stmt_pessoa);
            }

            mysqli_close($con);
        ?>
        <!-- Botão para voltar à página anterior -->
        <button class="btn" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>