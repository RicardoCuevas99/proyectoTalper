<?php
$serverName = "DESKTOP-33G778R";
$database = "prospectos";

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
    global $conn;
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>