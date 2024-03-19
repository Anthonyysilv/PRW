<?php

// Define a senha correta
$senhaCorreta = 2002;

// Loop para ler a senha até que seja correta
while (true) {
    // Lê a senha
    $senha = intval(fgets(STDIN));

    // Verifica se a senha está correta
    if ($senha == $senhaCorreta) {
        echo "Acesso Permitido\n";
        break; // Encerra o loop
    } else {
        echo "Senha Invalida\n";
    }
}

?>