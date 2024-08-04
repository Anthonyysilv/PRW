<?php
include('../includes/conexao.php');
$id = $_GET['id'];
$sql = "select * from fluxo_caixa where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Fluxo de Caixa</title>
    <link rel="stylesheet" href="../css/Cadastro_fluxo_caixa.css">
</head>

<body>
    <div>
        <div>
            <h1>Altera Fluxo de Caixa</h1>
            <form action="Altera_fluxo_caixaExe.php" method="post">
                <input name="id" type="hidden" value="<?php echo $row['id'] ?>">
                <div>
                    <label for="data">Data: </label>
                    <input type="date" name="data" id="data" class="form-control" value="<?php echo $row['data'] ?>">
                </div>

                <div>
                    <label for="tipo">Tipo: </label>
                    <input type="radio" name="tipo" value="entrada" required <?php if($row['tipo'] == 'entrada'){ echo "checked"; } else { echo "";} ?>>Entrada
                    <input type="radio" name="tipo" value="saida" required <?php if($row['tipo'] == 'saida'){ echo "checked"; } else { echo "";} ?>>Saída
                </div>


                <div>
                    <label for="valor">Valor: </label>
                    <input type="number" value="<?php echo $row['valor'] ?>" name="valor" id="valor" required maxlength="13" class="form-control" step=".01">
                </div>
                <div>
                    <label for="historico">Histórico: </label>
                    <input type="text" name="historico" value="<?php echo $row['historico'] ?>" id="historico" required maxlength="150" class="form-control">
                </div>
                <div>
                    <label for="cheque">Cheque: </label>
                    <select class="form-control" name="cheque">
                        <option value="sim" <?php if($row['cheque'] == 'sim'){ echo "selected"; } else { echo "";} ?>>Sim</option>
                        <option value="nao" <?php if($row['cheque'] == 'nao'){ echo "selected"; } else { echo "";} ?>>Não</option>
                    </select>
                </div>
                <input type="submit" value="Enviar" class="buttom">
                <button><a href="../index.html">Voltar à Home</a></button>
            </form>
        </div>
    </div>
</body>

</html>