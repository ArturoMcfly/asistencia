<?php
$mysqli=new mysqli("localhost","root","","asistencia_asesoria");
$Nombre=$_POST['nombre'];
$ApellidoP=$_POST['apePatAlu'];
$ApellidoM=$_POST['apeMatAlu'];
$matricula=$_POST['matricula'];
$grupo=$_POST['grupo'];
$carrera=$_POST['carrera'];
if($Nombre!=null||$ApellidoP!=null||$ApellidoM!=null||$matricula!=null||$grupo!=null||$carrera!=null){
$query="INSERT INTO asesorias_alumno (
	`nombre_alumno`,
	`ape_pate_alum`, 
	`ape_mat_alum`, 
	`matricula`,
	`grupo`, 
	`carrera`)
	VALUES (
		'".$_POST["nombre"]."',
		'".$_POST["apePatAlu"]."',
		'".$_POST["apeMatAlu"]."',
		'".$_POST["matricula"]."',
		'".$_POST["grupo"]."',
		'".$_POST["carrera"]."')";
$resultado=$mysqli->query($query);


echo $Nombre;
echo $ApellidoP;
echo $ApellidoM;
echo $matricula;
echo $grupo;
echo $carrera;

//

//$mysqli=new mysqli('localhost','root','','asistencia_asesoria');


		if ($resultado) {
			echo "<script language='javascript'>"; 
			echo "alert('Registro guardado.')"; 
			
			echo "</script>"; 
			echo '<script>window.history.go(-1)</script>';
		}else {
			echo "<script language='javascript'>"; 
			echo "alert('Error!! Registro no guardado .')"; 
			echo "</script>";  
			echo '<script>window.history.go(-1)</script>';
		}

		
}else{
	echo "<script language='javascript'>"; 
			echo "alert('Necesita llenar todos los campos .')"; 
			echo "</script>";  
			echo '<script>window.history.go(-1)</script>';

}



?>