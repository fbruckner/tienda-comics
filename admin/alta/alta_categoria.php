<?php
require_once("../../components/security/admin.php");
require_once("../../components/conf.php");

$deporte;
if(isset($_GET['deporte'])){
    $deporte = $_GET['deporte'];
    
    $consulta = "INSERT INTO deportes (deporte) VALUES ('$deporte')";

    mysqli_query($con,$consulta);

    header("Location: ../index.php");
}
?>