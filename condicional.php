<?php

    $nome = "Champ";
    if ($nome == "Champ"){
        echo "Isso ai!";
    } else {
        echo "Nop!";
    }

    $opcao = 1;
    $num1 = 20;
    $num2 = 15;
    switch ($opcao) {
        case 1:
            echo $num1 + $num2;
        break;
        case 2:
            echo $num1 - $num2;
        default:
            echo "Operação Inválida";
        break;
    }

?>