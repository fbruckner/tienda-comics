<?php
require_once("../conf.php");

if($con!=NULL){
    $nombre;
    $apellido;
    $usuario;
    $clave_uno;
    $clave_dos;

    if(isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['email'])
    and isset($_POST['clave']) and isset($_POST['clave_dos'])){
                  //print "Te podes registrar";
                  $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
                  $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
                  $usuario = mysqli_real_escape_string($con, $_POST['email']);
                  $clave_uno = mysqli_real_escape_string($con, $_POST['clave']);
                  $clave_dos = mysqli_real_escape_string($con, $_POST['clave_dos']);

                  if($clave_uno == $clave_dos){
                    //print "Te podes registrar";
                    $consulta = "SELECT * FROM usuarios WHERE correo='$usuario'";
                    $resultado = mysqli_query($con, $consulta);

                    if(mysqli_num_rows($resultado) > 0){
                        header("Location: ../../pages/registro.php?error_tres=ok");
                    }else{
                        $insertar = "INSERT INTO usuarios( nombre, apellido, correo, contrasena, fk_estado, fk_tipo_usuario) VALUES ('$nombre','$apellido','$usuario',MD5('$clave_uno'),'1','2')";

                        if(mysqli_query($con, $insertar)){
                            header("Location: ../../pages/registro.php?reg=ok");
                        }
                    }
                  }else{
                    header("Location: ../../pages/registro.php?error_dos=ok");
                  }
    }else{
        header("Location: ../../pages/registro.php?error_uno=ok");
    }

}
?>