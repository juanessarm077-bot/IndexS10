<?php
include_once '../Configuraciones/bd.php';
$conexionBD = BD::crearinstancia();

$id=isset($_POST['id']) ? $_POST['id'] : '';
$nombre_curso=isset($_POST['nombre_curso']) ? $_POST['nombre_curso'] : '';
$accion=isset($_POST['accion']) ? $_POST['accion'] : '';

if ($accion!='') {
  switch($accion){
    case 'agregar':
      if (!empty($nombre_curso)) {
        // Check if curso already exists
        $sqlCheck="SELECT id FROM cursos WHERE nombre_curso=:nombre_curso";
        $consultaCheck=$conexionBD->prepare($sqlCheck);
        $consultaCheck->bindParam(':nombre_curso',$nombre_curso);
        $consultaCheck->execute();
        if ($consultaCheck->rowCount() == 0) {
          $sql="INSERT INTO cursos (nombre_curso) VALUES (:nombre_curso)";
          $consulta=$conexionBD->prepare($sql);
          $consulta->bindParam(':nombre_curso',$nombre_curso);
          $consulta->execute();
        }
      }
    break;
    case 'editar':
      if (!empty($id) && !empty($nombre_curso)) {
        $sql="UPDATE cursos SET nombre_curso=:nombre_curso WHERE id=:id";
        $consulta=$conexionBD->prepare($sql);
        $consulta->bindParam(':id',$id);
        $consulta->bindParam(':nombre_curso',$nombre_curso);
        $consulta->execute();
      }
    break;
    case 'borrar':
      if (!empty($id)) {
        $sql="DELETE FROM cursos WHERE id=:id";
        $consulta=$conexionBD->prepare($sql);
        $consulta->bindParam(':id',$id);
        $consulta->execute();
      }
    break;
    case 'seleccionar':
      if (!empty($id)) {
        $sql="SELECT * FROM cursos WHERE id=:id";
        $consulta=$conexionBD->prepare($sql);
        $consulta->bindParam(':id',$id);
        $consulta->execute();
        $cursoSeleccionado=$consulta->fetch(PDO::FETCH_ASSOC);
        $nombre_curso=$cursoSeleccionado['nombre_curso'];
      }
    break;
     }
}

// Clear form after actions except seleccionar
if ($accion != '' && $accion != 'seleccionar') {
  $id = $nombre_curso = '';
}

$consulta=$conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();

?>