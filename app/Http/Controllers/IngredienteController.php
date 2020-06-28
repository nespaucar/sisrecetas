<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Validator;
use App\Http\Requests;
use App\Ingrediente;
use App\Librerias\Libreria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IngredienteController extends Controller {

    protected $folderview      = 'app.ingrediente';
    protected $tituloAdmin     = 'Ingrediente';
    protected $tituloRegistrar = 'Registrar ingrediente';
    protected $tituloModificar = 'Modificar ingrediente';
    protected $tituloEliminar  = 'Eliminar ingrediente';
    protected $rutas           = array('create' => 'ingrediente.create',
            'edit'   => 'ingrediente.edit', 
            'delete' => 'ingrediente.eliminar',
            'search' => 'ingrediente.buscar',
            'index'  => 'ingrediente.index',
        );

    public function __construct() {
        //$this->middleware('auth');
    }

    public function buscar(Request $request) {
        $pagina           = $request->input('page');
        $filas            = $request->input('filas');
        $entidad          = 'Ingrediente';
        $nombre           = Libreria::getParam($request->input('nombre'));
        $resultado        = Ingrediente::where("nombre", 'LIKE', '%'.$nombre.'%');
        $lista            = $resultado->orderBy("nombre", "ASC")->get();
        $cabecera         = array();
        $cabecera[]       = array('valor' => '#', 'numero' => '1');
        $cabecera[]       = array('valor' => 'Nombre', 'numero' => '1');
        $cabecera[]       = array('valor' => 'Operaciones', 'numero' => '2');
        
        $titulo_modificar = $this->tituloModificar;
        $titulo_eliminar  = $this->tituloEliminar;
        $ruta             = $this->rutas;
        if (count($lista) > 0) {
            $clsLibreria     = new Libreria();
            $paramPaginacion = $clsLibreria->generarPaginacion($lista, $pagina, $filas, $entidad);
            $paginacion      = $paramPaginacion['cadenapaginacion'];
            $inicio          = $paramPaginacion['inicio'];
            $fin             = $paramPaginacion['fin'];
            $paginaactual    = $paramPaginacion['nuevapagina'];
            $lista           = $resultado->paginate($filas);
            $request->replace(array('page' => $paginaactual));
            return view($this->folderview.'.list')->with(compact('lista', 'paginacion', 'inicio', 'fin', 'entidad', 'cabecera', 'titulo_modificar', 'titulo_eliminar', 'ruta'));
        }
        return view($this->folderview.'.list')->with(compact('lista', 'entidad'));
    }

    public function index() {
        $entidad          = 'Ingrediente';
        $title            = $this->tituloAdmin;
        $titulo_registrar = $this->tituloRegistrar;
        $ruta             = $this->rutas;
        return view($this->folderview.'.admin')->with(compact('entidad', 'title', 'titulo_registrar', 'ruta'));
    }

    public function create(Request $request)
    {
        $listar   = Libreria::getParam($request->input('listar'), 'NO');
        $entidad  = 'Ingrediente';
        $ingrediente = null;
        $formData = array('ingrediente.store');
        $formData = array('route' => $formData, 'class' => 'form-horizontal', 'id' => 'formMantenimiento'.$entidad, 'autocomplete' => 'off');
        $boton    = 'Registrar'; 
        return view($this->folderview.'.mant')->with(compact('ingrediente', 'formData', 'entidad', 'boton', 'listar'));
    }

    public function store(Request $request) {
        $listar     = Libreria::getParam($request->input('listar'), 'NO');
        $reglas     = array(
            'nombre1' => 'required|max:100',
        );
        $mensajes = array(
            'nombre1.required' => 'Debe ingresar un nombre.',
        );
        $validacion = Validator::make($request->all(), $reglas, $mensajes);
        if ($validacion->fails()) {
            return $validacion->messages()->toJson();
        }
        $error = DB::transaction(function() use($request){
            $ingrediente       = new Ingrediente();
            $ingrediente->nombre = $request->nombre1;
            $ingrediente->save();
        });
        return is_null($error) ? "OK" : $error;
    }

    public function show($id)
    {
        //
    }

    public function edit($id, Request $request)
    {
        $existe = Libreria::verificarExistencia($id, 'ingrediente');
        if ($existe !== true) {
            return $existe;
        }
        $listar   = Libreria::getParam($request->input('listar'), 'NO');
        $ingrediente = Ingrediente::find($id);
        $entidad  = 'Ingrediente';
        $formData = array('ingrediente.update', $id);
        $formData = array('route' => $formData, 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'formMantenimiento'.$entidad, 'autocomplete' => 'off');
        $boton    = 'Modificar';
        return view($this->folderview.'.mant')->with(compact('ingrediente', 'formData', 'entidad', 'boton', 'listar'));
    }

    public function update(Request $request, $id)
    {
        $existe = Libreria::verificarExistencia($id, 'ingrediente');
        if ($existe !== true) {
            return $existe;
        }
        $reglas     = array(
            'nombre1' => 'required|max:100',
        );
        $mensajes = array(
            'nombre1.required' => 'Debe ingresar un nombre.',
        );
        $validacion = Validator::make($request->all(), $reglas, $mensajes);
        if ($validacion->fails()) {
            return $validacion->messages()->toJson();
        } 
        $error = DB::transaction(function() use($request, $id){
            $ingrediente       = Ingrediente::find($id);
            $ingrediente->nombre = $request->input('nombre1');
            $ingrediente->save();
        });
        return is_null($error) ? "OK" : $error;
    }

    public function destroy($id) {
        $existe = Libreria::verificarExistencia($id, 'ingrediente');
        if ($existe !== true) {
            return $existe;
        }
        $error = DB::transaction(function() use($id){
            $ingrediente = Ingrediente::find($id);
            $ingrediente->delete();
        });
        return is_null($error) ? "OK" : $error;
    }

    public function eliminar($id, $listarLuego) {
        $existe = Libreria::verificarExistencia($id, 'ingrediente');
        if ($existe !== true) {
            return $existe;
        }
        $listar = "NO";
        if (!is_null(Libreria::obtenerParametro($listarLuego))) {
            $listar = $listarLuego;
        }
        $modelo   = Ingrediente::find($id);
        $entidad  = 'Ingrediente';
        $formData = array('route' => array('ingrediente.destroy', $id), 'method' => 'DELETE', 'class' => 'form-horizontal', 'id' => 'formMantenimiento'.$entidad, 'autocomplete' => 'off');
        $boton    = 'Eliminar';
        return view('app.confirmarEliminar')->with(compact('modelo', 'formData', 'entidad', 'boton', 'listar'));
    }
}