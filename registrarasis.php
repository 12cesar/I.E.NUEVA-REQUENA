<?php
    $id_usuario=$_GET['id_usuario'];
    $id_acta=$_GET['id_acta'];
    
    try {
        include 'inc/funciones/conexion.php';
        $stmt=$conn->prepare('SELECT id_asistencia, id_acta, id_usuario FROM tabla_registro_asistencia WHERE id_acta= ? AND id_usuario= ?');
        $stmt->bind_param('ss', $id_acta, $id_usuario);
        $stmt->execute();
        $stmt->bind_result($id_asistencia, $acta, $usuario);
        $stmt->fetch();
        if($id_asistencia)
        {
            

            echo "<script>
                alert('Ya registro asistencia');
                window.location= 'mostrarasistencia.php'
                </script>";
        }
        else{
            include 'inc/funciones/conexion.php';
            $stmt1=$conn->prepare('INSERT INTO tabla_registro_asistencia (id_acta, id_usuario) VALUES (?, ?)');
            $stmt1->bind_param('ss', $id_acta, $id_usuario);
            $stmt1->execute();
            if($stmt1->affected_rows==1)
            {
                echo "<script>
                alert('Se registro su asistencia');
                window.location= 'mostrarasistencia.php'
                </script>";
            }
        }
        $stmt->close();
        $stmt1->close();
        $conn->close();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>