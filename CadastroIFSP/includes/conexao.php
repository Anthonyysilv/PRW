<?php
    //Informações do banco
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'IFSP';
    $port     = 3307;
    //Conecta com o banco
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    //Verifica a conexão
    if (mysqli_connect_error())
    {
        printf("Erro: conexão: %s", mysqli_connect_error());
        exit();
    }
?>