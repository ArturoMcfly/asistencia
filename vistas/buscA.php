<?php
include ("../php/conexion.php");

       
?>
<html>
<head>
  
</head>
<body>
<center>

<?php
  $mysqli=new mysqli("localhost","root","","asistencia_asesoria");
  $salida="";
  $query="SELECT * FROM asesorias_alumno";
  if(isset($_POST['consulta'])){
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $query="SELECT * FROM asesorias_alumno
      WHERE nombre_alumno LIKE '%".$q."%' OR matricula LIKE '%".$q."%'"; 

  }
  $resultado=$mysqli->query($query);
  if($resultado->num_rows > 0){
      $salida.="
      <center>
      <table  width=100%  style='border-radius:20px; padding:10px; border:2px solid #000000;'>
                  <thead>
                    <tr>
                    <th  style='background-color:#0D7160;border:1px solid #0D7160; color:#fff; width: 100px;'>NOMBRE</th>
        <th style='background-color:#0D7160;border:2px solid #0D7160; color:#fff;'>APELLIDO PETERNO</th>
        <th style='background-color:#0D7160;border:2px solid #0D7160; color:#fff;'>APELLIDO MATERNO</th>
        <th style='background-color:#0D7160;border:2px solid #0D7160; color:#fff;'>MATRICULA</th>
        <th style='background-color:#0D7160;border:2px solid #0D7160; color:#fff;'>GRUPO</th>
        <th style='background-color:#0D7160;border:2px solid #0D7160; color:#fff;'>CARRERA</th>
        

        
        <th colspan='2' style='color:#fff;width: 150px; height:50px;'>
        <a href='../Pdf/pdfAlumno.php' class='editar editar2'>PDF ✔</a>
        
        </th>
      
             
                    </tr>
                   </thead>";
                   //<tbody>;
                   $back='cce5ff';
                   while($fila=$resultado->fetch_assoc()){
                       $salida.="
                       
            <tr>
                       <th style='background-color:#$back;'>".$fila['nombre_alumno']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['ape_pate_alum']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['ape_mat_alum']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['matricula']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['grupo']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['carrera']."</th>
           
           

                    <th style='width:50px;'>
                        <form action='Mod.php'  method='post'>                            
                            <input type='text' value='".$fila['nombre_alumno']."' name='id' hidden>
                            <input type='text' value='".$fila['ape_pate_alum']."' name='nombre' hidden>
                            <input type='text' value='".$fila['ape_mat_alum']."' name='id2' hidden>
                            <input type='text' value='".$fila['matricula']."' name='nombre2' hidden>

                            <input type='submit' class='editar editar1' value='✎' >
                        </form>
                    </th>
                    <th style='width:50px;'>
                        <form action='Del.php'  method='post'>                            
                        <input type='text' value='".$fila['nombre_alumno']."' name='id' hidden>
                        <input type='text' value='".$fila['ape_pate_alum']."' name='nombre' hidden>
                        <input type='text' value='".$fila['ape_mat_alum']."' name='id2' hidden>
                        <input type='text' value='".$fila['matricula']."' name='nombre2' hidden>
                            <input type='submit' class='editar editar2' value='✘' style='width:30px;margin:0px 0px; padding:0;border-radius:25px;'>
                        </form>
                    </th>
                              
                              
                              </tr>";
                   }
                   $salida.="</table></div>";
    
  }else{
      $salida.="No hay datos";

  }
  echo $salida;
  $mysqli->close();
?>
  </center>
  </body>
</html>

           
</center>

</body>
</html>