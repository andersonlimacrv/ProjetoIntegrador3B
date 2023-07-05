<?php

$db->exec("
    CREATE TABLE IF NOT EXISTS clothing_items (
        id INTEGER PRIMARY KEY,
        item_id INTEGER NOT NULL,
        type TEXT NOT NULL,
        color TEXT NOT NULL,
        condition TEXT NOT NULL,
        size TEXT NOT NULL,
        gender TEXT NOT NULL,
        age_range TEXT NOT NULL,
        estimated_value REAL NOT NULL,
        FOREIGN KEY (item_id) REFERENCES items(id)
    )
");

// Inicialização da tabela clothing_items
$db->exec("
    INSERT INTO items (item_type, description, estimed_value) VALUES
    ('clothing' , 'Camiseta Azul', 10.0),
    ('clothing' , 'Calça Jeans', 10.0),
    ('clothing' , 'Vestido Floral', 10.0)
");

$clothingItem1Id = $db->lastInsertId();
$clothingItem2Id = $clothingItem1Id + 1;
$clothingItem3Id = $clothingItem1Id + 2;

$db->exec("
    INSERT INTO clothing_items (item_id, type, color, condition, size, gender, age_range, estimated_value) VALUES
    ($clothingItem1Id, 'Camiseta', 'Azul', 'Nova', 'M', 'Feminino', 'Adulto', 29.99),
    ($clothingItem2Id, 'Calça', 'Jeans', 'Usada', 'G', 'Masculino', 'Adulto', 49.99),
    ($clothingItem3Id, 'Vestido', 'Floral', 'Desgastada', 'P', 'Feminino', 'Adulto', 39.99)
");
