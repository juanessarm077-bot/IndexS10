<?php
require("../librerias/fpdf/fpdf.php");
include_once '../Configuraciones/bd.php';
$conexionBD = BD::crearinstancia();

function agregarTexto($pdf,$texto,$x,$y,$align='L',$fuente,$size = 10,$r=0,$g=0,$b=0) {
    $pdf->SetFont($fuente, "", $size);
    $pdf->SetXY($x,$y);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(0,10,$texto,0,0,$align);
}

function agregarImagen($pdf,$imagen,$x,$y){ 
    $pdf->Image($imagen, $x, $y,0);
}



$idCurso = isset($_GET['idcurso']) ? $_GET['idcurso'] : '';
$idAlumno = isset($_GET['idalumno']) ? $_GET['idalumno'] : '';

$sql="SELECT alumnos.nombre, alumnos.apellidos, cursos.nombre_curso 
FROM alumnos, cursos WHERE alumnos.id=:idalumno AND cursos.id=:idcurso";
$consulta=$conexionBD->prepare($sql);
$consulta->bindParam(':idalumno',$idAlumno);
$consulta->bindParam(':idcurso',$idCurso);
$consulta->execute();
$alumno=$consulta->fetch(PDO::FETCH_ASSOC);



$pdf = new FPDF("L","mm",array(250,194));
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
agregarImagen($pdf,"../src/certificado_.jpg",0,0);
agregarTexto($pdf,ucwords(utf8_decode($alumno['nombre']." ".$alumno['apellidos'])),60,70,'L',"Arial",30,0,84,115);
agregarTexto($pdf,$alumno['nombre_curso'],-250,115,'C',"Helvetica",20,0,84,115);
agregarTexto($pdf,"Fecha: ".date("d/m/Y"),-250,150,'C',"Helvetica",11,0,84,115);

$pdf->Output();


print_r($alumno['nombre']." ".$alumno['apellidos']);
print_r($alumno['nombre_curso']);

?>