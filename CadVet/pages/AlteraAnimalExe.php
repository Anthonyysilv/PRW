<?php
    include('../includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data_nascimento'];
    $castrado = $_POST['castrado'];
    $pessoa = $_POST['pessoa'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/AlterarPessoaExe.css">
</head>
<body>
    <div class="container">
        <h1>Alteração de Dados</h1>
        <?php
            echo "<p>Id: $id</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Espécie: $especie</p>";
            echo "<p>Raça: $raca</p>";
            echo "<p>Data de Nascimento: $data_nascimento</p>";
            echo "<p>Dono(a): $pessoa</p>";
            // Calcula a idade se a data de nascimento estiver preenchida
            if ($data_nascimento) {
                $dataNascimento = new DateTime($data_nascimento);
                $dataAtual = new DateTime();
                $idadeIntervalo = $dataAtual->diff($dataNascimento);
                $idade = $idadeIntervalo->y;
            } else {
                $idade = null; // Pode definir como NULL ou deixar em branco
            }
            $sql = "UPDATE animal SET 
                        nome = '$nome',
                        especie = '$especie',
                        raca = '$raca',
                        data_nascimento = '$data_nascimento',
                        idade = '$idade',
                        id_pessoa = '$pessoa'
                    WHERE id = $id";
            $result  = mysqli_query($con, $sql);
            if ($result) {
                echo '<div class="message success">Dados atualizados com sucesso!</div>';
            } else {
                echo '<div class="message error">Erro ao atualizar dados! ' . mysqli_error($con) . '</div>';
            }
        ?>
        <!-- Botão para voltar à página anterior -->
        <button class="btn" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>