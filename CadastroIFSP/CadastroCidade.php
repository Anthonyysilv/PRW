<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cidade</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $estado = $_POST['estado'];
        echo "<h1>Dados da Cidade</h1>";
        echo "Nome: $nome<br>";
        echo "Estado: $estado<br>";
        //insert into Cidade(nome, estado)
        //values ('$nome', '$estado')
        $sql = "INSERT INTO Cidade (nome, estado)";
        $sql .= "VALUES('".$nome."', '".$estado."')";
        echo $sql;
        //Executa comandos no banco de dados
        $result = mysqli_query($con, $sql);
        if ($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>
</body>
</html>