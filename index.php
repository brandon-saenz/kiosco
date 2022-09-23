<?php
// Modo produccion/desarrollo
// ini_set('display_errors', 1);
ini_set('display_errors', '0');

ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 7);
ini_set('xdebug.var_display_max_depth', -1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);

// Definir constante de dominio
// Ejemplo: http://localhost
define('DOMINIO', (strtolower(getenv('HTTPS')) == 'on' ? 'https' : 'http') . '://' . getenv('HTTP_HOST') . (($p = getenv('SERVER_PORT')) != 80 AND $p != 443 ? ":$p" : ''));

// Definir constante de la direccion
// Ejemplo: /website/
define('DIRECCION', parse_url(getenv('REQUEST_URI'), PHP_URL_PATH));

// Definir carpeta raiz del sistema
// Ejemplo: D:\wamp\www\website/
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');

// Definir la carpeta de aplicacion
// Ejemplo: D:\wamp\www\website/aplicacion/
define('APP', ROOT_DIR .'aplicacion/');

// Definir el locale para la p�gina
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");

// Definir la zona horaria
date_default_timezone_set('America/Tijuana');

// Definir un custom path para guardar las sesiones
ini_set('session.save_path', ROOT_DIR . 'data/sessions');

// Definir la decodificaci�n
// iconv_set_encoding("internal_encoding", "UTF-8");
mb_internal_encoding('UTF-8');

session_start();

// Definir URL Base
global $config;
define('STASIS', $config['base_url']);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <base href="<?php echo STASIS; ?>/">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Use title if it's in the page YAML frontmatter -->
        <title>Rancho Tecate</title>

        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <script
        src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        

        <!-- FRAMWORK MATERIALIZE CSS -->
        <link href="/pantallas/css/materialize.css" rel="stylesheet" type="text/css" />
        <script src="/pantallas/js/materialize.min.js" type="text/javascript"></script>
        
        <!-- ESTILOS Y FUNCIONES CUSTOM -->

        <link href="/pantallas/css/styles.css" rel="stylesheet" type="text/css" />
        <script src="/pantallas/js/scripts.js" type="text/javascript"></script>

        <!-- ASSETS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <link href="/pantallas/assets/logo.ico" rel="icon" type="image/x-icon" />

    </head>

    <body class="index">
        <div>
            <div class="div-center">
                <img class="img-rancho pointer" onclick="go_page(0)" src="assets/rancho-logo.svg">
                <img class="img-cobroplan pointer" style="position: absolute;" onclick="go_page(0)" src="assets/cobroplan-logo.svg">
            </div>
        </div>
        <div class="swiper body-swiper">
            <div class="swiper-wrapper">
                <!-- SOLICITUD DE SERVICIOS -->
                <div class="swiper-slide">
                    <div class="container-sm-mrg">
                        <div class="sub-container pointer" onclick="go_page(2)">
                            <div class="row m-b-off">
                                <div class="div-center">
                                    <p class="bold lfs-12 mfs-13 sfs-1 m-b-off text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>SI DESEAS GENERAR UNA </span>
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                        <span class="lfs-13 mfs-14 sfs-1 green-rancho x-bold">SOLICITUD DE SERVICIOS.</span>
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                    </p>
                                </div>
                            </div>
                            <div class="row -m-t-1">
                                <div class="div-center">
                                    <div class="bold text-center lfs-25 mfs-22 sfs-15 m-off">
                                        <p class="wood-rancho x-bold m-off -m-b-3"><span class="line-b">TOCA LA PANTALLA</span></p>
                                        <p class="wood-rancho x-bold m-off"><span class="line-b">PARA INICIAR</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m5 l4 div-center m-b-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 -m-t-1 m-b-off wood-rancho text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>Si deseas generar una solicitud de servicios desde la comodidad de tu casa, celular
                                            o tablet 
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold line-b pointer" onclick="go_page(2)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(2)">
                                                <img class="qr-img pointer" src="assets/qr-codes/solicitud_servicio.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="col m2 l4 pointer hide-on-small-and-down" onclick="go_page(2)" style="height: 20rem;"></div>
                            <div class="col s12 m5 l4 div-center -m-t-1 m-b-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 -m-t-3 m-b-off wood-rancho text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>
                                            Si tienes dudas de<br class="hide-on-large-only hide-on-extra-large-only ">
                                            como generar una solicitud de servicios
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold pointer" onclick="go_page(1)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <br>
                                        <span class="line-b pointer" onclick="go_page(1)">para ver las instrucciones</span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(1)">
                                                <img class="qr-img pointer" src="assets/qr-codes/yt_solicitud_servicio.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MINUTAS Y ACUERDOS -->
                <div class="swiper-slide">
                    <div class="container-sm-mrg">
                        <div class="sub-container pointer" onclick="go_page(3)">
                            <div class="row m-b-off">
                                <div class="div-center">
                                    <p class="bold lfs-12 mfs-13 sfs-1 m-b-off text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>SI DESEAS CONSULTAR </span>
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                        <span class="lfs-13 mfs-14 sfs-1 green-rancho x-bold">MINUTAS Y ACUERDOS</span>
                                        <br>
                                        <span>LOGRADOS EN NUESTRAS REUNIONES.</span>
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="div-center">
                                    <div class="bold text-center lfs-25 mfs-22 sfs-15 m-off">
                                        <p class="wood-rancho x-bold m-off -m-b-3"><span class="line-b">TOCA LA PANTALLA</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m5 l4 div-center m-b-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 m-b-off wood-rancho text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>Si deseas consultar minutas y acuerdos desde la comodidad de tu casa, celular
                                            o tablet 
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold line-b pointer" onclick="go_page(3)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(3)">
                                                <img class="qr-img pointer" src="assets/qr-codes/minutas.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="col m2 l4 pointer hide-on-small-and-down" onclick="go_page(3)" style="height: 20rem;"></div>
                            <div class="col s12 m5 l4 div-center m-b-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 -m-t-1 m-b-off wood-rancho text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>
                                            Si tienes dudas de<br class="hide-on-large-only hide-on-extra-large-only ">
                                            como generar una solicitud de servicios
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold pointer" onclick="go_page(1)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <br>
                                        <span class="line-b pointer" onclick="go_page(1)">para ver las instrucciones</span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(1)">
                                                <img class="qr-img pointer" src="assets/qr-codes/yt_solicitud_servicio.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CLAVE CATASTRAL -->
                <div class="swiper-slide">
                    <div class="container-sm-mrg">
                        <div class="sub-container pointer" onclick="go_page(4)">
                            <div class="row m-b-off">
                                <div class="div-center">
                                    <p class="bold lfs-12 mfs-13 sfs-1 m-b-off text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>SI DESEAS CONSULTAR ACTUALIZACIONES</span>
                                        <br>
                                        <span>REFERENTES A TU </span>
                                        <!-- <br class="hide-on-med-and-up hide-on-med-only"> -->
                                        <span class="lfs-13 mfs-14 sfs-1 green-rancho x-bold">CLAVE CATASTRAL.</span>
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                    </p>
                                </div>
                            </div>
                            <div class="row -m-t-1">
                                <div class="div-center">
                                    <div class="bold text-center lfs-25 mfs-22 sfs-15 m-off">
                                        <p class="wood-rancho x-bold m-off -m-b-3"><span class="line-b">TOCA LA PANTALLA</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m5 l4 div-center m-b-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 m-b-off -m-t-1 wood-rancho text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>Si deseas consultar actualizaciones de tu clave catastral desde la comodidad de tu casa, celular
                                            o tablet 
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold line-b pointer" onclick="go_page(4)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(4)">
                                                <img class="qr-img pointer" src="assets/qr-codes/catastral.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="col m2 l4 pointer hide-on-small-and-down" onclick="go_page(4)" style="height: 20rem;"></div>
                            <div class="col s12 m5 l4 div-center m-b-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 -m-t-1 m-b-off wood-rancho text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>
                                            Si tienes dudas de<br class="hide-on-large-only hide-on-extra-large-only ">
                                            como generar una solicitud de servicios
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold pointer" onclick="go_page(1)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <br>
                                        <span class="line-b pointer" onclick="go_page(1)">para ver las instrucciones</span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(1)">
                                                <img class="qr-img pointer" src="assets/qr-codes/yt_solicitud_servicio.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRÓXIMOS EVENTO -->
                <div class="swiper-slide">
                    <div class="container-sm-mrg">
                        <div class="sub-container pointer" onclick="go_page(5)">
                            <div class="row m-b-off">
                                <div class="div-center">
                                    <p class="bold lfs-12 mfs-13 sfs-1 m-b-off text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>SI DESEAS ENTERARTE DE LOS</span>
                                        <br>
                                        <span class="lfs-13 mfs-14 sfs-1 green-rancho x-bold">PRÓXIMOS EVENTOS.</span>
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                    </p>
                                </div>
                            </div>
                            <div class="row -m-t-1">
                                <div class="div-center">
                                    <div class="bold text-center lfs-25 mfs-22 sfs-15 m-off">
                                        <p class="wood-rancho x-bold m-off -m-b-3"><span class="line-b">TOCA LA PANTALLA</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 div-center m-b-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 m-b-off wood-rancho text-center">
                                        <span class="icon-green-arrow-rancho"></span>
                                        <span>Si deseas enterarte de los próximos eventos desde la comodidad de tu casa, celular
                                            o tablet 
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold line-b pointer" onclick="go_page(5)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(1)">
                                                <img class="qr-img pointer" src="assets/qr-codes/eventos.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COBROPLAN -->
                <div class="swiper-slide">
                    <div class="container-sm-mrg">
                        <div class="sub-container pointer" onclick="go_page(6)">
                            <div class="row m-b-off">
                                <div class="div-center">
                                    <p class="bold lfs-12 mfs-13 sfs-1 m-b-off text-center">
                                        <span class="icon-blue-arrow-rancho"></span>
                                        <span>PARA DUDAS REFERENTES A </span>
                                        <span class="blue-rancho x-bold">COBROPLAN.</span>
                                        <br>
                                        <span>PUEDES CONTACTAR DIRECTAMENTE A</span>
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                        <br class="hide-on-med-and-up hide-on-med-only">
                                    </p>
                                </div>
                            </div>
                            <div class="row -m-t-1">
                                <div class="div-center">
                                    <div class="bold text-center lfs-2 mfs-2 sfs-15 m-off">
                                        <p class="green-cobroplan x-bold m-t-5 m-b-off"><span>LIC. MARCO ROBLES</span></p>
                                        <p class="wood-rancho lfs-15 mfs-15 sfs-1 m-off">TEL (664) - 484 - 1922</p>
                                        <p class="wood-rancho lfs-15 mfs-15 sfs-1 m-off">mrobles@cobroplan.mx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m5 l4 div-center m-b-5 -m-t-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 m-b-off wood-rancho text-center">
                                        <span class="icon-blue-arrow-rancho"></span>
                                        <span>Si deseas atención directa vía WhatsApp desde la comodidad de tu casa, celular
                                            o tablet 
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold line-b pointer" onclick="go_page(6)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(6)">
                                                <img class="qr-img pointer" src="assets/qr-codes/wa_cobroplan.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="col m2 l4 pointer hide-on-small-and-down" onclick="go_page(0)" style="height: 20rem;"></div>
                            <div class="col s12 m5 l4 div-center m-b-5 -m-t-5">
                                <div class="row">
                                    <p class="bold sfs-1 mfs-09 lfs-11 -m-t-3 m-b-off wood-rancho text-center">
                                        <span class="icon-blue-arrow-rancho"></span>
                                        <span>
                                            Si tienes dudas de<br class="hide-on-large-only hide-on-extra-large-only ">
                                            como generar una solicitud de servicios
                                        </span>
                                        <br>
                                        <span class="wood-rancho x-bold pointer" onclick="go_page(1)">
                                            ESCANEA ESTE CÓDIGO QR
                                        </span>
                                        <br>
                                        <span class="line-b pointer" onclick="go_page(1)">para ver las instrucciones</span>
                                        <div class="div-center m-v-05">
                                            <div class="qr-rancho" onclick="go_page(1)">
                                                <img class="qr-img pointer" src="assets/qr-codes/yt_solicitud_servicio.svg">
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
        <footer class="footer-rancho" id="footer-rancho">
            <svg id="arrow_rancho" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                <polygon class="cls-1" points="59.5 0 59.5 256 196.5 128 59.5 0"/>
            </svg>
        </footer>
    </body>
</html>
