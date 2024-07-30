<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cidades</title>
    <link rel="stylesheet" href="../css/ListarCidade.css"> <!-- Vincula o CSS -->
</head>
<body>
    <?php
        include('../includes/conexao.php');

        $sql = "SELECT * FROM Cidade";
        // Executa a consulta
        $result = mysqli_query($con, $sql);

        if (!$result) {
            die("Erro na consulta: " . mysqli_error($con));
        }
    ?>
    <h1>Consulta de Cidades</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="CadastroCidade.html" class="btn">Cadastrar Nova Cidade</a>
        <a href="../index.html" class="btn">Voltar à página inicial</a>
    </div>
    <table align="center">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome_cidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>