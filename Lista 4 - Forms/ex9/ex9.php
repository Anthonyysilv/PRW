<?php
$nome =$_GET['nome'];
$horario = $_GET['horario'];

list($hora, $minuto) = explode(':', $horario);

if ($hora < 12) {
    echo "Bom dia $nome!<br>";
} elseif ($hora < 18) {
    echo "Boa tarde $nome!<br>";
} else {
    echo "Boa noite $nome!<br>";
}
echo "São $hora e $minuto minutos.<br>"
?>
<a href='ex9.html'><button>Voltar</button></a>