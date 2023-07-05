<?php

$db->exec("
    CREATE TABLE IF NOT EXISTS furniture_items (
        item_id INTEGER PRIMARY KEY,
        brand TEXT NOT NULL,
        material TEXT NOT NULL,
        condition TEXT NOT NULL,
        dimensions TEXT NOT NULL,
        weight REAL NOT NULL,
        usage TEXT
    )
");



$db->exec("
    INSERT INTO items (item_type, description, estimed_value) VALUES
    ('furniture','Cadeira', 10.0),
    ('furniture', 'Mesa', 10.0),
    ('furniture', 'Guarda-roupa', 10.0)
");

$furnitureItem1Id = $db->lastInsertId();
$furnitureItem2Id = $furnitureItem1Id + 1;
$furnitureItem3Id = $furnitureItem1Id + 2;

$db->exec("
    INSERT INTO furniture_items (item_id, brand, material, condition, dimensions, weight, usage) VALUES
    ($furnitureItem1Id, 'Ikea', 'Madeira', 'Novo', '80cm x 60cm x 50cm', 10.5, NULL),
    ($furnitureItem2Id, 'Tok&Stok', 'Vidro', 'Usado', '120cm x 80cm x 70cm', 25.2, NULL),
    ($furnitureItem3Id, 'Ikea', 'MDF', 'Danificado', '200cm x 180cm x 60cm', 150.0, 'Quarto')
");
