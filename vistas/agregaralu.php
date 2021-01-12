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
<title>Agregar Alumno</title>
<center>
<table width=100% style="background-color:#28384E;border-radius:10px; padding:10px; border:2px solid #28384E; color:#fff">
  <tr>
    <th>
    
    <img alt="" height="80px" src="../img/tecnmBlanco.png">
    <br>
    <a href='menu.php' class='editar editar4'>
      MENU
    </a>
    </th>
    <th>
      <h1>
  AGREGAR ALUMNO
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
            <form action="../php/alumno.php" method="post">
            <table id="tabla1" width=100% style="border-radius:20px; padding:10px; border:2px solid #000000; background-color:#ecf2f8;">
                <tr>
                    <th colspan="3" style="background-color:#3366ff; border:2px solid #000066; color:#ffffff; border-radius:12px; "><?php echo "AGREGAR ALUMNO"; ?></th> 
                </tr>
                <tr>
                    <th colspan="1"  style="background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;" >                  
                    Nombre del alumno
                    
                    
                   </th>
                   <th rowspan="1" style="background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;"  >
                    Apellido paterno
                    
                    </th>
                    <th rowspan="1"  style="background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;" >
                   
                    Apellido materno
                    
                    </th>
                </tr> 
                <tr>
                  <th>
                    <input type="text" name="nombre" style='border-radius:20px;width:100%;height:30px;padding:10px;'>
                  </th>
                  <th> 
                    <input type="text" name="apePatAlu" style='border-radius:20px;width:100%;height:30px;padding:10px;'>
                  </th>
                  <th>
                    <input type="text" name="apeMatAlu" style='border-radius:20px;width:100%;height:30px;padding:10px;'>
                  </th>
                    
                </tr>
                <tr> 
                    <th  style="background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;" >
                    Matricula
                    </th>
                    <th rowspan="1"  style="background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;" >
                    Grupo
                    </th>
                    <th rowspan="1" style="background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;"  >
                    Carrera           
                    </th >
                </tr>
                <tr>
                  <th>
                    <input type="text" name="matricula" style="border-radius:20px; width:100%; height:30px; padding:10px;" >
                  </th>
                  <th>
                    <input type="text" name="grupo" style='border-radius:20px;width:100%;height:30px;padding:10px;'>
                  </th>
                  <th>
                    <input type="text" name="carrera" style='border-radius:20px;width:100%;height:30px;padding:10px;'>
                  </th>
                
                </tr>
                <tr>     
                    <th colspan="3" >
                    
                    <button class='editar editar2' type="submit"  name="Guardar"  style="">Guardar</button>
                    </th>
                    
                </tr>
                
            <table>
            </form>
            <?php

            if(isset($_GET['err'])){
        if($_GET['err']=='1'){
            echo "necesita llenar todos los campos ";
        }else if($_GET['err']=='0'){
            echo"el registro se realizo con exito";
        }else if($_GET['err']=='2'){
            echo"alguno de los parametros no esta bien";
        }else if($_GET['err']=='3'){
            echo"el nombre ingresado ya existe";
        }else {
            echo"el usuario ingresado ya existe";
        }
    }
    ?>
    </center>
    </body>