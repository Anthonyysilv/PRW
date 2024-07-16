<?php
    echo "<h2>Cadastro</h2>";
    //Como receber dados no PHP (depende do action no form)
    // $_GET['nome_campo']
    // $_POST['nome_campo]

    //Recebendo dado enviado do form html via GET
    $nome = $_GET['nome'];
    echo "<h3>Nome: </h3>";
    echo $nome;
?>