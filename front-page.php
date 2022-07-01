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

    <div class="container presentacion">
        <div class="row">
            <div class="col-md-7">
                <h1 class="frase1"><?php the_field("primer_enunciado");?></h1>
            </div>
            <div class="col-md-5">
                <h4 class="frase2">
                <?php the_field("segundo_enunciado");?>
                </h4>
            </div>
            <center><form  action="buscar">
              <input class="barrabuscar" type="text">
                <button class="btn2">Buscar</button>
            </form>          </center>
        </div>
    </div>

    <div class="container categorias">
        <div class="row">
            <h1 class="frase3"><?php the_field("titulo_principal");?></h1>
            <H4 class="frase4"><?php the_field("titulo_secundario");?></H4>

            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <?php $imagen_1 = get_field('imagen_1'); ?>
                            <a href="rock.html"><img src="<?php echo $imagen_1['sizes']['categorias']; ?>" width="200px" alt=""></a>
                            <h4>ROCK</h4>
                        </div>
                        <div class="col-sm-3">
                            <?php $imagen_1 = get_field('imagen_2'); ?>
                            <a href="Trap.html"><img src="<?php echo $imagen_1['sizes']['categorias']; ?>" width="200px" alt=""></a>
                            <h4>TRAP</h4>
                        </div>
                        <div class="col-sm-3">
                            <?php $imagen_1 = get_field('imagen_3'); ?>
                            <a href="Bachata.html"><img src="<?php echo $imagen_1['sizes']['categorias']; ?>" width="200px" alt=""></a>
                            <h4>BACHATA</h4>
                        </div>
                        <div class="col-sm-3">
                            <?php $imagen_1 = get_field('imagen_4'); ?>
                            <a href="Reggaeton.html"><img src="<?php echo $imagen_1['sizes']['categorias']; ?>" width="200px" alt=""></a>
                            <h4>REGUETON</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <button class="btn3">
                        <a href="categorias.html">
                            MÁS CATEGORIAS
                        </a>
                    </button>
                </div>                
            </div>
        </div>
    </div>
    
    <div class="container resgistrarse">
        <div class="row">
            <div class="col-md-5">
                <img class="chico" src="<?php $imagen_1 = get_field('imagen_5'); ?>" width="400px" alt="">
            </div>
            <div class="col-md-7">
                <h1 class="frase5"><?php the_field("tercer_enunciado");?></h1>

                <form class="registrar1" action="Suscribirse1">
                    <input class="email" type="text" name="email">
                    <button class="btn4"><a href="sucribirse1.html">Suscribirse</a></button>
                </form>
            </div>
        </div>
    </div>

    <div class="container canciones1">
        <div class="row">
            <div class="col-md-8 cancion1">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-4">
                                <a href=" <?php the_field('enlace_6');?>"><img class="Sola" src="<?php the_field('imagen_6'); ?>" width="150px" alt=""></a> 
                                <a href="<?php the_field('enlace_7');?>"><img class="ML" src="<?php the_field('imagen_7'); ?>" width="150px" alt=""></a> 
                            </div>
                            <div class="col-8">
                                <div class="tiago">
                                   <h4>Sola</h4>
                                    <form>
                                        <p class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                        --><label for="radio1">★</label><!--
                                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                        --><label for="radio2">★</label><!--
                                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                        --><label for="radio3">★</label><!--
                                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                        --><label for="radio4">★</label><!--
                                        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                        --><label for="radio5">★</label>
                                        </p>
                                    </form>
                                    <h5>Tiago pzk</h5> 
                                </div>
                                
                                <div class="SE">
                                    <h4>De Musica Ligera</h4>
                                    <form>
                                        <p class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                        --><label for="radio1">★</label><!--
                                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                        --><label for="radio2">★</label><!--
                                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                        --><label for="radio3">★</label><!--
                                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                        --><label for="radio4">★</label><!--
                                        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                        --><label for="radio5">★</label>
                                        </p>
                                    </form>
                                    <h5>Soda Estereo</h5>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-4">
                                <a href="<?php the_field('enlace_7')?>;"><img class="farsanta" src="<?php the_field('imagen_7'); ?>" width="150px" alt=""></a> 
                                <a href="https://www.youtube.com/watch?v=KXw8CRapg7k"><img class="queen" src="<?php the_field('imagen_10'); ?>" width="150px" alt=""></a> 
                            </div>
                            <div class="col-8">
                                <div class="romeo">
                                    <h4>El farsante</h4>
                                    <form>
                                        <p class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                        --><label for="radio1">★</label><!--
                                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                        --><label for="radio2">★</label><!--
                                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                        --><label for="radio3">★</label><!--
                                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                        --><label for="radio4">★</label><!--
                                        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                        --><label for="radio5">★</label>
                                        </p>
                                    </form>
                                    <h5>Romeo Santos ft. Ozuna</h5>
                                </div>
                                   
                                <div class="Queen">
                                    <h4>New of the world</h4>
                                    <form>
                                        <p class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                        --><label for="radio1">★</label><!--
                                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                        --><label for="radio2">★</label><!--
                                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                        --><label for="radio3">★</label><!--
                                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                        --><label for="radio4">★</label><!--
                                        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                        --><label for="radio5">★</label>
                                        </p>
                                    </form>
                                    <h5>Queen</h5>
                                </div>
                                    
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=10EX-_h4pYc"><img src="<?php the_field('imagen_11'); ?>" width="400px" alt=""></a> 
                <h3>Ojitos Lindos</h3>
                <form>
                    <p class="clasificacion">
                      <input id="radio1" type="radio" name="estrellas" value="5"><!--
                      --><label for="radio1">★</label><!--
                      --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                      --><label for="radio2">★</label><!--
                      --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                      --><label for="radio3">★</label><!--
                      --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                      --><label for="radio4">★</label><!--
                      --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                      --><label for="radio5">★</label>
                    </p>
                </form>
                <h5>Bad Bunny</h5>
            </div>
        </div>
    </div>
 
    <div class="container canciones2">
        <div class="row">
            <div class="col-md-4">
                <h1 class="elige"><?php the_field("cuarto_enunciado");?></h1>
                <h3 class="mayorinfo"><?php the_field("quinto_enunciado");?></h3>
                <form action="suscribirse2">
                    <button class="btn5"><a href="suscribirse2.html">Suscribirse</a></button>
                </form>
            </div>
            <div class="col-md-8 cancion2">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="https://www.youtube.com/watch?v=SRm2Ch4oFWs"><img src="<?php the_field('imagen_12'); ?>" width="300px" height="150px"  alt=""></a>
                        <h4>Pareja del año</h4>
                        <form>
                            <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                            </p>
                        </form>
                        <h5>Sebastian Yatra ft. Myke Towers</h5>
                    
                        <div class="row ChicoE">
                            <div class="col-3 estrella">
                            <a href="https://www.youtube.com/watch?v=796YqsAuzkM"><img src="<?php the_field('imagen_13'); ?>" width="100px"  alt=""></a>
                            </div>
                            <div class="col-9 duki1">
                                <h4>Chico estrella</h4>
                                <form>
                                    <p class="clasificacion">
                                    <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                    --><label for="radio1">★</label><!--
                                    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                    --><label for="radio2">★</label><!--
                                    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                    --><label for="radio3">★</label><!--
                                    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                    --><label for="radio4">★</label><!--
                                    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                    --><label for="radio5">★</label>
                                    </p>
                                </form>
                                <h5>Duki</h5>
                            </div>
                        </div>                        
                    </div>                
                    <div class="col-sm-6">
                    
                        <a href="https://www.youtube.com/watch?v=pk7ESz6vtyA"><img src="<?php the_field('imagen_14'); ?>" width="300px" height="150px" alt=""></a>
                        <h4>Winter Bear</h4>
                        <form>
                            <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                            </p>
                        </form> 
                        <h5>V(Taeyung)</h5>
                    
                        <div class="row Give">
                            <div class="col-3 She">
                            <a href="https://www.youtube.com/watch?v=W0yp3rSfx3I"><img src="<?php the_field('imagen_15'); ?>" width="100px"  alt=""></a>
                            </div>
                            <div class="col-9 duki2">
                                <h4>She don't give a fo</h4>
                                <form>
                                    <p class="clasificacion">
                                    <input id="radio1" type="radio" name="estrellas" value="5"><!--
                                    --><label for="radio1">★</label><!--
                                    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                                    --><label for="radio2">★</label><!--
                                    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                                    --><label for="radio3">★</label><!--
                                    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                                    --><label for="radio4">★</label><!--
                                    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                                    --><label for="radio5">★</label>
                                    </p>
                                </form>
                                <h5>Duki ft. Khea</h5>
                            </div>
                        </div>                 
                    </div>           
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container pie">
            <div class="row primera">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="menu2">
                        <li class="dos"><a href="index.html">Inicio</a></li>
                        <li class="dos"><a href="conciertos.html">Conciertos</a></li>
                        <li class="dos"><a href="tendencias.html">Tendencias</a></li>
                        <li class="dos"><a href="ayuda.html">Ayuda</a></li>
                    </ul>
                </div>
            </div>

            <div class="row ultima">
                <div class="col-md-3"></div>
                <div class="col-md-6">© 2022 Programadores 3</div>
                <div class="col-md-3">
                    <ul class="redes">
                        <li class="tres"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li class="tres"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li class="tres"><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
                    </ul>
                </div>            
            </div>
        </div>
    </footer>
</body>
</html>