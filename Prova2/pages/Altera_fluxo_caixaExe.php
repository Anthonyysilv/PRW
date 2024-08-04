<?php
    include('../includes/conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/AlterarPessoaExe.css">
</head>
<body>
    <div class="container">
        <h1>Alteração de Dados</h1>
        <?php
            echo "<p>Id: $id</p>";
            echo "<p>Data: $data</p>";
            echo "<p>Tipo: $tipo</p>";
            echo "<p>Valor: $valor</p>";
            echo "<p>Histórico: $historico</p>";
            echo "<p>Cheque: $cheque</p>";

            $sql = "UPDATE fluxo_caixa SET 
                        data = '$data',
                        tipo = '$tipo',
                        valor = '$valor',
                        historico = '$historico',
                        cheque = '$cheque',
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