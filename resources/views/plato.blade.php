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
        <title>VER PLATO</title>
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

            /* === card component ====== 
            * Variation of the panel component
            * version 2018.10.30
            * https://codepen.io/jstneg/pen/EVKYZj
            */
            .card{ background-color: #fff; border: 1px solid transparent; border-radius: 6px; }
            .card > .card-link{ color: #333; }
            .card > .card-link:hover{  text-decoration: none; }
            .card > .card-link .card-img img{ border-radius: 8px 8px 0 0; }
            .card .card-img{ position: relative; padding: 0; display: table; }
            .card .card-img .card-caption{
              position: absolute;
              right: 0;
              bottom: 16px;
              left: 0;
            }
            .card .card-body{ display: table; width: 100%; padding: 12px; }
            .card .card-header{ border-radius: 6px 6px 0 0; padding: 8px; }
            .card .card-footer{ border-radius: 0 0 6px 6px; padding: 8px; }
            .card .card-left{ position: relative; float: left; padding: 0 0 8px 0; }
            .card .card-right{ position: relative; float: left; padding: 8px 0 0 0; }
            .card .card-body h1:first-child,
            .card .card-body h2:first-child,
            .card .card-body h3:first-child, 
            .card .card-body h4:first-child,
            .card .card-body .h1,
            .card .card-body .h2,
            .card .card-body .h3, 
            .card .card-body .h4{ margin-top: 0; }
            .card .card-body .heading{ display: block;  }
            .card .card-body .heading:last-child{ margin-bottom: 0; }

            .card .card-body .lead{ text-align: center; }

            .lead { font-size: 15px; }

            .list { text-align: center; }

            @media( min-width: 768px ){
              .card .card-left{ float: left; padding: 0 8px 0 0; }
              .card .card-right{ float: left; padding: 0 0 0 8px; }
                
              .card .card-4-8 .card-left{ width: 33.33333333%; }
              .card .card-4-8 .card-right{ width: 66.66666667%; }

              .card .card-5-7 .card-left{ width: 41.66666667%; }
              .card .card-5-7 .card-right{ width: 58.33333333%; }
              
              .card .card-6-6 .card-left{ width: 50%; }
              .card .card-6-6 .card-right{ width: 50%; }
              
              .card .card-7-5 .card-left{ width: 58.33333333%; }
              .card .card-7-5 .card-right{ width: 41.66666667%; }
              
              .card .card-8-4 .card-left{ width: 66.66666667%; }
              .card .card-8-4 .card-right{ width: 33.33333333%; }
            }

            /* -- default theme ------ */
            .card-default{ 
              border-color: #ddd;
              background-color: #fff;
              margin-bottom: 24px;
            }
            .card-default > .card-header,
            .card-default > .card-footer{ color: #333; background-color: #ddd; }
            .card-default > .card-header{ border-bottom: 1px solid #ddd; padding: 8px; }
            .card-default > .card-footer{ border-top: 1px solid #ddd; padding: 8px; }
            .card-default > .card-body{  }
            .card-default > .card-img:first-child img{ border-radius: 6px 6px 0 0; }
            .card-default > .card-left{ padding-right: 4px; }
            .card-default > .card-right{ padding-left: 4px; }
            .card-default p:last-child{ margin-bottom: 0; }
            .card-default .card-caption { color: #fff; text-align: center; text-transform: uppercase; }


            /* -- price theme ------ */
            .card-price{ border-color: #999; background-color: #ededed; margin-bottom: 24px; }
            .card-price > .card-heading,
            .card-price > .card-footer{ color: #333; background-color: #fdfdfd; }
            .card-price > .card-heading{ border-bottom: 1px solid #ddd; padding: 8px; }
            .card-price > .card-footer{ border-top: 1px solid #ddd; padding: 8px; }
            .card-price > .card-img:first-child img{ border-radius: 6px 6px 0 0; }
            .card-price > .card-left{ padding-right: 4px; }
            .card-price > .card-right{ padding-left: 4px; }
            .card-price .card-caption { color: #fff; text-align: center; text-transform: uppercase; }
            .card-price p:last-child{ margin-bottom: 0; }

            .card-price .price{ 
              text-align: center; 
              color: #337ab7; 
              font-size: 2em; 
              text-transform: uppercase;
              line-height: 0.5em; 
              margin: 20px 0 13px;
            }
            .card-price .price small{ font-size: 0.4em; color: #66a5da; }
            .card-price .details{ list-style: none; margin-bottom: 24px; padding: 0 18px; }
            .card-price .details li{ text-align: center; margin-bottom: 8px; }
            .card-price .buy-now{ text-transform: uppercase; }
            .card-price table .price{ font-size: 1.2em; font-weight: 700; text-align: left; }
            .card-price table .note{ color: #666; font-size: 0.8em; }
        </style>    
    </head>

    <body>
        <!-- preloader Start -->
        <div id="preloader">
            <div id="status">
                <img src="images/header/loader.gif" id="preloader_image" alt="loader">
            </div>
        </div>
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
                                            <li class=" dropdown"><a href=""><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                                            <li onclick="cerrarsesion();"><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Cerrar Sesion</a></li>
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
            <div class="container-fluid">
                <div class="row">
                	@if($plato!==NULL) 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="lr_bc_first_box_main_wrapper">
                                    <div class="lr_bc_first_box_img_cont_wrapper">
                                        <h2> </h2>
                                        
                                        <ul>
                                            <div class="row">
                                                <div class="col-md-6"> 
                                                    <div class="card card-price">
                                                        <div class="card-img">
                                                            <a href="#">
                                                                <img height="400" width="600" src="images/arrozsambo.jpg" class="img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="card card-price">                                                        
                                                        <div class="card-body">                                                            
                                                            <div class="price">{{ $plato->nombre }}</div>
                                                            <div class="lead">
                                                                <?php echo nl2br($plato->descripcion);?>
                                                            </div>
                                                        </div>
                                                        <div class="card-body"> 
                                                            <ul class="list">
                                                                <li><i class="fa fa-user-o"></i>&nbsp; <a href="#">★★★★</a></li>
                                                                <li><i class="fa fa-thumbs-up"></i>&nbsp; <a href="#">512 Like</a></li>
                                                                <li><i class="fa fa-comments-o"></i>&nbsp; <a href="#">28 comentarios</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                        <hr>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
                                                    <h2><i class="fa fa-paper-plane-o"></i> Ingredientes<span></span></h2>
                                                </div>
                                                <p>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-8" id="ingredientes">
                                                            @foreach($detalleingredientes as $pi)
                                                                <p @if(!in_array($pi->ingrediente_id, $cadenaids)) style='color:red; font-weight: bold;' @else style='color:green; font-weight: bold;' @endif >
                                                                    @if(in_array($pi->ingrediente_id, $cadenaids)) 
                                                                    <i class="fa fa-heart"></i>
                                                                    @else 
                                                                    <i class="fa fa-remove"></i>
                                                                    @endif
                                                                     <b>{{ $pi->cantidad }} {{ $pi->ingrediente->nombre }} @if(!in_array($pi->ingrediente_id, $cadenaids)) @endif</b>
                                                                </p>
                                                            @endforeach
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-price">
                                                                        <div class="card-body">
                                                                            <div class="text-center">
                                                                                <a onclick="modal();" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i> Pedido</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                                    
                                                        </div>
                                                    </div>                                                          
                                                </p>
                                            </div>
                                        	<div class="col-md-7">
                                        		<div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
		                                            <h2><i class="fa fa-paper-plane-o"></i> Preparación<span></span></h2>
		                                        </div>
                                    			<p>
                                                    <div class="row">
                                                        <div class="col-md-12" style="text-align: justify;">
                                                            <?php echo nl2br($plato->preparacion);?>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div> 
                                            
                                        </div>
                                        <hr>
                                        <div class="row">
                                        	<div class="col-md-12">
                                        		<div class="lr_element_section_heading_wrapper lr_bc_cate_sb_heading_main_wrapper">
		                                            <h2><i class="fa fa-paper-plane-o"></i> Mira los pasos tú mismo<span></span></h2>
		                                        </div>
                                        		<div class="text-center">
                                        			<div class="row">
                                        				<p>
	                                        				<div class="col-md-12">
	                                            				<iframe height="600" width="1000" src="https://www.youtube.com/embed/{{ $plato->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	                                            			</div>
                                            			</p>
                                            		</div>
                                            	</div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="lr_bc_first_box_main_wrapper">
                                    <div class="lr_bc_first_box_img_cont_wrapper">
                                    	<div class="text-center">
                                    		<h2 style="color: red;">Plato no existe.</h2>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
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
    </body>
</html>