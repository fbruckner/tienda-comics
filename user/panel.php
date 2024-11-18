<?php
session_start();
include_once("../components/header.php");
require_once("../components/conf.php");

if(!isset($_SESSION['id_usuario'])){
    header("Location: ../index.php");
}else{
   // var_dump($_SESSION);

    print "
            <h2>Bienvenido, $_SESSION[correo]</h2> 
    
           <div>
              <a href=logout.php>Salir</a>
           </div>";
}
?>
<form action="alta/alta.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo">
    </div>
    <div>
        <label for="contenido">Contenido</label>
        <textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="imagen">Cargar imagen</label>
        <input class="boton"type="file" name="imagen" id="imagen">
    </div>
    <?php
    if($con!=NULL){
        $consulta = "SELECT * FROM deportes";
        print "
              <div>
              <label for=deporte>Deporte</label>
              <select name=deporte id=deporte>
              <option>---------</option>
        
        ";

        $resultado = mysqli_query($con,$consulta);

        while($fila = mysqli_fetch_array($resultado)){
            print"<option value=$fila[id_deporte]>$fila[deporte]</option>";
        }
        print "
        
              </select>
               </div>

               <div>
                   <input type=hidden name=usuario value=$_SESSION[id_usuario]>               
               </div>
               <input type=submit class=boton>
        
        ";
    }
    include_once("../components/footer.php");
    ?>
    
</form>
<style>
    h2{
        color:orange;
    }
    .boton{
            background-color:orange;
            color:white;
            margin:5px;
            padding:10px;
            font-weight:bold;
            font-size: 15px;
            border-radius:5px;

        }
        .boton:hover{
            background-color:white;
            color:orange;
        }
</style>