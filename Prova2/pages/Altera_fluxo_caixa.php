<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fluxo de Caixa</title>
    <link rel="stylesheet" href="../css/Cadastro_fluxo_caixa.css">
</head>
<body>
    <?php
        include('../includes/conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM fluxo_caixa WHERE id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="Altera_fluxo_caixaExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Fluxo de Caixa</legend>
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="number" name="id" id="id" value="<?php echo $row['id']?>>
            </div>
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" nome="data" id="data" value="<?php echo $row['data']?>">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="radio" name="tipo" id="tipo" value="1" required> Entrada
                <input type="radio" name="tipo" id="tipo" value="0" checked required> Saída
            </div>
            
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" inputmode="decimal" 
                    id="valor" name="valor" 
                    pattern="[0-9]*[.,]?[0-9]*" value="<?php echo $row['valor']?>"> 
            </div>
            <div class="form-group">
                <label for="historico">Histórico:</label>
                <input type="text" name="historico" id="historico" value="<?php echo $row['historico']?>">
            </div>
            <div class="form-group">
                <label for="cheque">Cheque:</label>
                <select name="cheque" id="cheque">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="button-container">
                <button type="submit" class="btn">Enviar</button>
                <button><a href="../index.html">Voltar</a></button>
            </div>
        </fieldset>
    </form>
</body>
</html>