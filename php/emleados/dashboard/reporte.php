<?php
    session_start();
    $usuario = $_SESSION['usuario'];
    if($usuario == null || $usuario = ""){
        header("Location: ../../../html/1login.html");
        die();
    }        
?>



<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
  $this->Image('logotra.png',10,8,16);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de empleados',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','B',12);
    $this->Cell(10,10,'#',1,0,'C', 0);
    $this->Cell(30,10,'nombre',1,0,'C', 0);
    $this->Cell(25,10,'apellido_p',1,0,'C', 0);
    $this->Cell(25,10,'apellido_m',1,0,'C', 0);
    $this->Cell(58,10,'correo electronico',1,0,'C', 0);
 
    $this->Cell(25,10,'telefono',1,0,'C', 0);
    $this->Cell(22,10,'puesto',1,1,'C', 0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Pagina '.$this->PageNo()).'/{nb}',0,0,'C');
}
}


require 'pdfcone.php';
 $consulta =  "SELECT * FROM empleados ";
  $resultado = $mysqli -> query($consulta);



$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);


while($row = $resultado -> fetch_assoc()){

  $pdf->Cell(10,10,$row['id_empleado'],1,0,'C', 0);
  $pdf->Cell(30,10,$row['nombre'],1,0,'C', 0);
  $pdf->Cell(25,10,$row['apellido_p'],1,0,'C', 0);
  $pdf->Cell(25,10,$row['apellido_m'],1,0,'C', 0);
  $pdf->Cell(58,10,$row['correo'],1,0,'C', 0);
 
  $pdf->Cell(25,10,$row['telefono'],1,0,'C', 0);
  $pdf->Cell(22,10,$row['puesto'],1,1,'C', 0);
  




}






$pdf->Output();
?>