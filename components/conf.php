<?php
define('servidor','localhost');
define('usuario','root');
define('clave','');
define('base_de_datos','tienda-comics');
define('puerto','3306');

$con = mysqli_connect(servidor,usuario,clave,base_de_datos,puerto);

/*
if(!$con){
    die("<h1>No hay conexión!!!</h1>");
}else{
    echo "<h1>Hay conexión </h1>";
}
*/
?>