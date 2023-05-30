<?php
    function establecerConexion() {
    $serverName = "DESKTOP-33G778R";
    $connectionInfo = array("Database" => "prospectos"); 

    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if( $conn ) {
        echo "Conexión establecida.<br />";
    }else{
        echo "Conexión no se pudo establecer.<br />";
        die( print_r( sqlsrv_errors(), true));
    }
    return $conn;
    }
?>