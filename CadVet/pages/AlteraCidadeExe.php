<?php
    include('../includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/AlteraCidadeExe.css">
</head>
<body>
    <div class="container">
        <h1>Alteração de Dados</h1>
        <?php
            echo "<p>Id: $id</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Estado: $estado</p>";
            $sql = "UPDATE cidade SET 
                        nome_cidade = '$nome',
                        estado = '$estado' 
                    WHERE id = $id";
            $result  = mysqli_query($con, $sql);
            if ($result) {
                echo '<div class="message success">Dados atualizados com sucesso!</div>';
            } else {
                echo '<div class="message error">Erro ao atualizar dados! ' . mysqli_error($con) . '</div>';
            }
        ?>
        <!-- Botão para voltar à página anterior -->
        <button class="btn" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>