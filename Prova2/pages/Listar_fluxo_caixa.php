<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Fluxo do Caixa</title>
    <link rel="stylesheet" href="../css/ListarPessoa.css">
</head>
<body>
<?php
    include('../includes/conexao.php');

    $sql = "SELECT * FROM fluxo_caixa";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Erro na consulta: " . mysqli_error($con));
    }
?>
    <h1>Consulta de fluxo de caixa</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="../index.html" class="btn">Voltar à página inicial</a>
    </div>
    <table align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                $tipo = $row['tipo'] == 1 ? "Entrada":"Saída";
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$tipo."</td>";
                echo "<td>".$row['valor']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaAnimal.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>