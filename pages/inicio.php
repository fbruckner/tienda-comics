<?php
include_once("../components/header.php");
require_once("../components/conf.php");
if($con!=NULL){
    print "<h1 class=titulo>Artículos deportivos</h1>";

    $consulta_dos = "SELECT * FROM articulos";

    $resultado_dos = mysqli_query($con,$consulta_dos);

    if($resultado_dos!=NULL){
        print "<ul class=row>";
        while($filas = mysqli_fetch_array($resultado_dos)){
         print "<li class=col-4>

                        <div class=card style=width: 18rem;>
                <img src=../imgs/$filas[imagen] width=150>
                <div class=card-body>
                    <h3 class=card-title>$filas[titulo]</h3>
                    <a href=articulos.php?id=$filas[id_articulo] class=btn btn-primary>Ver artículo</a>
                </div>
                </div>
             </li>";
                
         
        }
        print "</ul>";
    }
}else{
    print "<h1>Algo se rompió!!!</h1>";
}
include_once("../components/footer.php");
?>
<style>
    .titulo{
        text-align:center;
        margin-bottom:50px;
        color:orange;
    }
    ul li{
        list-style-type:none;
    }
</style>