<?php
require_once("../../components/security/admin.php");
require_once("../../components/conf.php");

if($con!=NULL){
    $id;
    $deporte;
    if(isset($_GET['id']) and isset($_GET['deporte'])){
        $id = $_GET['id'];
        $deporte = $_GET['deporte'];

        $consulta = "UPDATE deportes SET deporte='$deporte' WHERE  id_deporte='$id'";

        mysqli_query($con,$consulta);

        header("Location: ../index.php");
    }
}
?>