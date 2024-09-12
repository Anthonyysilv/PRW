<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styleIndex.css">
    <?php
        include('includes/inicia_sessao.php');
        if(empty($_SESSION['login'])) {
            header("Location: Login.html");
        }
    ?>
</head>
<body>
    <nav class="nav-bar">
        <?php
            include('includes/inicia_sessao.php');
            if(!empty($_SESSION['login'])) {
        ?>
        <ul>
            <li><a href="#" class="nav-btn">Cadastro</a>
                <ul>
                    <li><a href="CadastroCidade.html">Cidade</a></li>
                    <li><a href="CadastroCliente.php">Cliente</a></li>
                </ul>
            </li>
            <li><a href="#" class="nav-btn">Consultar</a>
                <ul>
                    <li><a href="ListarCidade.php">Cidades</a></li>
                    <li><a href="ListarCliente.php">Clientes</a></li>
                </ul>
            </li>
            <li><a href="Login.html" class="nav-btn">Logar</a></li>
            <li><a href="Logout.php" class="back-button">Logout</a></li>
            <li class="user-name">
                <a>Olá, <?php echo $_SESSION['login']['nome']; ?></a>
            </li>
        </ul>
        <?php
            } else {
                header("Location: Login.html");
            }
        ?>
    </nav>
    <div class="container">
        <h1>Bem-vindo à Página Inicial</h1>
        <h2>O que deseja fazer?</h2>
    </div>
</body>
</html>