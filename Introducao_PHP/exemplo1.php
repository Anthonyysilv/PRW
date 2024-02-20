<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 PHP</title>
    <!--Integração do CSS/HTML com o PHP-->
    <style>
        div{
            background-color: red;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <h1>Anthony</h1>
    <?php
        $nota = 10.5;
        echo "<div>Nota final: $nota</div>";
    ?>
</body>
</html>