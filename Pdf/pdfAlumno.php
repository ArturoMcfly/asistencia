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
    $this->Cell(60);//poscicion de la celda
    // Título
    $this->Cell(70,10,'ALUMNOS REGISTRADOS',1,0,'C');//Tamaño de la clda y mensaje, el 1 y 0 son el borde
    $this->Image('../img/logo_TESH_J.png',160,8,33); 

    // Salto de línea
    $this->Ln(20);
    $this->Cell(20);
    $this->SetFont('Arial','B',8);
    $this->Cell(4,4,utf8_decode('id'),1,0,'c',0); 
    $this->Cell(20,4,utf8_decode('Nombre'),1,0,'c',0); 
    $this->Cell(30,4,utf8_decode('apellido paterno'),1,0,'c',0);
    $this->Cell(31,4,utf8_decode('apellido materno'),1,0,'c',0);  
    $this->Cell(25,4,utf8_decode('matricula'),1,0,'c',0); 
    $this->Cell(15,4,utf8_decode('grupo'),1,0,'c',0); 

    $this->Cell(25,4,utf8_decode('carrera'),1,1,'c',0); 
    
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
$consulta= "SELECT * FROM asesorias_alumno";
$resultado=$mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();//numero de pagina
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
//$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
   
while($row=$resultado->fetch_assoc()){
    $pdf->Cell(20);
   $pdf->Cell(4,4,$row['id_alumno'],1,0,'c',0); 
   $pdf->Cell(20,4,$row['nombre_alumno'],1,0,'c',0); 
   $pdf->Cell(30,4,$row['ape_pate_alum'],1,0,'c',0);
   $pdf->Cell(31,4,$row['ape_mat_alum'],1,0,'c',0);  
   $pdf->Cell(25,4,$row['matricula'],1,0,'c',0); 
   $pdf->Cell(15,4,$row['grupo'],1,0,'c',0); 
   $pdf->Cell(25,4,$row['carrera'],1,1,'c',0); 

   

}
$pdf->Output();

?>