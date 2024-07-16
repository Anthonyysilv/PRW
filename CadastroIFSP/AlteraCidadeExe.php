<?php
    include('includes/conexao.php');
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
</head>
<body>
    <?php
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Estado: $estado</p>";
        $sql = "UPDATE cidade SET 
                    nome = '$nome',
                    estado = '$estado' 
                WHERE id = $id";
        $result  = mysqli_query($con, $sql);
        if ($result)
            echo "Dados atualizados";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
</body>
</html>