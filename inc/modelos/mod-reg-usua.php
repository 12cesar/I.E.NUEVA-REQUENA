<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$tipo=$_POST['tipo'];

if ($tipo==="crearusuario") {
   
      include '../funciones/conexion.php';
        try {
          $stmt=$conn->prepare('INSERT INTO tabla_usuario (nombre, apellido, usuario, password) VALUES (?, ?, ?, ?)');
          $stmt->bind_param('ssss', $nombre, $apellido, $usuario, $password);
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