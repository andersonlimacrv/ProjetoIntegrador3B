<?php

$db->exec("
INSERT INTO cnpj_donors (id, companyName, cnpj) VALUES
(2, 'Empresa 1', '12345678901234'),
(3, 'Empresa 2', '98765432109876')
");



$db->exec("
    CREATE TABLE IF NOT EXISTS cnpj_donors (
        id INTEGER PRIMARY KEY,
        companyName TEXT,
        cnpj TEXT,
        FOREIGN KEY (id) REFERENCES donors(id)
    )
");
