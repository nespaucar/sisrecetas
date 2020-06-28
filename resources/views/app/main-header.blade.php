<?php
use App\User;
use App\Person;
use App\Usertype;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Session;

$user = Auth::user();

Date::setLocale('es');
$user     = Auth::user();
$person   = Person::find($user->person_id);
$usertype = Usertype::find($user->usertype_id);
$date     = Date::instance($usertype->created_at)->format('l j F Y');
?>
<style>
.enlaces{   
    float: left;
    background-image: none;
    padding: 15px 15px;
    cursor: pointer;    color: #000;
    font-family: fontAwesome;
}
.modal {
    overflow-y:auto;
}
div, b, h1, h2, h3, h4, h5, input {
  font-family: monospace;
}
thead {
    background-color: #EAFDA6;
}
thead tr td, .num {
    font-weight: bold;
    text-align: center;
}
td {
    padding: 3px;
}
tbody tr {
    background-color: #E3FAF5;
}
</style>
<header class="main-header">
    <!-- Logo -->
    <!--<a href="#" class="logo" onclick="window.open('{ url('/dashboard')}}','_blank')">-->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>RecetasAT</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>RecetasAT</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div id='divAlerta' class='enlaces' style='color:red;font-weight: bold;'></div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <div id="sucursalsession" style="margin-top: 15px; margin-right: 15px;">SUCURSAL: SERVIFLASHAPP</div>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="dist/img/logo2.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ $person->apellidopaterno.' '.$person->apellidomaterno.' '.$person->nombres }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="dist/img/logo2.jpg" class="img-circle" alt="User Image">

                            <p>
                                {{ $person->apellidopaterno.' '.$person->apellidomaterno.' '.$person->nombres }} - {{ $usertype->name }}
                                <small>Miembro desde {{ $date }}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Cerrar Sesión</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div id="modalAlertaG" class="modal fade" role="dialog" style="z-index: 1600;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="color:red;"><i class="fa fa-thumbs-o-down"></i> ¡Cuidado!</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img width="130px" height="150px" src="dist/img/rinon.gif" class="img-circle" alt="User Image">
                    </div>
                    <div class="col-md-8 text-center">
                        <h2 style="color:blue;" id="mensajeAlertaG"></h2>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<div id="modalAlertaB" class="modal fade" role="dialog" style="z-index: 1600;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="color:green;"><i class="fa fa-thumbs-o-up"></i> ¡Correcto!</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img width="130px" height="150px" src="dist/img/rinon2.gif" class="img-circle" alt="User Image">
                    </div>
                    <div class="col-md-8 text-center">
                        <h2 style="color:blue;" id="mensajeAlertaB"></h2>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    function alertaCierre(){
    }

    function alertaG(mensaje) {
        $('#mensajeAlertaG').html(mensaje);
        $('#modalAlertaG').modal('show');
    }

    function alertaB(mensaje) {
        $('#mensajeAlertaB').html(mensaje);
        $('#modalAlertaB').modal('show');
    }

    function quitarPadding() {
        $('.skin-blue').removeAttr('style');
    }    

    //setInterval(function(){ alertaCierre(); }, 60000);
    var alerta="";
    function alertaArchivo(){        
        $.ajax({
            type: "POST",
            url: "seguimiento/alerta",
            data: "_token="+$(' :input[name="_token"]').val(),
            success: function(a) {
                eval(a);
                if(vcantidad=='0'){
                    $("#divAlerta").html('');
                }else{
                    $("#divAlerta").html(vdatos);
                    if(alerta!=valerta){
                        alert(valerta);
                        alerta=valerta;
                    }
                }
            }
        });
    }
   
</script>