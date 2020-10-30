<?php
    $colegiado=$_POST['colegiado'];
    $codigo=$_POST['codigo'];
    $fecha=$_POST['fecha'];
    $estado=$_POST['estado'];
    $contenido=$_POST['contenido'];
    $tipo=$_POST['tipo'];
    $id=$_POST['id'];
    if ($tipo==="editaracta") {
        
        include '../funciones/conexion.php';
        try {
          $stmt=$conn->prepare('UPDATE tabla_actas SET titulo= ?, contenido= ?, fecha= ?, codigo= ?, estado= ?  WHERE id_acta= ?');
          $stmt->bind_param('ssssss', $colegiado, $contenido, $fecha, $codigo, $estado, $id);
          $stmt->execute();
          if ($stmt->affected_rows==1) {
            $respuesta=array(
              'respuesta'=>'correcto'
            );
          }else
          {
            $respuesta=array(
              'respuesta'=>'error'
            );
          }
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