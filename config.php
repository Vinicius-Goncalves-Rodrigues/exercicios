<?php

//Configurações basicas

$host = 'localhost';
$dbname = 'exer';
$username = 'root';
$password = '';

//conexão pdo
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;chaset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Erro ao conectar:" . $e->getMessage());
}
?>