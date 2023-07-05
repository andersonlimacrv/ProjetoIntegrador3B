<?php

$db->exec("
CREATE TABLE IF NOT EXISTS cpf_donors (
id INTEGER PRIMARY KEY,
donorName TEXT,
cpf TEXT,
FOREIGN KEY (id) REFERENCES donors(id)
)
");



$db->exec("
    INSERT INTO cpf_donors (id, donorName, cpf) VALUES
    (4, 'Pessoa 1', '123.456.789-01'),
    (5, 'Pessoa 2', '987.654.321-09')
");
