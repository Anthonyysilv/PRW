<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Pessoas</title>
    <link rel="stylesheet" href="../css/ListarPessoa.css">
</head>
<body>
<?php
        include('../includes/conexao.php');
        $sql = "SELECT pessoa.id, pessoa.nome nomepessoa, pessoa.email, pessoa.endereco, pessoa.bairro, pessoa.cep, cid.nome nomecidade, cid.estado 
                FROM Pessoa pessoa 
                LEFT JOIN cidade cid on cid.id = cli.id_cidade";
        //Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Clientes</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="CadastroPessoa.php" class="btn">Cadastrar Pessoa</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
    <table align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php //mysqli_fetch_array lê uma linha opr vez
            //Retorna todas as linhas da consulta
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomecliente']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['cep']."</td>";
                echo "<td>".$row['nomecidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaCliente.php?id=".$row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>