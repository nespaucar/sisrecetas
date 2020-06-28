<?php
    session_start();
    $user = "";
    $contra = "";

    if (!empty($_GET["usuario"])) {$user = $_GET["usuario"];}
    if (!empty($_GET["contrasena"])) {$contra = $_GET["contrasena"];}
    
    if($user == "admin" && $contra == "admin") { 
        ini_set("session.cookie_lifetime", "144000000");
        ini_set("session.gc_maxlifetime", "144000000");
        $_SESSION["sesion"] = "NESTOR ALEXANDER PAUCAR";
        $_SESSION["ids"] = "";
    }
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Recetas Al toque</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Street" />
        <meta name="keywords" content="Street" />
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320" />
        <!--Template style -->
        {!! Html::style('css/animate.css') !!}
        {!! Html::style('css/bootstrap.css') !!}
        {!! Html::style('css/font-awesome.css') !!}
        {!! Html::style('css/fonts.css') !!}
        {!! Html::style('css/flaticon.css') !!}
        {!! Html::style('css/owl.carousel.css') !!}
        {!! Html::style('css/owl.theme.default.css') !!}
        {!! Html::style('css/magnific-popup.css') !!}
        {!! Html::style('css/venobox.css') !!}
        {!! Html::style('css/style.css') !!}
        {!! Html::style('css/responsive.css') !!}
        <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
        <!-- Ionicons -->
        {!! Html::style('dist/css/ionicons.min.css') !!}
        <!-- DataTables -->
        {!! Html::style('plugins/datatables/dataTables.bootstrap.css') !!}
        <!-- Theme style -->
        {!! Html::style('dist/css/AdminLTE.min.css') !!}
        {!! Html::style('css/custom.css') !!}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        {!! Html::style('dist/css/skins/_all-skins.min.css') !!}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]-->
        {!! Html::script('dist/js/html5shiv.min.js') !!}
        {!! Html::script('dist/js/respond.min.js') !!}
        <!--[endif]-->
        {{-- bootstrap-datetimepicker: para calendarios --}}
        {!! HTML::style('dist/css/bootstrap-datetimepicker.min.css', array('media' => 'screen')) !!}

        {{-- para las fechas --}}
        {{--{!! HTML::style('dist/css/jquery-ui.css') !!}--}}

        {{-- typeahead.js-bootstrap: para autocompletar --}}
        {!! HTML::style('dist/css/typeahead.js-bootstrap.css', array('media' => 'screen')) !!}

        {{-- para los select pequeños con busqueda rápida --}}
        {!! HTML::style('dist/css/chosen.min.css') !!}    

        <!-- favicon links -->
        <link rel="shortcut icon" type="image/png" href="images/header/loader.gif" />
        <style>
            .lr_navigation_header_fixed {
                margin-bottom: 20px;
                margin-top: 20px;
                margin-left: 20px;
                margin-right: 20px;
            }
            .tt-dataset-0 span {
                font-size: 20px;
            }
            #ingredientes li a, #ingredientes li hr {
                padding-top: 2px;
                padding-bottom: 2px;
                margin-top: 2px;
                margin-bottom: 2px;
            }
            #ingredientes li:hover {
                background-color: #EAF2FA;
            }
            #ingredientes li hr {
                border-color:red;
            }
            .twitter-typeahead .tt-query,
            .twitter-typeahead .tt-hint {
                margin-bottom: 0;
                font-size: 14px;
            }
            .tt-hint {
                display: block;
                width: 100%;
                height: 38px;
                padding: 8px 12px;
                font-size: 14px;
                line-height: 1.428571429;
                color: #999;
                vertical-align: middle;
                background-color: #ffffff;
                border: 1px solid #cccccc;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
                      transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
            }
            .tt-dropdown-menu {
                min-width: 160px;
                margin-top: 2px;
                padding: 5px 0;
                background-color: #ffffff;
                border: 1px solid #cccccc;
                border: 1px solid rgba(0, 0, 0, 0.15);
                border-radius: 4px;
                -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
                      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
                background-clip: padding-box;
                font-size: 14px;

            }
            .tt-suggestion {
                display: block;
                padding: 3px 20px;
            }
            .tt-suggestion.tt-is-under-cursor {
                color: #fff;
                background-color: #428bca;
            }
            .tt-suggestion.tt-is-under-cursor a {
                color: #fff;
            }
            .tt-suggestion p {
                margin: 0;
                font-size: 20px;
            }
            .modal.fade{ 
                -webkit-transition: opacity .2s linear, none; 
                -moz-transition: opacity .2s linear, none; 
                -ms-transition: opacity .2s linear, none; 
                -o-transition: opacity .2s linear, none; 
                transition: opacity .2s linear, none; 
                top: 15%; 
            } 
            .move-eff {
                margin-top: 5%;
                margin-bottom: 5%;
                padding-top: 0%;
                padding-bottom: 0%;
            }
            .lr_blog_categories_main_wrapper {
                margin-top: 0%;
                margin-bottom: 0%;
                padding-top: 4%;
                padding-bottom: 4%;
            }
            .lr_bc_cate_sb_main_wrapper {
                padding-top: 5%;
                padding-bottom: 5%;
            }
        </style>    
    </head>

    <body>
        <!-- preloader Start -->
        <div id="preloader">
            <div id="status">
                <img src="images/header/loader.gif" id="preloader_image" alt="loader">
            </div>
        </div>
        <!-- color picker start -->
        <!--<div id="style-switcher">
            <div>
                <h3>Choose Color</h3>
                <ul class="colors">
                    <li>
                        <p class='colorchange' id='color'></p>
                    </li>
                    <li>
                        <p class='colorchange' id='color2'></p>
                    </li>
                    <li>
                        <p class='colorchange' id='color3'></p>
                    </li>
                    <li>
                        <p class='colorchange' id='color4'></p>
                    </li>
                    <li>
                        <p class='colorchange' id='color5'></p>
                    </li>
                    <li>
                        <p class='colorchange' id='style'></p>
                    </li>
                </ul>
            </div>
            <div class="bottom"> <a href="#" class="settings"><i class="fa fa-gear"></i></a> </div>
        </div>-->
        <!-- color picker end -->
        <!-- header and navigation Start -->
        <div class="lr_inner_header_navigation_main_wrapper">
            <div class="lr_navigation_header_fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="lr_logo_mian_wrapper">
                                <a href=""><img src="images/header/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <div class="lr_main_navigation_wrapper">
                                <nav class="main-menu navbar-expand-lg">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class=" dropdown"><a href=""><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                                                <!--<ul>
                                                    <li><a href="index.php">Nosotros</a></li>
                                                    <li><a href="index2.html">Home Two</a></li>
                                                    <li><a href="index3.html">Home Three</a></li>
                                                </ul>-->
                                            </li>
                                            <li onclick="cerrarsesion();"><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Cerrar Sesion</a></li>

                                            <li><a href="dashboard" target="_blank"><i class="fa fa-remove" aria-hidden="true"></i> Mantenimiento de Platos</a></li>
                                            <!--<li><a href="reservation.html">Reservation</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="dropdown"><a href="#">Event</a>
                                                <ul>
                                                    <li><a href="event.html">Event-Category</a></li>
                                                    <li><a href="event_single.html">Event-Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="menu.html">Menu</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog_category.html">Blog-Category</a></li>
                                                    <li><a href="blog_single.html">Blog Single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>-->
                                            <!--<li class="dropdown caret_btn"><a href="#"><i class="flaticon-shopping-cart"></i><span>02</span></a>
                                                <ul>
                                                    <li>
                                                        <div class="cc_cart_wrapper1 menu-button">
                                                            <div class="cc_cart_img_wrapper">
                                                                <img src="images/content/cart_img.jpg" alt="cart_img" />
                                                            </div>
                                                            <div class="cc_cart_cont_wrapper">
                                                                <h4><a href="#">Pakora</a></h4>
                                                                <p>Quantity : 2 × $45</p>
                                                                <h5>$90</h5>
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cc_cart_wrapper1 menu-button">
                                                            <div class="cc_cart_img_wrapper">
                                                                <img src="images/content/cart_img.jpg" alt="cart_img" />
                                                            </div>
                                                            <div class="cc_cart_cont_wrapper">
                                                                <h4><a href="#">Pakora</a></h4>
                                                                <p>Quantity : 2 × $45</p>
                                                                <h5>$90</h5>
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cc_cart_wrapper1 menu-button">
                                                            <div class="cc_cart_img_wrapper">
                                                                <img src="images/content/cart_img.jpg" alt="cart_img" />
                                                            </div>
                                                            <div class="cc_cart_cont_wrapper">
                                                                <h4><a href="#">Pakora</a></h4>
                                                                <p>Quantity : 2 × $45</p>
                                                                <h5>$90</h5>
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>-->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header and navigation End -->
        <!-- lr blog category left side Start -->
        <div class="lr_blog_categories_main_wrapper">
            <div class="container">
                <div class="row">                
                    <div class="col-lg-4 col-md-4 col-sm-11 col-xs-12">
                        <div class="lr_bc_right_sidebar_wrapper">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <!--<div class="lr_blog_right_search_wrapper">
                                        <input id="ingrediente" type="text" x-webkit-speech speech error onwebkitspeechchange="kinduff();" placeholder="Escribe un ingrediente o di uno">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>-->
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <input name="ingrediente" id="ingrediente" type="text" class="form-control input-lg" placeholder="Digita un ingrediente">
                                        </div>
                                        <!--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <button onclick="cargarPlatos();" class="btn btn-success btn-lg" type="submit"><i class="fa fa-search"></i></button>
                                        </div>-->
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <button data-toggle="modal" onclick="encenderMicro('1');" data-target="#myModal" onclick="javascript:{}" class="btn btn-warning btn-lg" type="submit"><i class="fa fa-microphone"></i></button>
                                        </div>
                                        <div class="text-center">
                                            <button class="lr-btn lr-ev-btn move-eff" type="button" onclick="cargarPlatos();"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="lr_bc_cate_sb_main_wrapper">
                                        <input type="hidden" id="cadenaids">
                                        <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
                                            <h2>Ingredientes<span></span></h2>
                                            <ul id="ingredientes">
                                            </ul>
                                            <br>
                                            <div class="text-right">
                                                <h4 id="mensvacio" style="color: blue;">Ingresa al menos un ingrediente</h4>
                                            </div>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="lr_bc_first_box_main_wrapper">
                                    <!--<div class="lr_bc_first_box_img_wrapper">
                                        <img src="images/content/blog/b1.jpg" alt="blog_img">
                                        <br><br>
                                    </div>-->
                                    <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                <h2>Te sugerimos<span></span></h2>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                <div class="text-right"><h5 style="color:green;"><b><i class="fa fa-certificate"></i> <font id="cantidadPlatos">0</font> Resultados</b></h5></div>
                                            </div>
                                        </div>                                        
                                    </div>  
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <thead style="background-color: #D6DBDA">
                                                    <tr>
                                                        <td width="50%" class="text-center">Plato</td>
                                                        <td width="20%" class="text-center">Total</td>
                                                        <td width="20%" class="text-center">Tienes</td>
                                                        <td width="10%" class="text-center">Ver</td>
                                                    </tr>
                                                </thead>
                                                <tbody id="cuerpo">
                                                    <tr style="background-color: #DBEDF8;">
                                                        <td colspan="4"><h4>Debes agregar al menos un ingrediente.</h4></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                                <div class="pager_wrapper lr_blog_pagi_wrapper">
                                    <ul class="pagination">
                                        <li><a href="#">ant</a>
                                        </li>
                                        <li><a href="#">01</a>
                                        </li>
                                        <li><a href="#">02</a>
                                        </li>
                                        <li class="btc_third_pegi btc_shop_pagi"><a href="#">03 <span></span></a>
                                        </li>
                                        <li class="btc_shop_pagi"><a href="#">04</a>
                                        </li>
                                        <li class="hidden-xs btc_shop_pagi"><a href="#">05</a>
                                        </li>
                                        <li class="hidden-xs btc_shop_pagi"><a href="#">06</a>
                                        </li>
                                        <li><a href="#">sig</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="lr_nl_form_wrapper">
                        <input type="text" placeholder="Ingresa tu correo electónico" style="background-color: #F6DED3">
                        <button type="submit">Suscribete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="lr_bottom_footer_main_wrapper">
            <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i><br><span>TOP</span></a>
            <p><a href="javascript:{}">Index Developer</a></p>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" onclick="encenderMicro('');" class="close" data-dismiss="modal">&times;</button>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
                                    <h2>Di algo...</h2>
                                </div>
                            </div>                                        
                        </div>  
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="text-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper" id="imgcargando">
                                        <img height="50" width="50" class="img img-circle" src="images/record-audio.gif" id="preloader_image" alt="loader"> 
                                    </div>
                                </div>  
                            </div>                                 
                        </div>
                        <div class="row">
                            <div class="text-right">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <h4 id="mensajeIngredienteMicro"></h4>
                                </div>  
                            </div>                                     
                        </div>                                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="encenderMicro('');" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span> Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- lr footer section End -->
        <!--main js file start-->
        {!! Html::script('js/jquery_min.js') !!}
        {!! Html::script('dist/js/jquery-ui.min.js') !!}
        {!! Html::script('js/modernizr.js') !!}
        {!! Html::script('js/bootstrap.js') !!}
        {!! Html::script('js/owl.carousel.js') !!}
        {!! Html::script('js/parallax.min.js') !!}
        {!! Html::script('js/tilt.jquery.js') !!}
        {!! Html::script('js/jarallax.js') !!}
        {!! Html::script('js/jquery.countTo.js') !!}
        {!! Html::script('js/jquery.inview.min.js') !!}
        {!! Html::script('js/jquery.shuffle.min.js') !!}
        {!! Html::script('js/jquery.magnific-popup.js') !!}
        {!! Html::script('js/jquery.counterup.min.js') !!}
        {!! Html::script('js/jquery.downCount.js') !!}
        {!! Html::script('js/waypoints.min.js') !!}
        {!! Html::script('js/venobox.min.js') !!}
        {!! Html::script('js/custom.js') !!}
        {!! Html::script('plugins/datatables/jquery.dataTables.min.js') !!}
        {!! Html::script('plugins/datatables/dataTables.bootstrap.min.js') !!}
        <!-- Slimscroll -->
        {!! Html::script('plugins/slimScroll/jquery.slimscroll.min.js') !!}
        <!-- FastClick -->
        {!! Html::script('plugins/fastclick/fastclick.js') !!}
        <!-- AdminLTE for demo purposes -->
        {!! Html::script('dist/js/demo.js') !!}    
        <!-- bootbox code -->
        {!! Html::script('dist/js/bootbox.min.js') !!}
        {{-- Funciones propias --}}
        {!! Html::script('dist/js/funciones.js') !!}
        {{-- jquery.inputmask: para mascaras en cajas de texto --}}
        {!! Html::script('plugins/input-mask/jquery.inputmask.js') !!}
        {!! Html::script('plugins/input-mask/jquery.inputmask.extensions.js') !!}
        {!! Html::script('plugins/input-mask/jquery.inputmask.date.extensions.js') !!}
        {!! Html::script('plugins/input-mask/jquery.inputmask.numeric.extensions.js') !!}
        {!! Html::script('plugins/input-mask/jquery.inputmask.phone.extensions.js') !!}
        {!! Html::script('plugins/input-mask/jquery.inputmask.regex.extensions.js') !!}
        {{-- bootstrap-datetimepicker: para calendarios --}}
        {!! HTML::script('dist/js/moment-with-locales.min.js') !!}
        {!! HTML::script('dist/js/bootstrap-datetimepicker.min.js') !!}
        {{-- typeahead.js-bootstrap: para autocompletar --}}
        {!! HTML::script('dist/js/typeahead.bundle.min.js') !!}
        {!! HTML::script('dist/js/bloodhound.min.js') !!}
        {!! HTML::script('dist/js/chosen.jquery.js') !!}  

        <!-- VOZ --> 
        
        <script>
            let rec;
            function iniciarTextToVoice() {    
                if (!("webkitSpeechRecognition" in window)) {
                    alert("disculpas, no puedes usar la API");
                } else {
                    rec = new webkitSpeechRecognition();
                    rec.lang = "es-PE";
                    rec.continuous = true;
                    rec.interim = true;
                    rec.onerror = function (event) {
                        alert("No permitido.");
                    };
                    rec.addEventListener("result",iniciar);
                    rec.start();    
                    $("#imgcargando").html('<img height="50" width="50" class="img img-circle" src="images/record-audio.gif" id="preloader_image" alt="loader">');                
                }
            }

            function iniciar(event){
                var a = "";
                for (let i = event.resultIndex; i < event.results.length; i++){
                    a = event.results[i][0].transcript;
                }                
                cargarIngredienteMicro(a);
                //$("#imgcargando").html("<h3>"+a+"</h3>");
                $("#imgcargando").html('<img height="50" width="50" class="img img-circle" src="images/record-audio.gif" id="preloader_image" alt="loader">');  
                if (a.indexOf('terminar') != -1) {
                    rec.stop();
                    $("#myModal").modal("hide");
                }                                         
            }
        </script>

        <!-- FIN VOZ --> 
        <script>
            $(document).ready(function($) {
                $("#ingrediente").focus();
            });

            var ingrediente = new Bloodhound({
                datumTokenizer: function (d) {
                    return Bloodhound.tokenizers.whitespace(d.value);
                },
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: 'plato/ingredienteautocompleting/%QUERY',
                    filter: function (ingrediente) {
                        return $.map(ingrediente, function (movie) {
                            return {
                                value: movie.value,
                                id: movie.id
                            };
                        });
                    },
                    replace: function(url, query) {
                        var uri = url.replace('%QUERY', query).replace('%CID', $("#some-selecter").attr('id'));
                        uri = uri + "?cadenaids=" + $("#cadenaids").val();
                        return uri;
                    }
                }
            });
            ingrediente.initialize();
            $('#ingrediente').typeahead(null,{
                displayKey: 'value',
                source: ingrediente.ttAdapter()
            }).on('typeahead:selected', function (object, datum) {
                var valor = datum.value;
                if(estaValor(datum.id)) {
                    if(valor !== "") {
                        var entrada = '<li style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;"><input type="hidden" class="ids" value="' + datum.id + '"><a onclick="javascript:{}" style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;"><b class="pag"></b>.- ' + valor + ' <span onclick="javascript:{}" style="color:black;cursor:pointer;" class="fila btn-xs"><i class="fa fa-remove"></i></span></a><hr></li>';
                        $("#ingredientes").append(entrada);
                        cantLi();
                        ordenarLi();
                    }
                }
                $('#ingrediente').val("");
            });
            
            $("#mensvacio").html("Ingresa al menos un ingrediente");
            
            function cerrarsesion() {
                //window.location="index.php?cerrar=cerrar";
            }

            $(document).on("click", ".fila", function() {
                $(this).parent().parent().remove();
                cantLi();
                ordenarLi();
            });

            function cantLi() {
                var a = 0;
                $("#ingredientes li").each(function(index, el) {
                    a++;
                });
                if(a == 0) {
                    $("#mensvacio").html("Ingresa al menos un ingrediente");
                } else {
                    $("#mensvacio").html("Cantidad: "+a);
                }
            }

            function ordenarLi() {
                var i = 1;
                $(".pag").each(function(index, el) {
                    $(this).html(i);
                    i++;
                });

                //Seteo cadenaids

                var cadenaids = "";
                $(".ids").each(function(index, el) {
                    cadenaids += $(this).val() + ";";                    
                });
                $("#cadenaids").val(cadenaids);
            }

            function estaValor(id) {
                var a = true;
                $(".ids").each(function(index, el) {
                    if($(this).val()==id) {
                        a = false;
                    }                 
                });
                return a;
            }

            function cargarPlatos() {
                $.ajax({
                    url: 'plato/cargarPlatos',
                    dataType: "JSON",
                    data: {
                        cadenaids: $("#cadenaids").val(),
                    },
                    beforeSend:function() {
                        $("#cuerpo").css("color", "black").html('<tr><td colspan="4" class="text-center"><img height="150px" width="150px" src="dist/img/cargando.gif" id="preloader_image" alt="loader"></td></tr>');
                    },
                    success: function (b) {
                        if(b["rpta"]=="1") {
                            $("#cuerpo").css("color", "black").html(b["text"]);
                        } else if(b["rpta"]=="2") {
                            $("#cuerpo").css("color", "black").html('<tr style="background-color: #DBEDF8"><td colspan="4"><h4>No se encontraron resultados.</h4></td></tr>');
                        } else {
                            $("#cuerpo").css("color", "red").html('<tr style="background-color: #DBEDF8"><td colspan="4"><h4>Debes agregar al menos un ingrediente.</h4></td></tr>');
                        }
                        $("#cantidadPlatos").html(b["cantidad"]);
                    }
                })
                .fail(function() {
                    $("#cuerpo").css("color", "red").html('<tr style="background-color: #DBEDF8"><td colspan="4"><h4>Error, vuelve a intentar.</h4></td></tr>');
                });              
            }

            function encenderMicro(a) {
                if(a == "1") {
                    iniciarTextToVoice();
                } else {
                    rec.stop();
                    $("#mensajeIngredienteMicro").html("");
                }
            }

            function cargarIngredienteMicro(a) {                
                $.ajax({
                    url: 'plato/cargarIngredienteMicro',
                    dataType: "JSON",
                    data: {
                        searching: a,
                        cadenaids: $("#cadenaids").val(),
                    },
                    beforeSend: function() {
                        $("#mensajeIngredienteMicro").css("color", "orange").html("Cargando...");
                    },
                    success: function (b) {
                        if(b["rpta"]=="1") {
                            $("#mensajeIngredienteMicro").css("color", "green").html("Ingrediente \"" + b["nombre"] + "\" agregado.");
                            var entrada = '<li style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;"><input type="hidden" class="ids" value="' + b["id"] + '"><a onclick="javascript:{}" style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;"><b class="pag"></b>.- ' + b["nombre"] + ' <span onclick="javascript:{}" style="color:black;cursor:pointer;" class="fila btn-xs"><i class="fa fa-remove"></i></span></a><hr></li>';
                            $("#ingredientes").append(entrada);
                            cantLi();
                            ordenarLi();
                        } else {
                            $("#mensajeIngredienteMicro").css("color", "red").html("Ingrediente no se encontró o ya se ingresó.");
                        }
                    }
                })
                .fail(function() {
                    $("#mensajeIngredienteMicro").css("color", "red").html("Error, vuelve a intentar.");
                });                
            }
        </script>
    </body>
</html>