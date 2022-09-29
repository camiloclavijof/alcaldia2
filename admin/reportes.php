<?php
    session_start();
    require_once('../inc/db.php');
    if($_GET['id'] === '' || $_GET['id'] === false){
        echo 'Datos insuficientes para generar el PDF';
        exit;
    }
$sql = "SELECT CONCAT(nombre, ' ', apellido1, ' ', apellido2) AS nombre, sexo, numero_documento1 FROM datospersonales WHERE id_datospersonales =".$_GET['id'];    

$result = mysqli_query($conn,$sql) or die ('No se pudo buscar la información del usuario' . mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
    $datos = array(
        'nombre' => $row['nombre'],
        'sexo' => $row['sexo'],
        'numero_documento1' => $row['numero_documento1'],
    );
    
}
if(count($datos) < 1){
    echo 'No se encontraron datos del usurio.';
    exit;
}

    $complemento = 'La señora';
    if($datos['sexo'] == 'Hombre'){
        $complemento = 'El señor';
    }
    $html ="
        <p>".$complemento." ".$datos['nombre']." con numero de identificación ".$datos['numero_documento1'].", se encuentra registrado en el sistema de interno de la Alcaldía de Guayabetal.<br><br>
    Se expide el ".date('d/m/Y')." en Guayabetal Cundinamarca.
        </p>
    ";
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('hello world');
    
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    $dompdf->stream();    
 


 




?>
