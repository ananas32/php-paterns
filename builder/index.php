<?php

namespace builder;

require_once '../autoload.php';
require_once '../abstracts/functions.php';

echo "Testing MySQL query builder:<br><br>";
$mysql = new MysqlQueryBuilder();
$result = $mysql->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20)
    ->getSQL();
echo $result;
echo "<br><br>";


$mysql = new PostgresQueryBuilder();
$result = $mysql->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20)
    ->getSQL();
echo $result;
echo "<br><br>";
