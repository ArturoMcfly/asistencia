<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="icomoon/fonts/style.css">
    <link rel="stylesheet" href="css/styleIndex1.css">
  
    <table>
    <table width=100% style="background-color:#28384E;border-radius:10px; padding:10px; border:2px solid #28384E; color:#fff">
            <tr>
                <th>
                    <img alt="" height="80px" src="img/tecnmBlanco.png">
                    
                </th>
                <th>
                    <h1>
                    LOGIN
                    </h1>
                </th>
                <th>
                    <img alt="" height="80px" src="img/teshlogo.png">
                    
                </th>
            </tr>
    </table>
</head>

<body>
    <div class="form-area">
        <h2>
            Sistema  de reporte del
            <br>
            FO-TESH-100 para la asesoria
            <br>
            de estudiantes
        </h2>
        <br>
        <form action="php/login.php" method="post">
            <p>
            <span class="icon-user"></span>    
            Usuario</p>
            
            <input type="text" name="user" placeholder="Ingresa el Usuario">
            <p></p>
            <br>
            <p>
            <span class="icon-key"></span>    
            contraseña</p>
            <input type="password" name="pass" placeholder="Ingresa la contraseña">
            <p></p>
            <br>
            <input type="submit" value="Ingresa">



        </form>
    </div>
    
</body>
</html>