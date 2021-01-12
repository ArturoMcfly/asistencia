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
<link rel="stylesheet" href="../css/styleAgregar.css">  
  <head>
    <title>Formato Fotesh-100</title>
    <center>
    <table width=100% style="background-color:#28384E;border-radius:10px; padding:10px; border:2px solid #28384E; color:#fff">
      <tr>
        <th> 
          <div class="container">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <img alt="" height="80px" src="../img/tecnmBlanco.png">
                </div>
              </div>
              <div class="face face2">
                <div class="content">                               
                  <a href="menu.php">MENU</a>
                </div>
              </div>
            </div>
          </div>
        </th>
        <th>
          <h1>FORMATO DE ASESORIAS <br>FO-TESH-100</h1>
        </th>
        <th>
          <div class="container1">
            <div class="card">
              <div class="face face1">
                <div class="content">
                  <img alt="" height="100px" width="150px"src="../img/teshlogo.png">
                </div>
              </div>
              <div class="face face2">
                <div class="content">                                 
                  <a href='../php/cerrarsesion.php'>SALIR</a>
                </div>
              </div>
            </div>
          </div>
        </th>
      </tr>
    </table>
    
    <br>
    </center>
</head>
<body>
  <center>
  <?php

      if(isset($_GET['err'])){
        if($_GET['err']=='1'){
        $idreporte= $_GET['id'];
          $salida="
          <form action='../php/guardarAs.php' method='post'>
          <table id='tabla2' width=100% style='border-radius:20px; padding:10px;  background-color:#ecf2f8;'>
          <tr>
                        <th colspan='6' style=' background-color:#3366ff; border:2px solid #000066; color:#ffffff; border-radius:12px; '>ASISTENCIA</th> 
                    </tr>
                    <tr>
                        <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;''>No.</th>
                        <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Actividades</th>
                        <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Grupo</th>
                        <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Alumno</th>
                        <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Fecha</th>
                        <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Matricula</th>
                        

                    </tr>
          <tr>
          <th >
          <input type='text' name='no' value='".$idreporte."'style='border-radius:20px;width:100%;height:30px;padding:10px;'>
          </th>
          <th >
          <input type='text' name='acti' value=''style='border-radius:20px;width:100%;height:30px;padding:10px;'>
          </th>
          <th >
          <input type='text' name='gru' value=''style='border-radius:20px;width:100%;height:30px;padding:10px;'>
          </th >
          <th>
          <input type='text' name='alu' value=''style='border-radius:20px;width:100%;height:30px;padding:10px;'>
          </th>
          <th >
          <input type='date' name='fe' value=''style='border-radius:20px;width:100%;height:30px;padding:10px;'>
          </th>
          <th>
          <input type='text' name='ma' value=''style='border-radius:20px;width:100%;height:30px;padding:10px;'>
          </th>
        </tr>
        <tr>
        
        
          <th colspan='6'>
            <button type='submit'  name='Insertar'  class='editar editar2'>Asistir </button>
            </th>
        </tr>
        
        
    </table>
    </form> 
    <form action='../Pdf/pdfReporte.php' method='post'>
    <table>
      <tr>
      <input type='text' value='".$idreporte."' name='id' hidden>
            <th colspan='6' style='background-color:#ffffff;border:2px solid #000066; color:#fff '>
            <button type='submit'  name='Insertar'  class='editar editar2'>Terminar reporte </button>
            </th>
      </tr>
    </table>
    </form>         
          ";

          echo $salida;
                



        }else{
          echo $_GET['err'];
      }

      }else{
        $salida="
        <form action='../php/Guardar.php' method='POST'>
                  <table id='tabla1' width=70% style='border-radius:20px; padding:10px;  background-color:#ecf2f8;'>
                      <tr style='width:100px; '>
                        <th colspan=2 style='background-color:#3366ff; border:2px solid #000066; color:#ffffff; border-radius:12px; '><?php echo 'Formato del reporte'; ?></th> 
                        
                      </tr>
                      <tr>
                          <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;' >No. de reporte
                          
                          </th>
                          <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Maestro
                          
                          </th>
                      </tr>
                      <tr>
                        <th>
                        <input type='text' name='numero' value='' disabled size=20 style='border-radius:20px;width:100%;height:30px;padding:10px;'>
                        </th>
                        <th>
                        <input type='text' name='Maestro' value='' size=10 style='border-radius:20px; width:100%; height:30px; padding:10px;' required>
                        </th>
                      
                      </tr>
                      </tr>
                          <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Ciclo escolar
                          
                          </th>
                          <th style='background-color:#ecf2f8; border:2px solid #ccccff; border-radius:12px;'>Fecha
                            
                      </tr>
                      <tr>
                        <th>
                          <input type='text' name='ciclo' value='' style='border-radius:20px;width:100%;height:30px;padding:10px;'>
                        </th>
                          
                        <th>
                          <input type='date' name='fecha' value='' style='border-radius:20px; width:100%; height:30px; padding:10px;'>  
                        </th>
                      </tr>
                      <tr>
                        <th colspan='6' style=' color:#ecf2f8 '>
                          <button type='submit'  name='Insertar'  class='editar editar2'>Guardar </button>
                          </th>
                          
                      </tr>
                      
                  </table> 
                  
                  </form> 
                  <br>
                  <br>";
        echo $salida;
      }
  ?>
</center>  
</body>
</html>
            