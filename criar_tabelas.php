<?php

$pdo = new PDO("sqlite:estoque.db");

    $queryCriarTabelaCategorias = "CREATE TABLE IF NOT EXISTS categorias (
        id	INTEGER NOT NULL,
        nome	TEXT NOT NULL,
        PRIMARY KEY(id AUTOINCREMENT)
    )";

$pdo -> query($queryCriarTabelaCategorias);

    $queryCriarTabelaProdutos = "CREATE TABLE IF NOT EXISTS produtos (
        id	INTEGER NOT NULL,
        nome	TEXT NOT NULL,
        descricao	TEXT,
        preco	REAL NOT NULL,
        categoria_id	INTEGER,
        PRIMARY KEY(id AUTOINCREMENT),
        FOREIGN KEY(categoria_id) REFERENCES categorias(id)
    )";

$pdo -> query($queryCriarTabelaProdutos);

    $queryCriarTabelaEstoque = "CREATE TABLE IF NOT EXISTS estoque (
        id	INTEGER NOT NULL,
        produto_id	INTEGER,
        quantidade	INTEGER NOT NULL,
        FOREIGN KEY(produto_id) REFERENCES produtos(id),
        PRIMARY KEY(id)
    )";

$pdo -> query($queryCriarTabelaEstoque);

    


?>