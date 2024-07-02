<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cidades</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Cidade";
        //Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cidades</h1>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="CadastroCidade.html" class="btn">Cadastrar Nova Cidade</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
    <table align="center" border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
        <?php
            //Retorna todas as linhas da consulta
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>