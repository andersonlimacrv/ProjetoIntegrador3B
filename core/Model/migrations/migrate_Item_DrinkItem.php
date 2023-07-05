<?php

$db->exec("
    CREATE TABLE IF NOT EXISTS drink_items (
        id INTEGER PRIMARY KEY,
        item_id INTEGER NOT NULL,
        type TEXT NOT NULL,
        quantity REAL NOT NULL,
        unit TEXT NOT NULL,
        expiry_date TEXT NOT NULL,
        ingredients TEXT NOT NULL,
        is_carbonated INTEGER NOT NULL,
        is_alcoholic INTEGER NOT NULL,
        FOREIGN KEY (item_id) REFERENCES items(id)
    )
");


// Inicialização da tabela drink_items
$db->exec("
    INSERT INTO items (item_type, description, estimed_value) VALUES
    ('drink', 'Refrigerante de Cola', 10.0),
    ('drink', 'Suco de Laranja', 10.0),
    ('drink', 'Água Mineral', 10.0)
");

$drinkItem1Id = $db->lastInsertId();
$drinkItem2Id = $drinkItem1Id + 1;
$drinkItem3Id = $drinkItem1Id + 2;

$db->exec("
    INSERT INTO drink_items (item_id, type, quantity, unit, expiry_date, ingredients, is_carbonated, is_alcoholic) VALUES
    ($drinkItem1Id, 'Refrigerante', 500, 'ml', '2023-12-31', 'Água, açúcar, corante, aromatizantes', 1, 0),
    ($drinkItem2Id, 'Suco', 1000, 'ml', '2023-10-15', 'Suco de laranja natural', 0, 0),
    ($drinkItem3Id, 'Água', 500, 'ml', '2023-09-30', 'Água mineral', 0, 0)
");
