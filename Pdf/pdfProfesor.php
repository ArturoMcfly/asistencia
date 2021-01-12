<?php
require('fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
  
    // Arial bold 15
    $this->Image('../img/gobierno-Edomex-1.jpg',10,8,50);
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(55);//poscicion de la celda
    // Título
    $this->Cell(80,10,'PROFESORES REGISTRADOS',1,0,'C');//Tamaño de la clda y mensaje, el 1 y 0 son el borde
    $this->Image('../img/logo_TESH_J.png',160,8,33); 

    // Salto de línea
    $this->Ln(20);
    $this->Cell(20);
    $this->SetFont('Arial','B',8);
    $this->Cell(4,4,utf8_decode('id'),1,0,'c',0); 
    $this->Cell(20,4,utf8_decode('Nombre'),1,0,'c',0); 
    $this->Cell(30,4,utf8_decode('apellido paterno'),1,0,'c',0);
    $this->Cell(31,4,utf8_decode('apellido materno'),1,0,'c',0);  
    $this->Cell(35,4,utf8_decode('Numero de trabajador'),1,0,'c',0); 


    $this->Cell(30,4,utf8_decode('correo institucional'),1,1,'c',0); 
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Page ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require '../php/conexion.php';
$consulta= "SELECT * FROM asesorias_profesores";
$resultado=$mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();//numero de pagina
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
//$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
   
while($row=$resultado->fetch_assoc()){
    $pdf->Cell(20);
   $pdf->Cell(4,4,$row['id_profesor'],1,0,'c',0); 
   $pdf->Cell(20,4,$row['nombre_profesor'],1,0,'c',0); 
   $pdf->Cell(30,4,$row['paterno_profesor'],1,0,'c',0);
   $pdf->Cell(31,4,$row['materno_profesor'],1,0,'c',0);  
   $pdf->Cell(35,4,$row['No_de_empleado'],1,0,'c',0); 

   $pdf->Cell(30,4,$row['correo_ins'],1,1,'c',0); 

   

}
$pdf->Output();

?>