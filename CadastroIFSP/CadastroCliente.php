<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
<div class="container">
        <h2>Cadastrar Cliente</h2>
        <form action="CadastroClienteExe.php" method="post" class="form-container">
            <div class="input-container">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-container">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <div class="input-container">
                <label for="ativo">Situação do Cliente</label>
                <input type="radio" name="ativo" id="ativo" value="1" required> ativo
                <input type="radio" name="ativo" id="ativo" value="0" checked required> não ativo
            </div>
            <div class="input-container">
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)) {
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="button-container">
                <button type="submit" class="btn">Cadastrar</button>
            </div>
        </form>
        <div class="btn-container">
            <a href="ListarCliente.php" class="btn btn-secondary">Consultar Clientes</a>
            <a href="index.php" class="btn btn-secondary">Voltar à página inicial</a>
        </div>
    </div>
</body>
</html>