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
            if ($tipo == 'entrada') {
                $sql = "SELECT sum(valor) valor FROM fluxo_caixa WHERE tipo = 'entrada'";
            } else if ($tipo == 'saida') {
                $sql="SELECT sum(valor) valor FROM fluxo_caixa WHERE tipo = 'saida'";
            } else if ($tipo == 'saldo') {
                $sql="SELECT sum(case when tipo = 'entrada' then valor else 0 end) -
                sum(case when tipo = 'saida' then valor else 0 end) as valor FROM fluxo_caixa";
            }
        ?>
        <a href="../index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>