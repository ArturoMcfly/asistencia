<?php
$id_reporte=$_POST['id'];
require('fpdf.php');


class PDF extends FPDF
{

function Header()
{
    $this->Image('../img/gobierno-Edomex-1.jpg',10,8,50);
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(55);//poscicion de la celda
    // Título
    $this->Cell(90,10,"REPORTE DE ASESORIAS \n FO-TESH-100 ",1,0,'C');//Tamaño de la clda y mensaje, el 1 y 0 son el borde 
    
    $this->Image('../img/logo_TESH_J.png',160,8,33);
    // Salto de línea
    $this->Ln(10);
    $this->Cell(60);

}

function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-20);
    // Arial italic 8
    $this->SetFont('Arial','I',8);

    $this->Cell(90,10,utf8_decode('Nombre del profesor:'),1,0,'c',0); 
$this->Cell(90,10,utf8_decode('firma:'),1,0,'c',0);
$this->Ln(10);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');



}
}
require '../php/conexion.php';
$reporte="SELECT * FROM asesoria_reporte WHERE id_reporte LIKE '".$id_reporte."'";
$repor=$mysqli->query($reporte);


$consulta= "SELECT * FROM asesoria_asistencia WHERE no_reporte LIKE '".$id_reporte."'";
$resultado=$mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();//numero de pagina
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
//$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
$pdf->Ln(30);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,4,utf8_decode('No. de reporte'),1,0,'c',0); 
$pdf->Cell(46,4,utf8_decode('maestro'),1,0,'c',0);
$pdf->Cell(46,4,utf8_decode('ciclo escolar'),1,0,'c',0);
$pdf->Cell(40,4,utf8_decode('fecha'),1,1,'c',0); 



$fila=$repor->fetch_assoc();
$pdf->Cell(50,4,$fila['id_reporte'],1,0,'c',0); 
$pdf->Cell(46,4,$fila['id_profesor'],1,0,'c',0);
$pdf->Cell(46,4,$fila['ciclo'],1,0,'c',0);
$pdf->Cell(40,4,$fila['fecha'],1,1,'c',0);


$code=$id_reporte;
$pdf->Image('../codigos/'.$code.'.png',10,30,15);


$pdf->Ln(5);

$pdf->Cell(10,4,utf8_decode('No.'),1,0,'c',0); 
$pdf->Cell(54,4,utf8_decode('Actividades'),1,0,'c',0);
$pdf->Cell(15,4,utf8_decode('Grupo'),1,0,'c',0);
$pdf->Cell(50,4,utf8_decode('Alumno'),1,0,'c',0); 
$pdf->Cell(29,4,utf8_decode('Fecha'),1,0,'c',0); 
$pdf->Cell(24,4,utf8_decode('Matricula'),1,1,'c',0); 

while($row=$resultado->fetch_assoc()){

            $pdf->Cell(10,4,$row['id_asistencia'],1,0,'c',0); 
            $pdf->Cell(54,4,$row['actividad'],1,0,'c',0); 
            $pdf->Cell(15,4,$row['grupo'],1,0,'c',0);
            $pdf->Cell(50,4,$row['nombre_alumno'],1,0,'c',0);  
            $pdf->Cell(29,4,$fila['fecha'],1,0,'c',0);
            $pdf->Cell(24,4,$row['matricula'],1,1,'c',0);
            
         

        
    
}


$pdf->Output();

?>