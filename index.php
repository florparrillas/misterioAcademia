<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script src="https://kit.fontawesome.com/4fc631efaf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Montserrat:wght@100;300;500;600;800;900&family=Orbitron:wght@400;500&disgit =swap"
        rel="stylesheet">
    <title>Academia de Magia</title>
</head>

<body>

    <!--Header Fijo-->
    <section class="secc-header">

        <header class="header-fix">
            <div class="c-fecha-curso">
                <div class="container fecha-curso-btn t-size-7">
                <img class="icon-var" src="img/calendar.png" alt="">
                <p class="fecha-prox-curso"> Proximo Curso : 18 de Septiembre</p>
                <button href="#reserva-curso" class="btn-negro btn-fino btn-w-9">Comprar Curso</button>
                 </div>
                
            </div>

            <div class=" logo-nav-container container">
                <div>
                    <p class="logo color-letra-gris t-size-4 t-weight-600">Misterio</p>

                    <p class="logo color-letra-gris t-size-7">Academia de Magia.</p>
                </div>

                <img class="menu-icon" src="img/menu-mobile.png" alt="">

                <nav class="navegador">
                    <ul class="nav-ul t-size-6">
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#curso">Curso</a></li>
                        <li><a href="#ilusionistas">Ilusionistas</a></li>
                        <li><a href="#testimonios">Testimonios</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </nav>

            </div>

        </header>
    </section>

    <!--Conteneor General de la LandingPage-->
    <div class="contenedor-lp">

        <!--Seccion Inicio con video PopUp-->
        
        

        <section class="secc-inicio conteiner" id="inicio">
            <div class="c-g-inicio">
                <div class=" boton-prueba btn-abrir-popup">
                    <a class="c-inicio-rel" data-fancybox href="https://www.youtube.com/watch?v=zJERdko_M4w&controls=0&autoplay=1&modestbranding=1">
                        <img class="img-play" src="img/play.png" alt="Play video misterio academia">
                    </a>
                </div>
            </div>
        </section>





        
        <!--Seccion Detalle Curso fondo Parallax -->
        
       

        <section class="secc-info-curso conteiner" id="curso">
                <!--Contenedor Gral de Secc Curso-->
                <div class="c-paralax-rel">
                    <div class="container pad-adaptable c-frase pad-top-3 pad-bottom-2">
                        <img class="icon-cal" src="img/idea.png" alt="">
                        <p class="interlineado t-weight-300 t-size-5">
                            "El Misterio es la sensación más bella que podemos experimentar". <strong class="t-size-7 t-weight-600"> Albert Einstein</strong>
                        </p>
                    </div>

                    <div class="c-gral-curso-video container pad-bottom-4">
                        <div class="detalle-curso ">

                            <div class="linea-separadora">
                                <p class="pad-adaptable pad-cajas interlineado t-weight-300 t-size-1 ">
                                    <strong class="t-weight-800">Curso de</strong> ilusionismo
                                </p>
                                <div class="pad-left">
                                    <p class="t-size-4 pad-bottom-1">
                                        Misterio // Academia de Magia
                                    </p>
                                    <div class="c-icon-texto">
                                        <img class="icon-cal" src="img/calendar.png" alt="">
                               
                                        <div class="t-det-curso t-size-7">
                                            <p class="">
                                            <strong>Martes, 18 de Septiembre 2020 // 18 hs.</strong> (de Argentina). </p>
                                            <p><strong>4 Encuentros online</strong> // 4 a 6 trucos por clase. </p>
                                            <p>Clases mediante <strong>Zoom</strong> </p>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="c-pagos-botones">
                                    <div class="pad-left">
                                        <p class="t-size-5 pad-cajas">
                                            Unico Pago <strong>$2.300,-</strong> Ars
                                        </p>
                                        <p class="t-size-5">
                                            <strong>Metodos de Pago:</strong>
                                        </p>

                                        <p class="t-size-8">
                                            Tarjeta (crédito, débito) // Pago Fácil <br>
                                            Trans. Bancaria // Paypal <br>
                                            Western union <br>
                                        </p>
                                    </div>
                                    <div class="">
                                        <div class="boton-pad">
                                            <button onclick="location.href='#preguntas'" class="btn-violeta btn-w-12">Mas Informacion</button>
                                        </div>
                                        <div>
                                            <button onclick="location.href='#reserva-curso'" class="btn-transparente btn-w-12">Comprar Curso</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>




                        <!--Contenedor magen de fondo con video-->
                        <div class="video-curso">
                            <div class=" boton-prueba btn-abrir-popup">
                                <a class="c-inicio-rel" data-fancybox href="https://www.youtube.com/watch?v=Ll86BbvPjJg">
                                    <img class="img-play" src="img/btn-p-b-azul.png" alt="Play video misterio academia">
                                </a>
                            </div>
                
                            <div class="overlay boton-prueba-overlay" >
                                <div class="popup boton-prueba-popup" >
                                    <div class="" >
                                        <a href="#"  class="btn-cerrar-popup boton-prueba-cerrar"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="video-container boton-prueba-video" ></div>
                                </div>
                            </div>
                        </div>



                        
            
                    </div>
                </div>
        </section>

        <!--Div para fondo Paralax, dentro seccion Ilusionistas y Preguntas Frecuentes -->
        <div class="fondo-paralax">

            <!--Seccion Ilusionistas y Preguntas Gral -->
            <div class="paralax-rel">

                <!--Seccion Ilusionistas -->
                <section class="secc-ilusionistas pad-secciones "  id="ilusionistas">
                
                    <div class="container pad-left">
                    
                        <p class=" pad-adaptable t-size-1 interlineado t-weight-300 pad-top-2">
                           <strong class="t-weight-900">Staff de</strong>  Profesores
                        </p>

                        <div class="cont-ilusionistas pad-cajas">
                            
                                <div class="con-gral-ilusionista">
                                    <div class="cont-img-ilusionista">
                                        <img class="img-ilus" src="img/mago1.png" alt="">
                                    </div>
                                    <div class="cont-info-ilusionista">
                                        <p class="t-size-5 t-weight-600">Marcelo Insúa</p>
                                        <p class="t-size-7">Premio mundial de invención.  </p>
                                        <div class="con-logo-redes">
                                            <div class="pad-right">
                                                <img class="logo-red-social" src="img/linkedin.png" alt="">
                                            </div>
                                            <div class="pad-right">
                                                <img class="logo-red-social" src="img/instagram.png" alt="">
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                          
                            
                            <div class="con-gral-ilusionista">
                                <div class="cont-img-ilusionista">
                                    <img class="img-ilus" src="img/mago2.JPG" alt="">
                                </div>
                                <div class="cont-info-ilusionista">
                                    <p class="t-size-5 t-weight-600">Martin Braessas</p>
                                    <p class="t-size-7">Conferencista Internacional.</p>
                                    <div class="con-logo-redes">
                                        <div class="pad-right">
                                            <img class="logo-red-social" src="img/linkedin.png" alt="">
                                        </div>
                                        <div class="pad-right">
                                            <img class="logo-red-social" src="img/instagram.png" alt="">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
    
                            
    
                            <div class="con-gral-ilusionista">
                                <div class="cont-img-ilusionista">
                                    <img class="img-ilus" src="img/mago3.png" alt="">
                                </div>
                                <div class="cont-info-ilusionista">
                                    <p class="t-size-5 t-weight-600">Rodrigo Romano</p>
                                    <p class="t-size-7">Campeón latinoamericano.</p>
                                    <div class="con-logo-redes">
                                        <div class="pad-right">
                                            <img class="logo-red-social" src="img/linkedin.png" alt="">
                                        </div>
                                        <div class="pad-right">
                                            <img class="logo-red-social" src="img/instagram.png" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="pad-cajas pad-left">
                            <p class="t-size-4 pad-cajas ">¿Listo para comenzar?</p>
                            <div class="cont-btn-enviar">
                                <button onclick="location.href='#reserva-curso'" class="btn-transparente btn-w-12">Comprar  Curso</button>
                            </div>
                        </div>
                    </div>
                    
                </section>
            
    
                <!--Seccion de Preguntas Frecuentes -->
                <section class="secc-preg-frec pad-bottom-2">
                
                    <div class="container ">
                        <div class=" pad-adaptable pad-cajas">
                            <p class="t-size-3 linea-separadora interlineado centrado pad">
                                <strong class="t-weight-600">Preguntas </strong> frecuentes
                            </p>
                        </div>
    
    
                        <div class="box-acordion">
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Qué vas a aprender?</p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        Magia pensada para los tiempos de hoy! Vas a poder realizar los efectos tanto por
                                        video/redes sociales como en vivo! Desde juegos interactivos, participativos donde todo
                                        el mundo sienta la magia en sus manos hasta juegos para sorprender en un mano a mano a
                                        quien vos quieras!
                                    </p>
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Qué elementos se usan?</p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        Magia con cartas, monedas, pañuelos, dados,bolas, bebidas,billetes,golosinas,celulares,mentalismo, apariciones, desapariciones, levitaciones, transformaciones y muchas cosas más!.
                                    </p>
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Cuándo empieza?</p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        Inicia: Martes 18 de Agosto 19.00hs. ( hora Argentina)
                                        Duración : 4 Clases distribuidas una vez por semana de 1.30 hs cada una
                                        Las clases se dictan con 3 Docentes en simultáneo donde se ven los juegos y se resuelven
                                        todas las dudas. Una vez terminada la clase les queda el video para poder repasarlo y
                                        verlo las veces que deseen. Unico requisito conexión a internet. Las clases se dictan a
                                        través de la plataforma Zoom.
                                    </p>
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Tengo que tener algun estudio previo?
                                    </p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        No hace falta tener conocimientos previos, ni comprar elementos extras. En las clases se
                                        ve todo lo necesario para poder realizar los efectos.
                                    </p>
    
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Cuantos trucos voy a aprender?</p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        Se aprenden entre 4 y 6 trucos por clase.
                                    </p>
    
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Estudié Magia antes, me va a servir el curso igual?
                                    </p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        Absolutamente. El curso está dado por los docentes más capacitados que vas a encontrar y
                                        se encuentran a la vanguardia de la Magia compartiendo los últimos secretos y los
                                        mejores guardados. Vas a aprender con detalles las mejores gemas de la Magia.
                                    </p>
    
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Hay reestriccion de edad?
                                    </p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        No! Cualquier edad es buena para arrancar con la Magia. Porque? Porque estimula la
                                        creatividad, genera confianza en uno mismo, es un entrenamiento para el cerebro y las
                                        manos! Hemos dado los cursos para personas de todas las edades!
    
                                    </p>
    
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Necesito tener destreza manual?</p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        No,No hace falta tener ninguna habilidad previa para aprender los trucos. El material
                                        está especialmente pensado y diseñado para que todos lo puedan aprender y realizar.
                                    </p>
                                </div>
                            </div>
    
                            <div class="c-indv-acordeon">
                                <a class="acordion">
                                    <p>¿Puedo regalarle el curso a alguien?
                                    </p>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                                <div class="contenido">
                                    <p>
                                        Claro! Es un regalo ideal para cualquier persona que le guste el arte de la Magia.
                                    </p>
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                </section>
            </div>

            
        </div>

        <!--Linea blanca de Separacion -->
        <div class="container linea-separadora"></div>
   
        <!--Seccion de Testimonios -->
        <section class="secc-testimonios pad-secciones pad-top-2" id="testimonios">

        
        
            <div class="container">
                <span id="testimonios" style="
                position: absolute;
                top: -142px;
                "></span>
                <p class="pad-adaptable t-size-3 t-weight-600 color-letra-gris pad-bottom-2">Testimonios</p>
                <div class="c-opinion-videos pad-cajas ">

                    <!--Contenedor magen de fondo con video popup-->
                    <div class="video-curso">
                            <div class=" boton-prueba btn-abrir-popup"   data-video="pV9wS8PqJVU">
                                <div class="c-inicio-rel">
                                    <img class="img-play" src="img/btn-p-b-rojo.png" alt="Play video misterio academia">
                                </div>
                            </div>
                
                            <div class="overlay boton-prueba-overlay" >
                                <div class="popup boton-prueba-popup" >
                                    <div class="" >
                                        <a href="#"  class="btn-cerrar-popup boton-prueba-cerrar"><i class="fas fa-times"></i></a>
                                    </div>
                                    <div class="video-container boton-prueba-video" ></div>
                                </div>
                            </div>
                        </div>

                    <div class="c-alumnos-opinan centrado pad-top">
                        <p class="interlineado">
                        <strong class="t-weight-800 t-size-1">Nuestros Alumnos</strong>
                        </p>
                        <p class="t-size-3 t-weight-300 interlineado pad-bottom-2">
                            OPINAN //
                        </p>
                        <div class="">
                            <div class=" linea-separadora-corta centrado"></div>
                            <p class="">
                                <strong>A tener en cuenta: </strong> <br>
                                Las vacantes son limitadas para poder tener un seguimiento <br>
                                de los alumnos y resolver todas sus dudas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Seccion Reserva Curso -->
        <section class="secc-reserva-curso " id="reserva-curso">
            <div class="container   con-gral-reserva pad-top">
                <div class="con-info-reserva ">
                    <div class=" ">
                        <p class=" pad-adaptable t-size-1 t-weight-300  interlineado  ">
                            <strong class="t-weight-800">Reservar</strong> Curso
                        </p>
                        <div class="">
                            <div class="pad-left">
                                <p class="t-size-4 pad-top-3">
                                    Misterio // Academia de Magia
                                </p>
                                <div class="c-icon-texto pad-top-3">
                                    <img class="icon-cal" src="img/calendar.png" alt="">
                                    <div class="t-det-curso t-size-7">
                                        <p class="">
                                        <strong>Martes, 18 de Septiembre 2020 // 18 hs.</strong> (de Argentina). </p>
                                        <p><strong>4 Encuentros online</strong> // 4 a 6 trucos por clase. </p>
                                        <p>Clases mediante <strong>Zoom</strong> </p>
                                    </div>
                                </div>
                            </div>
                
    
                            <div class="c-pagos-botones-c">
                                <div>
                                    <p class="t-weight-300 t-size-3 pad-cajas">
                                        Unico Pago <strong class="t-weight-800">$2.300,-</strong> Ars
                                    </p>
                                    <p class="t-size-5 t-weight-400 pad-cajas">
                                        <strong>Selecciona tu metodo de pago:</strong>
                                    </p>
    
                                    <div class="">
    
                                        <div class="pad-cajas-1 btn-pago">
                                            <div class="bla">
                                                <button onclick="location.href='https://www.facebook.com'" class="btn-negro btn-w-16 btn-grueso pad-right">Tarjeta de <br> Credito o Debito</button>
                                            </div>
                                            <div>
                                                <button onclick="location.href='https://www.facebook.com'" class="btn-negro btn-w-16 btn-grueso ">Paypal</button>
                                            </div>
                                        </div>
                                        <div class="pad-cajas-1 btn-pago">
                                            <div class="bla">
                                                <button onclick="location.href='https://www.facebook.com'" class="btn-negro btn-w-16 btn-grueso  pad-right">Pago Facil</button>
                                            </div>
                                            <div>
                                                <button onclick="location.href='https://www.facebook.com'" class="btn-negro btn-w-16 btn-grueso ">Transferencia <br> Bancaria</button>
                                            </div>
                                        </div>
                                        <div class="pad-cajas-1 btn-pago">
                                            <div class="bla">
                                                <button onclick="location.href='https://www.facebook.com'" class="btn-negro btn-w-16 btn-grueso pad-right">Western Union</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                       
 <!--Contenedor magen de fondo con video popup-->
 <div class="video-curso ">
     <div class=" boton-prueba btn-abrir-popup"   data-video="b5M6U2f_TOw">
         <div class="c-inicio-rel">
             <img class="img-play" src="img/btn-p-b-rojo.png" alt="Play video misterio academia">
         </div>
     </div>

     <div class="overlay boton-prueba-overlay" >
         <div class="popup-1 boton-prueba-popup" >
             <div class="" >
                 <a href="#"  class="btn-cerrar-popup boton-prueba-cerrar"><i class="fas fa-times"></i></a>
             </div>
             <div class="video-container boton-prueba-video" ></div>
         </div>
     </div>
 </div>
            </div>

        </section>


        <!--Seccion de Carrousel del Publico-->
        <section class="secc-casousel pad-top-2">
            <div class="Carousel  pad-cajas">
                <div class="pad-bottom-4 pad-top centrado container t-carrousel">
                    <p class=" pad-adaptable titulo-seccion interlineado t-size-1 t-weight-300">
                    <strong class="t-weight-800">Vive la</strong>  experiencia
                    </p>
                </div>

                <div class=" linea-separadora-gris"></div>

                <div class="slick-list  " id="slick-list">
                    <button class="slick-arrow slick-prev" id="button-prev">
                        <img class="flecha" src="img/f-izq.png" alt="">
                    </button>
                    <div class="slick-track" id="track">
                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_01.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_02.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_03.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_04.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_05.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_06.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_07.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        
                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_08.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                        <div class="slick">
                            <div>
                                <a href="">
                                    <picture>
                                        <img class="img-p" src="img/publico_09.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>

                    </div>
                    <button class="slick-arrow slick-next" id="button-next">
                        <img class="flecha" src="img/f-der.png" alt="">
                    </button>
                </div>

                <div class="linea-separadora-gris pad-cajas"></div>

            </div>
        </section>


        
        <!--Seccion Contacto-->
        <section class="secc-contacto" id="contacto">

            <div class="container c-contacto pad-secciones">
                
                <div class="centrado pad-adaptable">
                    <p class="t-size-3 pad-cajas">
                        Contacto
                    </p>
                    <p class="t-size-1 t-weight-800 interlineado pad-cajas">
                        <strong>¿QUEDARON DUDAS?</strong>
                    </p>
                    <p class="t-size-1">
                        HABLEMOS
                    </p>

                </div>

                <div class="con-redes-form pad-secciones">

                    <div class="formulario-contacto">
                        <form method="post" action="enviar.php">
                            <div class="formulario">
                                <div class="form-datos-personales">
                                    <div class="cont-info-usuario">
                                        <input placeholder=" Nombre" class="inp-nombre inp-info" type="text" name="nombre" required
                                         id=""> <span></span>
                                    </div>

                                    <div class="cont-info-usuario">
                                        <input placeholder=" Telefono" class="inp-telefono inp-info" type="number"
                                        name="telefono" required id=""> <span></span>
                                    </div>

                                    <div class="cont-info-usuario">
                                        <input placeholder="Email" class="inp-email inp-info" type="email" name="correo" required
                                        id=""> <span></span>
                                    </div>
                                </div>
                                <div class="form-mensaje">
                                    <div class="info-usuario">
                                        <textarea placeholder=" Deje aqui su mensaje" class="txt-msj-usuario" name="mensaje" required
                                            id=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-btn-enviar">
                                <input class="btn-transparente btn-enviar-m " type="submit" value="Enviar!" name="btnEnviar" id="btnEnviar">
                            </div>
                        </form>

                        <?php include("enviar.php") ?>

                    </div>

                    <div class="con-redes-sociales">
                        <div class="red-img-text">
                            <div class="cont-rs-contacto">
                                <img class="icon-red-social" src="img/linkedin.png" alt="">
                            </div>
                            <div>
                                <p>
                                    /academiademagia
                                </p>
                            </div>
                        </div>
                        <div class="red-img-text">
                            <div class="cont-rs-contacto">
                                <img class="icon-red-social" src="img/instagram.png" alt="">
                            </div>
                            <div>
                                <p>
                                    /academiademagia
                                </p>
                            </div>
                        </div>
                        <div class="red-img-text">
                            <div class="cont-rs-contacto">
                                <img class="icon-red-social" src="img/whatsapp.png" alt="">
                            </div>
                            <div>
                                <p>
                                    +54 11 5555 5555
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Boton de Whatsapp Flotante-->
        <section class="container">
            <div class="">
                    <a class="btn-float" target="_blank" href="https://web.whatsapp.com/"><img class="btn-wts" src="img/w-float.png" alt=""></a>
            </div>
        </section>

    

        
    </div>

    <section class="sec-footer container">
        <footer class="">
        <div class="footer-1">
            <div>
            <p class="logo t-size-6"> \ Misterio /</p>
            </div>
           <div>
           <p class="logo t-size-8">Academia de Magia</p>
           </div>
           
       </div>
        </footer>
       
    </section>

</body>
        <script src="js/utilidades.js"></script>
    
</html>