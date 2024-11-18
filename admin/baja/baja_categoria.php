<?php
require_once("../../components/security/admin.php");
require_once("../../components/conf.php");

if($con!=NULL){
    $id;
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $consulta = "DELETE FROM deportes WHERE id_deporte='$id'";

        mysqli_query($con,$consulta);

        header("Location: ../index.php");
    }
}
?>