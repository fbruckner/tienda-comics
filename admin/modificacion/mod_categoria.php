<?php
require_once("../../components/security/admin.php");
require_once("../../components/conf.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <section>
        <h2>Modificar</h2>
        <form action="mod_categoria_ok.php" method="get">
            <?php
              if($con!=NULL){
                $id;
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
            
                    $consulta = "SELECT * FROM deportes WHERE id_deporte='$id'";
            
                    $resultado = mysqli_query($con,$consulta);

                    while($fila = mysqli_fetch_array($resultado)){
                        print "
                           <input type=hidden value=$fila[id_deporte] name=id>
                           <label for=deporte>Deporte</label>
                           <input id=deporte type=text value=$fila[deporte] name=deporte>
                        ";
                    }
            
                }
            }
            ?>
            <input type="submit" value="Modificar">
        </form>
    </section>
</body>
</html>
<?php
include_once("../../components/footer.php");
?>