<?php


$db->exec("
    CREATE TABLE IF NOT EXISTS generic_items (
        id INTEGER PRIMARY KEY,
        description TEXT
    )
");

$db->exec("
    INSERT INTO items (item_type, description, estimed_value) VALUES
    ('generic', 'Item 1', 10),
    ('generic','Item 2', 100),
    ('generic','Item 3', 1000)
");

$genericItem1Id = $db->lastInsertId();
$genericItem2Id = $genericItem1Id + 1;
$genericItem3Id = $genericItem1Id + 2;

$db->exec("
    INSERT INTO generic_items (id, description) VALUES
    ($genericItem1Id, 'Descrição do Item 1'),
    ($genericItem2Id, 'Descrição do Item 2'),
    ($genericItem3Id, 'Descrição do Item 3')
");
