	<?php
	# conectare la base de datos
    $mysqli=@mysqli_connect('localhost', 'root', '', 'asistencia_asesoria');
   
		// escaping, additionally removing everything that could be (html/javascript-) code
    $user=$_POST['user'];
	$pass=$_POST['pass'];	
	$sql="SELECT * FROM asesorias_profesores WHERE nombre_profesor='". $user ."'AND contrasenia='".$pass."'";

        $resultado = $mysqli -> query($sql);

        $row = $resultado -> fetch_array(MYSQLI_BOTH);
			
	
        if ($row!= null) {
			
            session_start();
            $_SESSION['usr'] = $row[4];
		
			header("location:../vistas/menu.php");

		 
        } else {
			echo "Error en la autentificacion;";
			
			echo "<script language='javascript'>"; 
			echo "alert('la clave no es valida.')"; 
			
	        echo "</script>"; 
			echo '<script>window.history.go(-1)</script>';
			
			if (isset($errors)){
			}
		}
			
?>