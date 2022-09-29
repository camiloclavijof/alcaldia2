<?php
    session_start();
    require_once('../inc/db.php');
    header("Content-Type: text/plain");
    $filename = "Lista de Usuarios-" . date('Ymd') . ".xls";
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    $sql = "SELECT * FROM datospersonales INNER JOIN  nucleofamiliar ON datospersonales.id_nucleofamiliar =  nucleofamiliar.id_nucleofamiliar INNER JOIN victimas  ON nucleofamiliar.id_victimas = victimas.id_victimas INNER JOIN desarrollo_social ON victimas.id_desarrollo_social = desarrollo_social.id_desarrollo_social INNER JOIN salud ON desarrollo_social.id_salud = salud.id_salud INNER JOIN planeacion ON salud.id_planeacion = planeacion.id_planeacion INNER JOIN hacienda ON planeacion.id_hacienda = hacienda.id_hacienda INNER JOIN umata ON hacienda.id_umata = umata.id_umata INNER JOIN sena ON umata.id_sena = sena.id_sena INNER JOIN turismo ON sena.id_turismo = turismo.id_turismo INNER JOIN gobierno ON turismo.id_gobierno = gobierno.id_gobierno";   

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