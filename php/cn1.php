<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asistencia_asesorias";

/*
$servername = "10.0.15.3";
$username = "tesh";
$password = "Sait35hBD@2017";
$dbname = "tesh";
*/
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*
$conn = new PDO('mysql:host= '.$servername.'; dbname='.$dbname, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''))
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

//$conn->close();
?>

<?php

$conn = new mysqli($servername, $username, $password, $dbname);

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

//printf("Conjunto de caracteres inicial: %s\n", $conn->character_set_name());

/* cambiar el conjunto de caracteres a utf8 */
if (!$conn->set_charset("utf8")) {
    //printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
} else {
    //printf("Conjunto de caracteres actual: %s\n", $conn->character_set_name());
}
?>

