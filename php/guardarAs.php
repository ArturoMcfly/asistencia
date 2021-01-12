<?php
require('conexion.php');

$nombre=$_POST['alu'];
$matriula=$_POST['ma'];
$fecha=$_POST['fe'];
$nRe=$_POST['no'];
$acti=$_POST['acti'];
$gru=$_POST['gru'];
$query1="SELECT * FROM asesorias_alumno where matricula Like '".$matriula."'";
$resultado1=$mysqli->query($query1);
$fila=$resultado1->fetch_assoc();

$idAlum=$fila['id_alumno'];


$query="insert into asesoria_asistencia VALUES (NULL, '$nRe', '$matriula', '$nombre','$idAlum','$acti','$gru')";
$resultado=$mysqli->query($query);
if($resultado){
    $query="SELECT * FROM asesoria_reporte ORDER by id_reporte DESC LIMIT 1";
    $resultado=$mysqli->query($query);
    foreach($resultado as $row){
        $cod=$row['id_reporte'];
       
    }
    
    Header("Location: ../vistas/Agregarenformato.php?err=1&&id=$cod");
}else{
    
}


?>