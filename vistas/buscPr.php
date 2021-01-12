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
  $query="SELECT * FROM asesorias_profesores";
  if(isset($_POST['consulta'])){
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $query="SELECT * FROM asesorias_profesores
      WHERE nombre_profesor LIKE '%".$q."%' OR No_de_empleado LIKE '%".$q."%'"; 

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
        <th style='background-color:#0D7160;border:2px solid #0D7160; color:#fff;'>NUMERO DE EMPLEADO</th>
        <th style='background-color:#0D7160;border:2px solid #0D7160; color:#fff;'>CORREO INSTITUCIONAL</th>

        

        
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
                      
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['nombre_profesor']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['paterno_profesor']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['materno_profesor']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['No_de_empleado']."</th>
            <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['correo_ins']."</th>
           
           

                    <th style='width:50px;'>
                        <form action='Mod.php'  method='post'>                            

                            <input type='submit' class='editar editar1' value='✎' >
                        </form>
                    </th>
                    <th style='width:50px;'>
                        <form action='Del.php'  method='post'>                            
 
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