<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>
    <?php
require_once("../components/conf.php");

if($con!=NULL){
    //print "<h1 style=text-align:center>Deportes</h1>";

    $consulta = "SELECT * FROM deportes";

    $resultado = mysqli_query($con,$consulta);

    if($resultado!=NULL){
        print"<div class=barra>
            <nav class=navbar navbar-expand-lg bg-body-tertiary>
  <div class=container-fluid>
    <a class=navbar-brand href=../pages/inicio.php style=color:white;>Inicio</a>
    <button class=navbar-toggler type=button data-bs-toggle=collapse data-bs-target=#navbarNav aria-controls=navbarNav aria-expanded=false aria-label=Toggle navigation>
      <span class=navbar-toggler-icon></span>
    </button>
    <div class=collapse navbar-collapse id=navbarNav>
    ";
        while($filas = mysqli_fetch_array($resultado)){

            print "<a class=nav-link href=../pages/deportes.php?id=$filas[id_deporte]>$filas[deporte]</a>";
        }
    print"
         

        <a href=../pages/registro.php style=text-decoration:none>Registro</a>
    </div>
  </div>
</nav>
</div>
        ";
        
        
        
    }
}else{
    print "<h1>Algo se rompió!!!</h1>";
}
?>

    </header>
    <main class="container">

    <style>
        .barra{
            text-align:center;
        background-color:orange;
        padding:20px 0px 20px 0px;
        color:white;
        font-size:20px;
        }
    </style>

   