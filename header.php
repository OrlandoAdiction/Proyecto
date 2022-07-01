<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Plus+</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/estilos.css">
</head>
<body>
    <header>
        <div class="container cabecera">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html"><img class="<?php the_field('imagen_6'); ?>" src="" width="250px" alt=""></a> 
                </div>
                <div class="col-md-6 bxmenu1">
                    <ul class="menu1">
                        <li class="uno"><a href="menu.html">Menu</a></li>
                        <li class="uno"><a href="conciertos.html">Conciertos</a></li>
                        <li class="uno"><a href="tendencias.html">Tendencias</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                <form action="">
                        <button class="btn1"><a href="iniciarsesion.html">Iniciar Sesión</a></button>
                    </form>
                </div>
            </div>
        </div>
    </header>