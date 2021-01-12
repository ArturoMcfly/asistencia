<?php
$idReporte=$_POST['no'];
if($idReporte!=null){


$mysqli=new mysqli("localhost","root","","asistencia_asesoria");



$query="SELECT * FROM asesoria_reporte where id_reporte LIKE '%".$idReporte."%'";

$resultado=$mysqli->query($query);
if($resultado->num_rows>0){
$fila=$resultado->fetch_assoc();

$id1=$fila['id_reporte'];
$fecha1=$fila['fecha'];
$idprofesor=$fila['id_profesor'];
$ciclo1=$fila['ciclo'];
$materia1=$fila['materia'];

echo $id1;
echo $fecha1;
echo $profesor1;
echo $ciclo1;
echo $materia1;

$query1="SELECT * FROM asesorias_profesores where id_profesor LIKE '%".$idprofesor."%'";
$resultado1=$mysqli->query($query1);
if($resultado1->num_rows>0){
    $registroProf=$resultado1->fetch_assoc();
$profesor=$registroProf['nombre_profesor'];

Header("Location: ../vistas/fo.php?err=1&&id1=$id1&&fecha=$fecha1&&prof=$profesor&&ciclo=$ciclo1&&mat=$materia1");
$mysqli->close();
}else{
    $msj="no existe algun reporte";
 Header("Location: ../vistas/fo.php?err=$msj");
}
}else{
    Header("Location: ../vistas/fo.php?err=$msj");
}
}else{
    Header("Location: ../vistas/fo.php?err=$msj");
}

?>