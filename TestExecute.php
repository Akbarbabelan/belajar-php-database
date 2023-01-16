<?php

require_once 'GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('babelan', 'Babelan', 'babelan@test.com');
SQL;

$connection->exec($sql);

$connection = null;