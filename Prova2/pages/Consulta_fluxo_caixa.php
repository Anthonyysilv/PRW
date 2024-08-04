<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Fluxo do Caixa</title>
</head>
<body>
<div class="container">
        <?php
            include('../includes/conexao.php');
            $tipo = $_POST['tipo'];
            if ($tipo == '1') {
                $sql = "SELECT sum(valor) valor FROM fluxo_caixa WHERE tipo = '1'";
            } else if ($tipo == '0') {
                $sql="SELECT sum(valor) valor FROM fluxo_caixa WHERE tipo = '0'";
            } else if ($tipo == 'saldo') {
                $sql="SELECT sum(case when tipo = '1' then valor else 0 end) -
                sum(case when tipo = '0' then valor else 0 end) as valor FROM fluxo_caixa";
            }
        ?>
        <a href="../index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>