<?php


$db->exec("
    CREATE TABLE IF NOT EXISTS donations (
        id INTEGER PRIMARY KEY,
        donorId INTEGER NOT NULL,
        donatedItemType TEXT NOT NULL,
        donatedItemReferenceId INTEGER NOT NULL,
        donationDate DATE NOT NULL,
        FOREIGN KEY (donorId) REFERENCES donors(id),
        FOREIGN KEY (donatedItemReferenceId) REFERENCES items(id)
    )
");

// Inicialização;
$db->exec("
    INSERT INTO donations (donorId, donatedItemType, donatedItemReferenceId, donationDate)
    VALUES
        (1, 'Clothing', 1, '2023-06-01'),
        (2, 'Food', 2, '2023-06-05'),
        (3, 'Appliance', 3, '2023-06-10'),
        (1, 'Generic', 4, '2023-06-15')
");
