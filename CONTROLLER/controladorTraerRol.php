<?php
require_once '../MODEL/MySQL.php';
header('Content-Type: application/json; charset=utf-8');
session_start();

if (isset($_SESSION['rol'])) {
    echo json_encode([
        "rol" => $_SESSION['rol'],
       
    ]);
} 
