<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
    <link rel="stylesheet" href="../css/AlteraPessoa.css">
</head>
<body>
    <?php
        include('../includes/conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM pessoa WHERE id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="AlterarPessoaExe.php" method="post">
        <fieldset>
            <legend>Alterar Pessoa</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email']?>" required>
            </div>
            <div>
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>" required>
            </div>
            <div>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>" required>
            </div>
            <div>
                <label for="cep">Cep</label>
                <input type="text" name="cep" id="cep" value="<?php echo $row['cep']?>" required>
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php
                        include('../includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row_cid = mysqli_fetch_array($result)) {
                            echo "<option value='".$row_cid['id']."'>".$row_cid['nome_cidade']."/".$row_cid['estado']."</option>";
                        }
                    ?>
                </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarPessoa.php" class="btn btn-secondary">Consultar Cadastros</a>
        <a href="../index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>
