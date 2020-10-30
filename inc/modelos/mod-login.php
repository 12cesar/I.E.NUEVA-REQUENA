<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$tipo=$_POST['tipo'];

if($tipo==='login')
{
    include '../funciones/conexion.php';
        try {
          $stmt=$conn->prepare('SELECT id_usuario, nombre, apellido, usuario, password FROM tabla_usuario WHERE usuario= ?');
          $stmt->bind_param('s', $usuario);
          $stmt->execute();
          //logear usuario
          $stmt->bind_result($id_usuario,$nombre, $apellido, $usu, $pass_usuario);
          $stmt->fetch();
            if ($usu) {
                if ($pass_usuario==$password) {
                    //iniciar la sesion
                    session_start();
                    $_SESSION['usuario'] = $usu;
                    $_SESSION['nombre']=$nombre;
                    $_SESSION['apellido']=$apellido;
                    $_SESSION['id']=$id_usuario;
                    $_SESSION['login']=true;
                    $respuesta=array(
                        'respuesta'=>'correcto',
                        'usuario'=>$usu,
                        'password'=>$password,
                        'id'=>$id_usuario,
                        'columna'=>$stmt->affected_rows
                    );
                }else
                {
                    $respuesta=array(
                        'respuesta'=>'Error'
                    );
                }
                
            }else
            {
                $respuesta=array(
                    'respuesta'=>'Error'
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