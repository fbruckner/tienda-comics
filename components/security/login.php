<?php
session_start();
require_once("../conf.php");

if($con!=NULL){
    $usuario;
    $clave;

    if(isset($_POST['usuario']) and isset($_POST['pass'])){
        $usuario = mysqli_real_escape_string($con,$_POST['usuario']);
        $clave = mysqli_real_escape_string($con,$_POST['pass']);

        $consulta = "SELECT * FROM usuarios WHERE correo='$usuario'";

        $resultado = mysqli_query($con,$consulta);

        $datos = mysqli_fetch_array($resultado);

        if($datos == NULL){
            header("Location: ../../pages/registro.php?log=no");
        }

        if($datos['fk_estado'] == 1){
            $consulta_dos = "SELECT * FROM usuarios WHERE correo='$usuario' AND contrasena=MD5('$clave')";
            $resultado_dos = mysqli_query($con,$consulta_dos);
            $datos_dos = mysqli_fetch_array($resultado_dos);
            if($datos_dos == NULL){
                header("Location: ../../pages/registro.php?pass=no");
            }else{
                if($datos_dos['fk_tipo_usuario'] == 1){
                    $_SESSION = $datos_dos;
                    header("Location: ../../admin/index.php");
                }else if($datos_dos['fk_tipo_usuario'] == 2){
                    $_SESSION = $datos_dos;
                    header("Location: ../../user/panel.php");
                }
            }
        }else{
            header("Location: ../../pages/registro.php?bann=no");
        }
        

    }
}
?>