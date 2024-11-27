
<?php
    //conectar con el servidor
    $conectar = @mysqli_connect('localhost','Yutnu','1318','cfecitas');
    //verificar conexion
    if(!$conectar){
        die("No se pudo conectar con el servido: ".mysqli_connect_error());
    }else{
        $base = mysqli_select_db($conectar, 'cfecitas');
        if(!$base)
        {
            echo"No se encontro la base de datos";
        }
    }
    //recuperar variables
    $numero_servicio = $_POST['numero_servicio'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $telefono_usuario = $_POST['telefono_usuario'];
    $correo_usuario = $_POST['correo_usuario'];
    $motivo_cita = $_POST['motivo_cita'];
    $dia_cita = $_POST['dia_cita'];
    $hora_cita = $_POST['hora_cita'];
    $base_datos = "INSERT INTO citas (numero_servicio,nombre_usuario,telefono_usuario,correo_usuario,motivo_cita,dia_cita,hora_cita) VALUES ('$numero_servicio','$nombre_usuario','$telefono_usuario','$correo_usuario','$motivo_cita','$dia_cita','$hora_cita')";
    //ejecutamos
    $ejecutar = mysqli_query($conectar,$base_datos);
    //verificar
    if(!$ejecutar)
    {
        echo "Error".mysqli_error($conectar);
    }
?>