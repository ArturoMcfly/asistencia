<?php
$mysqli=new mysqli("localhost","root","","asistencia_asesoria");
require ('../codigo_barras/barcode.php');
$Nombre=$_POST['nombreProfe'];
$ApellidoP=$_POST['apepat'];
$ApellidoM=$_POST['apemat'];
$Correo=$_POST['Correo'];
$numeroDe=$_POST['noDeEmpleado'];
$Password=$_POST['Contrasenia'];
if($Nombre!=null||$ApellidoP!=null||$ApellidoM!=null||$Correo!=null||$numeroDe!=null||$Password!=null){

    $query="INSERT INTO asesorias_profesores (
        `nombre_profesor`,
        `paterno_profesor`, 
        `materno_profesor`, 
        `No_de_empleado`,
        `contrasenia`, 
        `correo_ins`)
        VALUES (
            '".$_POST["nombreProfe"]."',
            '".$_POST["apepat"]."',
            '".$_POST["apemat"]."',
            '".$_POST["Correo"]."',
            '".$_POST["noDeEmpleado"]."',
            '".$_POST["Contrasenia"]."')";
    $resultado=$mysqli->query($query);
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