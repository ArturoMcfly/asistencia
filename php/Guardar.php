<?php
require('conexion.php');
require('../codigo_barras/barcode.php');
$maestro=$_POST['Maestro'];
$ciclo=$_POST['ciclo'];
$fecha=$_POST['fecha'];

$sqli="SELECT * FROM asesorias_profesores where nombre_profesor LIKE '".$maestro."'";
$resultado2=$mysqli->query($sqli);
foreach($resultado2 as $row1){
    $cod1=$row1['id_profesor'];
    
}


//$query="INSERT INTO asesorias_reporte VALUES('','$fecha','$maestro','$ciclo')";
$query="insert into asesoria_reporte VALUES (NULL, '$fecha', '$cod1', '$ciclo')";
$resultado=$mysqli->query($query);
if($resultado){
    $query1="SELECT * FROM asesoria_reporte ORDER by id_reporte DESC LIMIT 1";;
    $resultado1=$mysqli->query($query1);
    foreach($resultado1 as $row){
        $cod=$row['id_reporte'];
        barcode('../codigos/'.$cod.'.png',$cod,20,'horizontal','code25',true);
    }
    
    Header("Location: ../vistas/Agregarenformato.php?err=1&&id=$cod");
}else{
    
}


?>
