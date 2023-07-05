<?php

$db->exec("
CREATE TABLE IF NOT EXISTS donors (
id INTEGER PRIMARY KEY,
donorType TEXT NOT NULL,
donorName TEXT
)
");
