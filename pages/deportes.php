<?php
require_once("../components/conf.php");
include_once("../components/header.php");
if($con!=NULL){

    $id;
    if(isset($_GET['id'])){

      $id = $_GET['id'];

    //print "<h1 style=text-align:center>Artículos deportivos</h1>";

    $consulta_dos = "SELECT * FROM articulos WHERE fk_deporte='$id'";

    $resultado_dos = mysqli_query($con,$consulta_dos);

    if($resultado_dos!=NULL){
        print "<ul>";
        while($filas = mysqli_fetch_array($resultado_dos)){
         print "<li>
         <h3>$filas[titulo]</h3>

         <figure>
               <img src=../imgs/$filas[imagen] width=150>
         </figure>

         <a href=articulos.php?id=$filas[id_articulo]>Ver artículo</a></li>";
        }
        print "</ul>";
    }
}
}else{
    print "<h1>Algo se rompió!!!</h1>";
}
include_once("../components/footer.php");
?>