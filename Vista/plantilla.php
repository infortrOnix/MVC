<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--Js Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/ebf09d68b4.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-fluid">
        <h3 class="text-center py-3">Logo</h3>
    </div>

    <!-- Botones Nav-->

    <!--
        Variables GET : $_GET["nombrevariable"] son variables que se pasan
        como parametros via URL (tambien conocidas como cadena de consultas a
        traves de la URL)
        Cuando es la primera se la separa con el "?"
        las que la siguen se separana con el "&"
    -->


    <!--activamos el boton de acuerdo al enlace seleccionado-->


    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">


            

                <!-- ini cotrol de boton activado -->

                <?php if ($_GET["pagina"] == "registro") { ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                    </li>

                <?php } else { ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=registro" class="nav-link ">Registro</a>
                    </li>

                <?php } ?>

                <?php if ($_GET["pagina"] == "ingreso") { ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                    </li>

                <?php } else { ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=ingreso" class="nav-link ">Ingreso</a>
                    </li>

                <?php } ?>

                <?php if ($_GET["pagina"] == "inicio") { ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                    </li>

                <?php } else { ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=inicio" class="nav-link ">Inicio</a>
                    </li>

                <?php } ?>


                <?php if ($_GET["pagina"]=="salir") { ?>

                    
                    <li class="nav-item">
                        <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                    </li>
                    

                <?php } ?>

                <!-- fin cotrol de boton activado -->

            </ul>

        </div>
    </div>


    <!--Contenido -->

    <div class="container-fluid ">
        <div class="container py-5">
            <?php

            #verificamos si la variable GET esta inicializada, es decir envia datos

            if (isset($_GET["pagina"])) {

                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "salir"
                )
                    require_once "vista/modulos/" . $_GET["pagina"] . ".php";
            } else {

                require_once "vista/modulos/inicio.php";
            }

            ?>

        </div>
    </div>
    <!--fin contenido -->

</body>

</html>