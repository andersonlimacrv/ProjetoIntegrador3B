<?php


$db->exec("
CREATE TABLE IF NOT EXISTS money (
id INTEGER PRIMARY KEY,
currency TEXT NOT NULL,
amount REAL NOT NULL
)
");

$db->exec("
INSERT INTO money (currency, amount)
VALUES
('USD', 100.50),
('EUR', 75.25),
('BRL', 50.75)
");
