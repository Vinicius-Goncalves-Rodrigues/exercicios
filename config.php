<?php

//confiigurações báscas

$host = 'localhost';
$dbname = 'exer';
$username = 'root';
$passaword = '';

//Conexão PDO

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $passaword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro ao conectar:" . $e->getMessage());
}
?>