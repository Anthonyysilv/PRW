<?php
    //Informações do banco
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'CadVet';
    $port     = 3307; //Alterar para 3307 no IF
    //Conecta com o banco
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    //Verifica a conexão
    if (mysqli_connect_error())
    {
        printf("Erro de conexão: %s", mysqli_connect_error());
        exit();
    }
?>