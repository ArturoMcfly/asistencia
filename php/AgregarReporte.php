<?php
require('conexion.php');
require('../codigo_barras/barcode.php');
$nombre=$_POST['alu'];
$matriula=$_POST['ciclo'];
$fecha=$_POST['fecha'];
$nRe=$_POST[''];
$acti=$_POST[''];
$gru=$_POST[''];
$query="SELECT * FROM asesorias_alumno where matricula Like '".$matriula."'";
$resultado1=$mysqli->query($query);
$fila=$resultado->fetch_assoc();

$idAlum=$fila['id_alumno'];

//$query="INSERT INTO asesorias_reporte VALUES('','$fecha','$maestro','$ciclo')";
$query="insert into asesoria_asistencia VALUES (NULL, '$nRe', '$matriula', '$nombre','$idAlum','$acti','$gru')";
$resultado=$mysqli->query($query);
if($resultado){
    $query="SELECT * FROM asesorias_reporte ORDER by no_reporte DESC LIMIT 1";
    $resultado=$mysqli->query($query);
    foreach($resultado as $row){
        $cod=$row['no_reporte'];
       
    }
    
    Header("Location: ../vistas/Agregarenformato.php?err=1&&id=$cod");
}else{
    
}


?>