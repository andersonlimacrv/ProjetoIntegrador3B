<?php

$db->exec("
    CREATE TABLE IF NOT EXISTS anonymous_donors (
    id INTEGER PRIMARY KEY,
    FOREIGN KEY (id) REFERENCES donors(id)
    )
    ");

$db->exec("
    INSERT INTO anonymous_donors (id) VALUES
    (1)
    ");
