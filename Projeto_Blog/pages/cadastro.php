<?php
// Conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "blog");

// Verificar se a conexão foi bem-sucedida
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Cadastro</h1>
        <form action="cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><br><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha"><br><br>
            <label for="adm">Administrador:</label>
            <input type="checkbox" id="adm" name="adm"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
        <?php
        // Inserir o usuário no banco de dados
        if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $adm = $_POST['adm'] ? 1 : 0;

            $query = "INSERT INTO usuario (nome, email, senha, adm) VALUES ('$nome', '$email', '$senha', '$adm')";
            mysqli_query($conn, $query);
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2023 Blog</p>
    </footer>
</body>
</html>