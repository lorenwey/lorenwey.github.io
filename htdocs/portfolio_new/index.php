<?php

$path_raiz = './';

?>

<!DOCTYPE html>
<html class="background-100-e">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114520810-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-114520810-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lorena Muns</title>
    <meta name="description" content="Onepage Parallax Site" />
    <meta name="keywords" content="onepage, parallax" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" href="bower_components/minicolors/jquery.minicolors.css" />
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick.css" />
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick-theme.css" />
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-custom.min.css" />
    <link rel="stylesheet" href="lib/linecons/style.css" />
    <link rel="stylesheet" href="styles/style.min.css" />
    <link rel="stylesheet" href="theme-custom.css" />
    <link rel="stylesheet" href="styles/my-style.css" />
    <link rel="icon" href="<?php echo $path_raiz; ?>img/4.png" type="image/png" sizes="16x16">

</head>
<body class="state1 background-100-e">

<div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect"><i class="fa fa-arrow-up"></i> Subir al <span class="highlight">Principio</span></a></div>
<div class="page-border left colors-e background-solid">

</div>

<div class="page-border right colors-e background-solid"></div>
<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
    <div class="container">
        <div class="navbar-header">
            <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
            <a class="navbar-brand" href="#">Lorena <span class="highlight">Muns</span></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="hover-effect">Inicio</a></li>
                <li><a href="#about" class="hover-effect">Sobre mí</a></li>
                <li><a href="#work" class="hover-effect">Portfolio</a></li>
                <li><a href="#skills" class="hover-effect">Conocimientos</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul id="dot-scroll" class="colors-e background-solid"></ul>
<div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
    <div class="overlay-control background-85-d">
        <a class="previos" href="#"></a>
        <a class="next" href="#"></a>
        <a class="cross" href="#"></a>
    </div>
    <div class="overlay-view"></div>
    <ul class="loader">
        <li class="background-100-d"></li>
        <li class="background-100-d"></li>
        <li class="background-100-d"></li>
    </ul>
</div>

<div class="overlay-window credits-overlay colors-g background-95-g">
    <div class="overlay-control background-85-d">
        <a class="cross" href="#"></a>
    </div>
    <div class="overlay-view">
        <div class="content-container">
        </div>
    </div>
</div>
<div class="gate colors-e background-solid">
    <div class="gate-bar background-heading-a"></div>
    <ul class="loader">
        <li class="background-100-g"></li>
        <li class="background-100-b"></li>
        <li class="background-100-f"></li>
    </ul>
</div>

<section id="home">
    <div class="view">

        <div class="content home-alice full-size colors-a background-transparent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 text-center"><img alt class="class="fluid-width"" src="<?php echo $path_raiz; ?>img/loren2.png" /></div>
                    <div class="col-md-5">
                        <div class="text-left textillate heading hidden-xs hidden-sm" data-textillate-options="{loop:true, in:{effect:'flipInY', reverse:true}, out:{effect:'flipOutY', reverse:true}}">
                            <ul class="texts">
                                <li>Project Manager</li>
                                <li>UX Designer</li>
                                <li>PHP Developer</li>
                            </ul>
                        </div>
                        <h3 class="heading text-left">Lorena Muns</h3>
                        <p class="text-left title highlight">
                            Apasionada por la gestión de proyectos con nuevos retos para lograr el frontend y el backend perfecto en base a las tecnologías más actuales. Siempre evolucionando!
                            <br><br>Fullstack developer con más de 6 años de experiencia en una start up de éxito donde he podido crecer y desarrollarme profesionalmente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="view">
        <img alt class="bg" src="images/bg/pexels/autumn-avenue-path-946.jpg" /><img alt class="bg" src="images/bg/pexels/autumn-avenue-path-946.jpg" />
        <div class="content colors-h">
            <div class="container">
                <h2>Sobre mí</h2>
                <div class="">
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_bulb"></i>
                        </div>
                        <div class="col-content">
                            <h4>Project <span class="highlight">Manager</span></h4>
                            <p>Gestión integral de proyectos de software con metodologías Agile. Desde la fase de análisis hasta su implantación y seguimiento posterior.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_lab"></i>
                        </div>
                        <div class="col-content">
                            <h4>UX <span class="highlight">Designer</span></h4>
                            <p>Prototipado, validación y test de usuarios para lograr el frontend más fácil de usar y orientado a la conversión más adecuada en cada situación.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_like"></i>
                        </div>
                        <div class="col-content">
                            <h4>PHP <span class="highlight">Developer</span></h4>
                            <p>Programación en PHP y MySQL también en backend, buscando la optimización del código, documentándolo y haciéndolo reutilizable y con calidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="work">
    <div class="view">
        <div class="content no-bottom-padding colors-e">
            <div class="container-fluid">
                <h2>Portfolio</h2>
                <p class="lead">Estos son algunos de los proyectos que he realizado tanto en mi entonrno laboral como en mis ratos libres.</p>
            </div>
            <div class="gallery background-e" data-default-group="all" data-overlay=".gallery-overlay">
                <div class="container-fluid">
                    <div class="row">
                        <div class="grid">
                            <div class="item col-sm-4 col-xs-6">
                                <a href="#!portfolio-item-1.html" class="hover-overlay">
                                    <img  src="<?php echo $path_raiz; ?>img/portfolio/reserva4.png" class="img-responsive" alt="Diseño 100% mobile" title="Diseño 100% mobile">
                                    <div class="overlay background-90-e">
                                        <div class="hidden-xs">
                                            <p class="title heading-e">Diseño 100% mobile</p>
                                            <p class="text-center"><i class="fa fa-mobile heading-e"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item col-sm-4 col-xs-6">
                                <a href="#!portfolio-item-2.html" class="hover-overlay">
                                    <img  src="<?php echo $path_raiz; ?>img/portfolio/unifomre.png" class="img-responsive" alt="Extranet de propietarios" title="Extranet de propietarios">
                                    <div class="overlay background-90-e">
                                        <div class="hidden-xs">
                                            <p class="title heading-e">Extranet de propietarios</p>
                                            <p class="text-center"><i class="fa fa-laptop heading-e"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item col-sm-4 col-xs-6" data-groups='["photography", "design"]'>
                                <a href="#!portfolio-item-3.html" class="hover-overlay">
                                    <img src="<?php echo $path_raiz; ?>img/portfolio/api2.png" class="img-responsive" alt="Integraciones API" title="Integraciones API">
                                    <div class="overlay background-90-e">
                                        <div class="hidden-xs">
                                            <p class="title heading-e">Integraciones API</p>
                                            <p class="text-center"><i class="fa fa-code heading-e"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item col-sm-4 col-xs-6" data-groups='["photography", "web", "video"]'>
                                <a href="#!portfolio-item-4.html" class="hover-overlay">
                                    <img src="<?php echo $path_raiz; ?>img/portfolio/motor2.png" class="img-responsive" alt="motor de reservas" title="Motor de reservas">
                                    <div class="overlay background-90-e">
                                        <div class="hidden-xs">
                                            <p class="title heading-e">Motor de reservas</p>
                                            <p class="text-center"><i class="fa fa-book heading-e"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item col-sm-4 col-xs-6" data-groups='["photography", "design"]'>
                                <a href="#!portfolio-item-5.html" class="hover-overlay">
                                    <img src="img/portfolio/zarlo.png" class="img-responsive" alt="Sistema de gestión" title="Sistema de gestión">
                                    <div class="overlay background-90-e">
                                        <div class="hidden-xs">
                                            <p class="title heading-e">Sistema de gestión</p>
                                            <p class="text-center"><i class="fa fa-desktop heading-e"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item col-sm-4 col-xs-6" data-groups='["photography", "web", "design"]'>
                                <a href="#!portfolio-item-6.html" class="hover-overlay">
                                    <img src="img/portfolio/tienda.png" class="img-responsive" alt="Tienda online" title="Tienda online">
                                    <div class="overlay background-90-e">
                                        <div class="hidden-xs">
                                            <p class="title heading-e">Tienda online</p>
                                            <p class="text-center"><i class="fa fa-shopping-cart heading-e"></i></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills">
    <div class="view">
        <img alt class="bg" src="images/bg/stocksnap/219FB68281.jpg" /><img alt class="bg" src="images/bg/stocksnap/219FB68281.jpg" />
        <div class="content colors-e">
            <div class="container">
                <h2>Conocimientos</h2>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="skillbars">
                            <div class="skillbar clearfix background-d" data-percent="80%">
                                <div class="skillbar-title background-20-e heading-c"><span>HTML5</span></div>
                                <div class="skillbar-bar background-20-e"></div>
                                <div class="skill-bar-percent heading-d">80%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="90%">
                                <div class="skillbar-title background-20-e heading-c"><span>CSS3</span></div>
                                <div class="skillbar-bar background-70-c"></div>
                                <div class="skill-bar-percent heading-d">90%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="90%">
                                <div class="skillbar-title background-20-e heading-c"><span>jQuery</span></div>
                                <div class="skillbar-bar background-20-e"></div>
                                <div class="skill-bar-percent heading-d">90%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="95%">
                                <div class="skillbar-title background-20-e heading-c"><span>PHP</span></div>
                                <div class="skillbar-bar background-70-c"></div>
                                <div class="skill-bar-percent heading-d">95%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="90%">
                                <div class="skillbar-title background-20-e heading-c"><span>MySQL</span></div>
                                <div class="skillbar-bar background-20-e"></div>
                                <div class="skill-bar-percent heading-d">90%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="80%">
                                <div class="skillbar-title background-20-e heading-c"><span>Boostrap</span></div>
                                <div class="skillbar-bar background-70-c"></div>
                                <div class="skill-bar-percent heading-d">80%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="65%">
                                <div class="skillbar-title background-20-e heading-c"><span>REST</span></div>
                                <div class="skillbar-bar background-20-e"></div>
                                <div class="skill-bar-percent heading-d">65%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="75%">
                                <div class="skillbar-title background-20-e heading-c"><span>Soap</span></div>
                                <div class="skillbar-bar background-70-c"></div>
                                <div class="skill-bar-percent heading-d">75%</div>
                            </div>
                            <div class="skillbar clearfix background-d" data-percent="65%">
                                <div class="skillbar-title background-20-e heading-c"><span>UX</span></div>
                                <div class="skillbar-bar background-20-e"></div>
                                <div class="skill-bar-percent heading-d">65%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="colors-g page-transition non-preloading">
    <div class="container scroll-in-animation" data-animation="fadeInDown">
        <div class="row">
            <div class="col-xs-6">
                <h4>Lorena <span class="highlight">Muns</span></h4>
                <p class="social-links">
                    <a  href="https://www.linkedin.com/in/lorena-muns-falcon" target="_blank"><i class="fa fa-linkedin"></i></a>
                </p>
            </div>
            <div class="col-xs-6">
                <h5>Ciudad actual</h5>
                <p>Zaragoza</p>
            </div>
        </div>
    </div>
    <div class="bottom text-center background-10-b">© 2018 - Lorena Muns</div>
</footer>

<script>if(typeof(atob)=="undefined"){document.write('<script src="lib/stringencoders-v3.10.3/javascript/base64.js"><\/script>');var atob=function(x){return base64.decode(x);}}</script>
<script src="bower_components/less.js/dist/less.min.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="lib/tween/tween.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/modernizr/modernizr.js"></script>
<script src="lib/SmoothScroll-1.2.1/SmoothScroll.js"></script>
<script src="bower_components/jquery-cookie/jquery.cookie.js"></script>
<script src="bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>
<script src="bower_components/minicolors/jquery.minicolors.min.js"></script>
<script src="bower_components/slick.js/slick/slick.min.js"></script>
<script src="bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
<script src="bower_components/textillate/assets/jquery.lettering.js"></script>
<script src="bower_components/textillate/assets/jquery.fittext.js"></script>
<script src="bower_components/textillate/jquery.textillate.js"></script>
<script src="lib/prism/prism.js"></script>
<script>(function(){var disableMobileAnimations=true;var isWin=navigator.appVersion.indexOf("Win")!==-1;if(isWin)$('html').addClass('win');var ua=navigator.userAgent.toLowerCase();var isChrome=ua.indexOf('chrome')>-1;if(isChrome)$('html').addClass('chrome');var isAndroidBrowser4_3minus=((ua.indexOf('mozilla/5.0')>-1&&ua.indexOf('android ')>-1&&ua.indexOf('applewebkit')>-1)&&!(ua.indexOf('chrome')>-1));if(isAndroidBrowser4_3minus)$('html').addClass('android-browser-4_3minus');var isSafari=!isChrome&&ua.indexOf('safari')!==-1;if(isSafari)$('html').addClass('safari');var isMobile=Modernizr.touch;if(isMobile){$('html').addClass('mobile');if(disableMobileAnimations)$('html').addClass('poor-browser');}else{$('html').addClass('non-mobile');}if(isWin&&isSafari){$('html').addClass('flat-animation');}})();</script>
<script src="scripts/script-bundle.js"></script>
<script>if(Function('/*@cc_on return document.documentMode===9@*/')()){$('html').addClass('ie9');}if(Function('/*@cc_on return document.documentMode===10@*/')()){$('html').addClass('ie10');}if(!!navigator.userAgent.match(/Trident.*rv\:11\./)){$('html').addClass('ie11');}</script>
</body>
</html>
