<?php
session_start();
?>
<?php
if(isset($_SESSION['usr'])){

}else{
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/styleMenu.css">  
<head>      
    <title>Menú</title>
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
                    <h1>MENU PRINCIPAL</h1>
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
</head>
<body>   
    <center>
    <br>
        <table id="tabla1" width=100% style="border-radius:20px; padding:10px; border:2px solid #000066; background-color:#fff;">
            <tr>
                <th>
                    <button type="button" class="editar editar4" onclick="window.location.href='Agregarenformato.php'">FORMATO FOTESH-100</button>
                </th>
                <th>
                    <button type="button" class="editar editar4" onclick="window.location.href='fo.php'"> REPORTE DE ASISTENCIA <br> </button>
                </th>
                <th>
                    <button type="button" class="editar editar4" onclick="window.location.href='agregaralu.php'">AGREGAR NUEVO ALUMNO</button>
                </th>
                <th>
                    <button type="button" class="editar editar4" onclick="window.location.href='agregarprf.php'">AGREGAR NUEVO PROFESOR</button>
                </th>
                <th>
                    <button type="button" class="editar editar4" onclick="window.location.href='buscaProfesor.php'">BUSCAR PROFESOR</button>
                </th>
                <th>
                <button type="button" class="editar editar4" onclick="window.location.href='buscaAlumno.php'">BUSQUEDA DE ALUMNO</button>
                </th>
                        <th>
                </th>
            </tr>
        </table> 
    <br>
<br>
<br>
</center>
</div>
</div>
</body>
</html>
