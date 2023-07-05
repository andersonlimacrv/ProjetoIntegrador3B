<?php

$db->exec("
    CREATE TABLE IF NOT EXISTS food_items (
        item_id INTEGER PRIMARY KEY,
        type TEXT NOT NULL,
        quantity REAL NOT NULL,
        unit TEXT NOT NULL,
        expiry_date DATE,
        ingredients TEXT,
        allergens TEXT,
        taste TEXT,
        is_perishable INTEGER NOT NULL
    )
");


// Inicialização da tabela food_items
$db->exec("
    INSERT INTO items (item_type, description, estimed_value) VALUES
    ('food', 'Arroz', 10.0),
    ('food', 'Feijão', 10.0),
    ('food', 'Macarrão', 10.0)
");


$foodItem1Id = $db->lastInsertId();
$foodItem2Id = $foodItem1Id + 1;
$foodItem3Id = $foodItem1Id + 2;

$db->exec("
    INSERT INTO food_items (item_id, type, quantity, unit, expiry_date, ingredients, allergens, taste, is_perishable) VALUES
    ($foodItem1Id, 'Grãos', 1, 'kg', '2024-12-31', 'Arroz branco', NULL, NULL, 0),
    ($foodItem2Id, 'Grãos', 1, 'kg', '2024-12-31', 'Feijão preto', NULL, NULL, 0),
    ($foodItem3Id, 'Massas', 500, 'g', '2024-12-31', 'Macarrão espaguete', NULL, NULL, 0)
");
