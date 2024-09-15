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
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/cadastro.php">Cadastro</a></li>
                <li><a href="pages/login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Lista de Posts</h1>
        <ul>
            <?php
            // Consultar os posts no banco de dados
            $query = "SELECT * FROM post WHERE ativo = 1";
            $result = mysqli_query($conn, $query);

            // Exibir os posts
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo "<h2>" . $row['titulo'] . "</h2>";
                echo "<p>" . $row['texto'] . "</p>";
                echo "<p>Data de criação: " . $row['data_criacao'] . "</p>";
                echo "<p>Data de postagem: " . $row['data_postagem'] . "</p>";
                echo "</li>";
            }
            ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2023 Blog</p>
    </footer>
</body>
</html>