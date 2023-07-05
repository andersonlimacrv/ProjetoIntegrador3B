<?php

$db->exec("
    CREATE TABLE IF NOT EXISTS items (
        item_id INTEGER PRIMARY KEY,
        item_type TEXT NOT NULL,
        description TEXT
        estimed_value REAL NOT NULL
    )
");

// Inserir registros na tabela items
$db->exec("INSERT INTO items (item_type, description, estimed_value) VALUES ('appliance', 'Geladeira', 508.10)");
$db->exec("INSERT INTO items (item_type, description, estimed_value) VALUES ('food', 'Arroz', 20.0)");
$db->exec("INSERT INTO items (item_type, description, estimed_value) VALUES ('drink', 'Refrigerante', 15.7)");
$db->exec("INSERT INTO items (item_type, description, estimed_value) VALUES ('clothing', 'Camiseta', 50.0)");
$db->exec("INSERT INTO items (item_type, description, estimed_value) VALUES ('furniture', 'Sofá', 100.0)");
