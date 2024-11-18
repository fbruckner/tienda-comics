<?php
require_once("../components/security/admin.php");
require_once("../components/conf.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>ABM - CRUD</title>
</head>
<body>
    <header>
        <h1>ABM - CRUD</h1>
    </header>
    <main>
        <section class="seccion">
            <article>
                <h2>Cargar género</h2>
                <form action="alta/alta_categoria.php" method="get">
                    <div>
                        <label for="" id="deporte">Género literario:</label>
                        <input type="text" id="deporte" name="deporte">
                    </div>
                    <div>
                        <input class="boton" type="submit" value="Grabar">
                    </div>
                </form>
            </article>
            <article class="articulo">
                <table class="tabla">
                    <caption>Género literario</caption>
                    <thead>
                        <tr>
                            <th>Género</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           if($con!=NULL){
                        
                            $consulta = "SELECT * FROM deportes";
                        
                            $resultado = mysqli_query($con,$consulta);
                        
                            if($resultado!=NULL){
                               
                                while($filas = mysqli_fetch_array($resultado)){
                                    print "<tr>";
                                    print "<td>$filas[deporte]</td>";
                                    print "<td><a href=modificacion/mod_categoria.php?id=$filas[id_deporte]>Modificar</a></td>";
                                    print "<td><a href=baja/baja_categoria.php?id=$filas[id_deporte]>Eliminar</a></td>";
                                    print "</tr>";
                                }
                                
                            }
                        }else{
                            print "<h1>Algo se rompió!!!</h1>";
                        }
                        ?>
                    </tbody>
                </table>
            </article>
        </section>
    </main>
    <style>
        h1{
            text-align:center;
            color:orange;
            font-family:arial;
        }
        .seccion{
            text-align:center;
            
        }
        .articulo{
            margin-top:50px;

        }
        .tabla{
            margin:auto;
        }
        caption{
            color:orange;
            font-size:25px;
            margin:10px 0px 10px 0px;
        }
        tr{
            font-size:20px;
            
        }
        label{
            font-size:20px;
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
    <?php
    include_once("../components/footer.php");
    ?>
</body>
</html>