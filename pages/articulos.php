<?php
require_once("../components/conf.php");
include_once("../components/header.php");
if($con!=NULL){

    $id;
    if(isset($_GET['id'])){

    $id = $_GET['id'];

    $consulta = "SELECT * FROM articulos WHERE `id_articulo` = '$id'";

    $resultado = mysqli_query($con,$consulta);

    if($resultado!=NULL){
        print "<div>";
        while($filas = mysqli_fetch_array($resultado)){
         print "<h2>$filas[titulo]</h2>
                  <p>Fecha: $filas[fecha_creacion]</p>
                 <figure>
                     <img src=../imgs/$filas[imagen]>
                 </figure>
                 <p>$filas[cuerpo]</p>
        ";
        }
        print "</ul>";
    }
}
}else{
    print "<h1>Algo se rompió!!!</h1>";
}
include_once("../components/footer.php");
?>
