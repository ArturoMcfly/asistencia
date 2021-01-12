<?php
  session_start();
  if(isset($_SESSION['usr'])){

  }else{
    header("location: ../index.php");
  }
?>

<head>
  <meta charset="UTF-8">
  <title>
  Profesores
  </title> 

  <html>
</head>
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
<body>
  <center>
  <section class="principal">
    <table width=100% style="background-color:#28384E; border-radius: 10px; padding: 10px; border: 2px solid #28384E; color: #fff">
      <tr>
        <th>
          <img src="../img/tecnmBlanco.png" alt="" height="80px">
          <br>
          <a href="menu.php" class='editar editar4'>
          MENU
          </a>


        </th>
        <th>
          <h1>
            BUSCAR PROFESOR
          </h1>
        
        </th>
        <th>
          <img src="../img/teshlogo.png" alt="" height="80px">
          <br>
          <a href="../php/cerrarsesion.php" class='editar editar4'>
          SALIR
          </a>
        </th>
      </tr>
    </table>

    <br>

    <div class="form-1-2">
    <label for="caja_busqueda" style="border: 2px solid #28384E; color:#fff; padding:10px; border-radius:20px; background-color: #28384E;">Buscar</label>
    <input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Nombre/No de profesor">
    
    </div>
    <br>
    <div id="datos">
    
    </div>
    <br>

  </section>
  </center>

  <script src="../js/js/jquery.min.js"></script>
<script src="../js/js/mainPr.js"></script>
</body>

</html>
