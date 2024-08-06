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
        $sql = "SELECT * FROM animal WHERE id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="AlteraAnimalExe.php" method="post">
        <fieldset>
            <legend>Alterar Animal</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" required>
            </div>
            <div>
                <label for="especie">Especie</label>
                <input type="text" name="especie" id="especie" value="<?php echo $row['especie']?>" required>
            </div>
            <div>
                <label for="raca">Raça</label>
                <input type="text" name="raca" id="raca" value="<?php echo $row['raca']?>" required>
            </div>
            <div>
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $row['data_nascimento']?>" required>
            </div>
            <div>
                <label for="castrado">Castrado</label>
                <input type="radio" name="castrado" id="castrado" value="1" required> Sim
                <input type="radio" name="castrado" id="castrado" value="0" checked required> Não
            </div>
            <div>
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
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarAnimal.php" class="btn btn-secondary">Consultar Cadastros</a>
        <a href="../index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>
