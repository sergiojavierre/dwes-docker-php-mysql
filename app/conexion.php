<?php
$servername = "mysql";
$username = "root";
$password = "root";
$database = "demo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
// Realizar operaciones con la base de datos aquí
function insertaProducto($conn, $nombre) {
   $sql = "INSERT INTO productos (nombre) VALUES ('$nombre')";
   $conn->query($sql);
}

function buscaProductos($conn){
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);
    return $result;
}


