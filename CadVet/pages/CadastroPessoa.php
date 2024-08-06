<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="../css/CadastroPessoa.css">
</head>
<body>
    <h2>Cadastrar Pessoa</h2>
    <form action="CadastroPessoaExe.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" pattern="\d{5}-\d{3}" placeholder="12345-678" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
                <?php
                    include('../includes/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<option value='".$row['id']."'>".$row['nome_cidade']."/".$row['estado']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="button-container">
            <button type="submit" class="btn">Cadastrar</button>
        </div>
    </form>
    <div class="btn-container">
            <a href="ListarPessoa.php" class="btn btn-secondary">Consultar Pessoas</a>
            <a href="../index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>