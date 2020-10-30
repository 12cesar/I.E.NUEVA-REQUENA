<?php



    function mostrarcolegiado()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_colegiado, nombre_colegiado FROM tabla_colegiado');
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }

    function mostrarestado()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_estado, nombre_estado FROM tabla_estado');
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function mostraractas()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_acta, titulo, contenido, fecha, codigo, estado FROM tabla_actas');
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function mostraractasid($id)
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_acta, titulo, contenido, fecha, codigo, estado FROM tabla_actas WHERE id_acta='.$id);
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function mostrarasistencias()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_acta, titulo, contenido, fecha, codigo, estado FROM tabla_actas WHERE estado="Habilitado"');
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function mostrarusuario()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_usuario, nombre, apellido, usuario, password, firma FROM tabla_usuario');
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function mostrarusuarioid($id)
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT tabla_usuario.nombre, tabla_usuario.apellido, tabla_usuario.id_usuario FROM tabla_usuario INNER JOIN tabla_registro_asistencia ON tabla_usuario.id_usuario=tabla_registro_asistencia.id_usuario WHERE tabla_registro_asistencia.id_acta='.$id);
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function contarasistencias($id)
    {
        try {
            $conn=mysqli_connect('localhost','root','','ienractas');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              $sql="SELECT COUNT(*) `numero` FROM tabla_registro_asistencia WHERE id_acta=".$id;
              $resultado=mysqli_query($conn, $sql);
              $data=mysqli_fetch_assoc($resultado);
              return $data['numero'];
            
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        } 
    }
    

?>
