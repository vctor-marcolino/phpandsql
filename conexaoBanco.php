<?php

    $pdo = new PDO("sqlite:teste.db");

    $query01 = "SELECT * FROM tabela01";

    $consulta = $pdo ->query($query01);

    foreach($consulta as $linha) {

        echo $linha['id']. " - ".$linha["nome"]."<br>";
    }
    
?>