<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Animais</title>
    <link rel="stylesheet" href="../css/ListarPessoa.css">
</head>
<body>
<?php
    include('../includes/conexao.php');

    $sql = "SELECT animal.id, animal.nome nomeanimal, animal.especie, animal.raca, animal.data_nascimento, animal.idade, animal.castrado, pes.nome nomepessoa 
            FROM Animal animal 
            LEFT JOIN pessoa pes ON pes.id = animal.id_pessoa";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Erro na consulta: " . mysqli_error($con));
    }
?>
    <h1>Consulta de Animais</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="CadastroAnimal.php" class="btn">Cadastrar Animal</a>
        <a href="../index.html" class="btn">Voltar à página inicial</a>
    </div>
    <table align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Data de Nacimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Dono(a)</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                $castrado = $row['castrado'] == 1 ? "Sim":"Não";
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomeanimal']."</td>";
                echo "<td>".$row['especie']."</td>";
                echo "<td>".$row['raca']."</td>";
                echo "<td>".$row['data_nascimento']."</td>";
                echo "<td>".$row['idade']."</td>";
                echo "<td>".$castrado."</td>";
                echo "<td>".$row['nomepessoa']."</td>";
                echo "<td><a href='AlteraAnimal.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaAnimal.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>