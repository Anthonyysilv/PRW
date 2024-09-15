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
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha"><br><br>
            <input type="submit" value="Login">
        </form>
        <?php
        // Verificar se o usuário existe no banco de dados
        if (isset($_POST['email']) && isset($_POST['senha'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $usuario = mysqli_fetch_assoc($result);
                if ($usuario['adm'] == 1) {
                    echo "Bem-vindo, administrador!";
                } else {
                    echo "Bem-vindo, usuário!";
                }
            } else {
                echo "Erro ao logar";
            }
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2023 Blog</p>
    </footer>
</body>
</html>