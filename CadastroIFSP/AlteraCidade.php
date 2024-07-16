<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cidade</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center; /* Centraliza todo o conteúdo na horizontal */
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px; /* Espaço abaixo do formulário */
            text-align: left; /* Alinha o texto do formulário à esquerda */
        }

        fieldset {
            border: none;
            margin-bottom: 20px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-container {
            text-align: center; /* Centraliza os botões dentro do container */
            margin-top: 20px; /* Espaço acima dos botões */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form action="AlteraCidadeExe.php" method="post">
        <fieldset>
            <legend>Alterar Cidade</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" 
                        value="<?php echo $row['nome']?>">
            </div>
            <div>
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <option value="AC" 
                            <?php echo $row['estado'] == "AC" ? "selected" : "" ?>>AC</option>
                    <option value="AL" 
                            <?php echo $row['estado'] == "AL" ? "selected" : "" ?>>AL</option>
                    <option value="AP" 
                            <?php echo $row['estado'] == "AP" ? "selected" : "" ?>>AP</option>
                    <option value="AM" 
                            <?php echo $row['estado'] == "AM" ? "selected" : "" ?>>AM</option>
                    <option value="BA" 
                            <?php echo $row['estado'] == "BA" ? "selected" : "" ?>>BA</option>
                    <option value="CE" 
                            <?php echo $row['estado'] == "CE" ? "selected" : "" ?>>CE</option>
                    <option value="DF" 
                            <?php echo $row['estado'] == "DF" ? "selected" : "" ?>>DF</option>
                    <option value="ES" 
                            <?php echo $row['estado'] == "ES" ? "selected" : "" ?>>ES</option>
                    <option value="GO" 
                            <?php echo $row['estado'] == "GO" ? "selected" : "" ?>>GO</option>
                    <option value="MA" 
                            <?php echo $row['estado'] == "MA" ? "selected" : "" ?>>MA</option>
                    <option value="MT" 
                            <?php echo $row['estado'] == "MT" ? "selected" : "" ?>>MT</option>
                    <option value="MS" 
                            <?php echo $row['estado'] == "MS" ? "selected" : "" ?>>MS</option>
                    <option value="MG" 
                            <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>MG</option>
                    <option value="PA" 
                            <?php echo $row['estado'] == "PA" ? "selected" : "" ?>>PA</option>
                    <option value="PB" 
                            <?php echo $row['estado'] == "PB" ? "selected" : "" ?>>PB</option>
                    <option value="PR" 
                            <?php echo $row['estado'] == "PR" ? "selected" : "" ?>>PR</option>
                    <option value="PE" 
                            <?php echo $row['estado'] == "PE" ? "selected" : "" ?>>PE</option>
                    <option value="PI" 
                            <?php echo $row['estado'] == "PI" ? "selected" : "" ?>>PI</option>
                    <option value="RJ" 
                            <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>RJ</option>
                    <option value="RN" 
                            <?php echo $row['estado'] == "RN" ? "selected" : "" ?>>RN</option>
                    <option value="RS" 
                            <?php echo $row['estado'] == "RS" ? "selected" : "" ?>>RS</option>
                    <option value="RO" 
                            <?php echo $row['estado'] == "RO" ? "selected" : "" ?>>RO</option>
                    <option value="RR" 
                            <?php echo $row['estado'] == "RR" ? "selected" : "" ?>>RR</option>
                    <option value="SC" 
                            <?php echo $row['estado'] == "SC" ? "selected" : "" ?>>SC</option>
                    <option value="SP" 
                            <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>SP</option>
                    <option value="SE" 
                            <?php echo $row['estado'] == "SE" ? "selected" : "" ?>>SE</option>
                    <option value="TO" 
                            <?php echo $row['estado'] == "TO" ? "selected" : "" ?>>TO</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarCidade.php" class="btn">Consultar Cadastros</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>