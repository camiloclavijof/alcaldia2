<?php
    session_start();
    require_once('../inc/db.php');
    header("Content-Type: text/plain");
    $filename = "Lista de Usuarios Login -" . date('Ymd') . ".xls";
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    $sql = "SELECT * FROM users";   

    $result = mysqli_query($conn,$sql) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
    $hea = false;
        while($row = mysqli_fetch_assoc($result)){
        if(!$hea) {
            echo implode("\t", array_keys($row)) . "\r\n";
            $hea = true;
        }
        echo implode("\t", array_values($row)) . "\r\n";
        }
    exit; 
?>