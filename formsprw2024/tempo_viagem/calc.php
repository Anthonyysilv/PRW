<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3107 Beecrowd</title>
</head>
<body>
    <?php
        $ve = $_POST['ve'];
        $km = $_POST['km'];
        $co = $_POST['co'];
        
        $ho = number_format($km/$ve, 2, ".", " ");
        $comb = number_format($km/$co, 2, ".", " ");
        
        echo "Total horas: $ho\n";
        echo "Total combustivel: $comb\n";
    ?>
</body>
</html>