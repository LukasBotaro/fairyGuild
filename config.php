<?php
session_start();
const HOST     = 'localhost:3306';
const DBNAME   = 'guilda_db';
const USER     = 'root';
const PASSWORD = '';

try {
    $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . '', USER, PASSWORD, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco de dados';
    echo $e;
}
?>