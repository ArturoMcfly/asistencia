<?php
session_start();
?>
<?php
if(isset($_SESSION['usr'])){

}else{
    header("location: ../index.php");
}
?>
<html>
<head>
<title>Reporte Fo-tesh</title>
<center>
<table width=100% style="background-color:#28384E;border-radius:10px; padding:10px; border:2px solid #28384E; color:#fff">
  <tr>
    <th>
    
    <img alt="" height="80px" src="../img/tecnmBlanco.png">
    <br>
    <a href='menu.php' class='editar editar4'>MENU 
    </a>
    </th>
    <th>
      <h1>
      BUSCAR <BR> FORMATO DE ASESORIAS <br>FO-TESH-100
  </h1>
    </th>
    <th>
    
    <img alt="" height="80px" src="../img/teshlogo.png">
    <br>
    <a href='../php/cerrarsesion.php' class='editar editar4'>
    SALIR
    </a>
    </th>
  </tr>

</table>

<br>
</center>
    <style>
    body{
    background-image: url(../img/IC_09.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;


}
    
 .editar {
  background-color: #008CBA; /* blue */
  border: none;
  color: #fff;
  padding: 0px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.5s; /* Safari */
  transition-duration: 0.5s;
  cursor: pointer;
  border-radius: 12px;
  height: 100%;
}

.editar1 {
  background-color: #008CBA; 
  color: #fff; 
  border: 2px solid #008CBA;
}

.editar1:hover {
  background-color: #fff;
  color: #008CBA;
}
.editar2 {
  background-color: #f44336; 
  color: #fff; 
  border: 2px solid #f44336;
}

.editar2:hover {
  background-color: #fff;
  color: #f44336;
}
.editar4 {
  background-color: #28384E; 
  color: #fff; 
  border: 2px solid #28384E;
}

.editar4:hover {
  background-color: #fff;
  color: #1A620C;
}


   </style>
   </head>

   <body>
       <center>
            <form action="../php/buscaRe.php" method="POST">
            <table id="tabla1" width=100% style="border-radius:20px; padding:10px; border:2px solid #000000; ">
                <tr>
                    <th colspan="3" style="background-color:#0D7160;border:2px solid #0D7160; border-radius:12px 12px 0px 0px; color:#fff "><?php echo "BUSQUEDA POR"; ?></th> 
                </tr>
                <tr>
                    <th rowspan="1" style="border:1px solid #cce5ff; background-color:#cce5ff;">
                    No de reporte
                    <br>
                    <input type="text" name="no" value="<?php if(isset($_GET['id1'])){echo $_GET['id1'];}?>" style='border-radius:20px;width:50%;height:30px;padding:10px;' placeholder="No. de reporte">
                    <br>
                    <th colspan="1" style="border:1px solid #cce5ff; background-color:#cce5ff;color:#3366fff; height: 60px;">
                    
                    <button type="submit"  name="Insertar" class='editar editar2'>Buscar </button>
                    </th>
                </tr>
                
            <table>
            </form>

            

       
     
       <?php
       include("../php/conexion.php");

       if(isset($_GET['err'])){
           if($_GET['err']=='1'){
            echo"si regreso un registro";
            $back='cce5ff';

            $Reporte="
            <table if='tabla2'  width=100% style='border-radius:20px; padding:10px; border:2px solid #000000;'>
                <tr>
                    <th colspan='4' style='background-color:#0D7160;border:2px solid #0D7160; border-radius:12px 12px 0px 0px; color:#fff '>Datos de reporte</th> 
                </tr>
                <tr>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff; width: 100px;'>No. de reporte</th>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff;'>Maestro</th>
                    <th style='background-color:#0D7160;border:1px solid#0D7160; color:#fff;'>Ciclo escolar</th>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff;'>Fecha</th>
         
                    

                </tr>
                <tr>
                    <th style='background-color:#$back;'>".$_GET['id1']."</th>
                    <th style='background-color:#$back; padding:0px 50px;' align=left>".$_GET['prof']."</th>
                    <th style='background-color:#$back; padding:0px 50px;' align=left>".$_GET['ciclo']."</th>
                    <th style='background-color:#$back; padding:0px 50px;' align=left>".$_GET['fecha']."</th>



                </tr>

            </table>    
            ";

            echo $Reporte;

            $idreporte=$_GET['id1'];

            $mysqli=new mysqli("localhost","root","","asistencia_asesoria");
            $query="SELECT * FROM asesoria_asistencia WHERE no_reporte LIKE '%".$idreporte."%'";
            $resultado=$mysqli->query($query);
            if($resultado->num_rows > 0){
                
                $salida="
                <table id='tabla2'  width=100% style='border-radius:20px; padding:10px; border:2px solid #000000;'>
                <tr>
                    <th colspan='6' style='background-color:#0D7160;border:2px solid #0D7160; border-radius:12px 12px 0px 0px; color:#fff '>Datos de asistencia</th> 
                </tr>
                <tr>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff; width: 100px;'>No.</th>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff;'>Actividades</th>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff;'>Grupo</th>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff;'>Alumno</th>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff;'>Fecha</th>
                    <th style='background-color:#0D7160;border:1px solid #0D7160; color:#fff;'>Matricula</th>
                </tr>";
                
                   while($fila=$resultado->fetch_assoc()){
                       $salida.="
                       <tr>
                       <th style='background-color:#$back;'>".$fila['id_asistencia']."</th>
                        <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['actividad']."</th>
                        <th style='background-color:#$back; padding:0px 50px;' align=left>".$_GET['id1']."</th>
                        <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['nombre_alumno']."</th>
                        <th style='background-color:#$back; padding:0px 50px;' align=left>".$_GET['fecha']."</th>
                        <th style='background-color:#$back; padding:0px 50px;' align=left>".$fila['matricula']."</th>
            </tr>";
                   }
                   $salida.="</table></div>";
            
            }else{
                $salida="no hay datos de asistencias";
            }
            echo $salida;
            $mysqli->close();

           }else{
               echo $_GET['err'];
           }
           



       }
       ?>


       
       </center>

   </body>