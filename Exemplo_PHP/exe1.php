<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    if ($email == "anthony.silva@aluno.ifsp.edu.br" && $password == "12345" && $name == "Anthony")
    {
        echo $name . " foi logado com sucesso!";
        echo $email."<br>";
        echo $password."<br>";
    } else
    {
        echo "Usuário, email e/ou senha incorreto(s)";
        echo '<a href="http://localhost/PRW/Exemplo_PHP/form.html"> Voltar</a>';
    }
?>