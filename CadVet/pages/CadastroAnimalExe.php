<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="../css/CadastroAnimalExe.css">
</head>
<body>
<div class="container">
        <?php
            include('../includes/conexao.php');
            //Upload foto
            $nome_foto = "";
            if(file_exists($_FILES['foto']['tmp_name'])) { //$_FILES verifica que a foto foi selecionada, igual o $_POST
                $pasta_destino = '../img/';
                $extensao = strtolower(substr($_FILES['foto']['name'],-4)); //-4 para pegar os últimos quatro digitos no nome do arquivo
                $nome_foto = $pasta_destino . date('Ymd-His'); //ano, mes e dia - hora, minuto e segundos
                move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
            }
            //Fim do upload da foto
            // Recebe a data de nascimento do formulário
            $data_nascimento = $_POST['data_nascimento'] ?? '';
            $nome = $_POST['nome'];
            $especie = $_POST['especie'];
            $raca = $_POST['raca'];
            $castrado = $_POST['castrado'];
            $pessoa = $_POST['pessoa'];

            echo "<h1>Dados do Animal</h1>";
            echo "Nome: $nome<br>";
            echo "Espécie: $especie<br>";
            echo "Raça: $raca<br>";
            echo "Castrado: $castrado<br>";
            echo "Data de Nascimento: $data_nascimento<br>";
            echo "Pessoa: $pessoa<br>";

            // Calcula a idade se a data de nascimento estiver preenchida
            if ($data_nascimento) {
                $dataNascimento = new DateTime($data_nascimento);
                $dataAtual = new DateTime();
                $idadeIntervalo = $dataAtual->diff($dataNascimento);
                $idade = $idadeIntervalo->y;
            } else {
                $idade = null; // Pode definir como NULL ou deixar em branco
            }
            $sql = "INSERT INTO Animal
                (nome, especie, raca, data_nascimento, idade, castrado, id_pessoa, foto)";
            $sql .= "VALUES('".$nome."','".$especie."','".$raca."','".$data_nascimento."','".$idade."',".$castrado.",".$pessoa.",'".$nome_foto."')";
            //echo $sql;

            // Executa a query no banco de dados
            $result = mysqli_query($con, $sql);

            // Verifica se a inserção foi bem-sucedida
            if ($result) {
                echo "<h2>Dados cadastrados com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar!</h2>";
                echo "<p class='error-message'>" . mysqli_error($con) . "</p>";
            }

            // Fecha a conexão com o banco de dados
            mysqli_close($con);
        ?>
        <a href="../index.html" class="btn">Voltar à página inicial</a>
        <a href="CadastroAnimal.php" class="btn">Cadastrar outro pet</a>
    </div>
</body>
</html>