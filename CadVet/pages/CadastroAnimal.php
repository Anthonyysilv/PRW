<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="../css/CadastroAnimal.css">
</head>
<body>
    <h2>Cadastrar Pet</h2>
    <form action="CadastroAnimalExe.php" method="post" enctype="multipart/form-data"> <!--Enctype diz o tipo de arquivo que pode ser aceito pelo form-->
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="especie">Espécie</label>
            <input type="text" name="especie" id="especie" required value="<?php echo isset($_POST['especie']) ? htmlspecialchars($_POST['especie']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="raca">Raça</label>
            <input type="text" name="raca" id="raca" value="<?php echo isset($_POST['raca']) ? htmlspecialchars($_POST['raca']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento">
        </div>
        <div class="input-container">
                <label for="castrado">Castrado</label>
                <input type="radio" name="castrado" id="castrado" value="1" required> Sim
                <input type="radio" name="castrado" id="castrado" value="0" checked required> Não
        </div>
        <div class="form-group">
            <label for="pessoa">Dono(a)</label>
            <select name="pessoa" id="pessoa" required>
                <?php
                    include('../includes/conexao.php');
                    $sql = "SELECT * FROM Pessoa";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)) {
                        $selected = (isset($_POST['pessoa']) && $_POST['pessoa'] == $row['id']) ? 'selected' : '';
                        echo "<option value='".$row['id']."' $selected>".$row['nome']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="button-container">
            <button type="submit" class="btn">Cadastrar</button>
        </div>
    </form>
    <div class="btn-container">
        <a href="ListarAnimal.php" class="btn btn-secondary">Consultar Animais</a>
        <a href="../index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>