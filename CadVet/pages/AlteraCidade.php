<?php
    include('../includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cidade</title>
    <link rel="stylesheet" href="../css/AlteraCidade.css"> <!-- Vincula o CSS -->
</head>
<body>
    <form action="AlteraCidadeExe.php" method="post">
        <fieldset>
            <legend>Alterar Cidade</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($row['nome_cidade']); ?>">
            </div>
            <div>
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
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarCidade.php" class="btn">Consultar Cadastros</a>
        <a href="../index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>