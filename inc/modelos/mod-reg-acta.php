<?php
    $colegiado=$_POST['colegiado'];
    $codigo=$_POST['codigo'];
    $fecha=$_POST['fecha'];
    $estado=$_POST['estado'];
    $contenido=$_POST['contenido'];
    $tipo=$_POST['tipo'];
    if ($tipo==="crearacta") {
        
        include '../funciones/conexion.php';
        try {
          $stmt=$conn->prepare('INSERT INTO tabla_actas (titulo, contenido, fecha, codigo, estado) VALUES (?, ?, ?, ?, ?)');
          $stmt->bind_param('sssss', $colegiado, $contenido, $fecha, $codigo, $estado);
          $stmt->execute();
          $respuesta=array(
            'respuesta'=>'correcto'
          );
          $stmt->close();
          $conn->close();
        } catch (Exception $e) {
          $respuesta=array(
            'respuesta'=>$e->getMessage()
          );
        }
    }
    
echo json_encode($respuesta);

?>