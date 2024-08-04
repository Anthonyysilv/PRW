<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Fluxo de Caixa</title>
</head>
<body>
    <div class="container">
        <h1>Deletar Fluxo de Caixa</h1>
        <?php
            include('../includes/conexao.php');
            $id = $_GET['id'];
            
            // Preparando a consulta SQL com prepared statement
            $sql = "DELETE FROM fluxo_caixa WHERE id = ?";
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