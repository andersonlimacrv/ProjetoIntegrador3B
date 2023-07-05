<?php

$db->exec("
    CREATE TABLE IF NOT EXISTS appliance_items (
        id INTEGER PRIMARY KEY,
        brand TEXT,
        model TEXT,
        power REAL,
        voltage INTEGER,
        needsRepair INTEGER,
        FOREIGN KEY (id) REFERENCES items(id)
    )
");

// Inserir registros na tabela appliance_items

$db->exec("
    INSERT INTO items (item_id, description, estimed_value) VALUES
    ('appliance' , 'Geladeira', 645.80),
    ('appliance' , 'Fogão', 300.00),
    ('appliance' , 'Máquina de Lavar', 370.10)

");

$applianceItem1Id = $db->lastInsertId();
$applianceItem2Id = $applianceItem1Id + 1;
$applianceItem3Id = $applianceItem1Id + 2;

$db->exec("
    INSERT INTO appliance_items (id, brand, model, power, voltage, needsRepair) VALUES
    ($applianceItem1Id, 'Brastemp', 'BRA50B', 150.0, 220, 0),
    ($applianceItem2Id, 'Electrolux', 'ELEF60', 200.0, 220, 1),
    ($applianceItem3Id, 'Consul', 'CNSL40A', 120.0, 110, 0)
");
