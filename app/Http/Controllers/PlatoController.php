<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Plato;
use App\Unidad;
use App\Ingrediente;
use App\Categoria;
use App\Detalleingrediente;
use App\Librerias\Libreria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PlatoController extends Controller
{
    protected $folderview      = 'app.plato';
    protected $tituloAdmin     = 'Plato';
    protected $tituloRegistrar = 'Registrar plato';
    protected $tituloModificar = 'Modificar plato';
    protected $tituloEliminar  = 'Eliminar plato';
    protected $rutas           = array('create' => 'plato.create', 
            'edit'   => 'plato.edit', 
            'delete' => 'plato.eliminar',
            'search' => 'plato.buscar',
            'index'  => 'plato.index',
        );

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function buscar(Request $request)
    {
        $pagina           = $request->input('page');
        $filas            = $request->input('filas');
        $entidad          = 'Plato';
        $nombre             = Libreria::getParam($request->input('nombre'));
        $resultado        = Plato::where('nombre', 'LIKE', '%'.strtoupper($nombre).'%')->orderBy('nombre', 'ASC');
        $lista            = $resultado->get();
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

    public function index()
    {
        $entidad          = 'Plato';
        $title            = $this->tituloAdmin;
        $titulo_registrar = $this->tituloRegistrar;
        $ruta             = $this->rutas;
        return view($this->folderview.'.admin')->with(compact('entidad', 'title', 'titulo_registrar', 'ruta'));
    }

    public function principal()
    {
        return view('welcome');
    }

    public function create(Request $request)
    {
        $listar   = Libreria::getParam($request->input('listar'), 'NO');
        $entidad  = 'Plato';
        $plato = null;
        $unidades = Unidad::select("id", "nombre")->orderBy("nombre")->get();
        $categorias = Categoria::lists('nombre', 'id')->all();
        $formData = array('plato.store');
        $formData = array('route' => $formData, 'class' => 'form-horizontal', 'id' => 'formMantenimiento'.$entidad, 'autocomplete' => 'off');
        $boton    = 'Registrar'; 
        return view($this->folderview.'.mant')->with(compact('plato', 'formData', 'entidad', 'boton', 'listar', 'unidades', 'categorias'));
    }

    public function store(Request $request)
    {
        $listar     = Libreria::getParam($request->input('listar'), 'NO');
        $reglas     = array(
            'nombre' => 'required|max:100',
            'link' => 'required|max:300',
            'preparacion' => 'required|max:5000',
            'descripcion' => 'required|max:5000',
        );
        $mensajes = array(
            'nombre.required'         => 'Debe ingresar un nombre.',
            'preparacion.required'         => 'Debe ingresar una preparacion.',
            'link.required'         => 'Debe ingresar una link.',
            'descripcion.required'         => 'Debe ingresar una descripcion.',
        );
        $validacion = Validator::make($request->all(), $reglas, $mensajes);
        if ($validacion->fails()) {
            return $validacion->messages()->toJson();
        }
        $error = DB::transaction(function() use($request){
            $plato       = new Plato();
            $plato->nombre = $request->input('nombre');
            $plato->link = $request->input('link');
            $plato->descripcion = $request->input('descripcion');
            $plato->tip_cocina = $request->input('tip_cocina');
            $plato->preparacion = $request->input('preparacion');
            $plato->preparacion2 = $request->input('preparacion2');
            $plato->preparacion3 = $request->input('preparacion3');
            $plato->preparacion4 = $request->input('preparacion4');
            $plato->preparacion5 = $request->input('preparacion5');
            $plato->preparacion6 = $request->input('preparacion6');
            $plato->preparacion7 = $request->input('preparacion7');
            $plato->preparacion8 = $request->input('preparacion8');
            $plato->preparacion9 = $request->input('preparacion9');
            $plato->preparacion10 = $request->input('preparacion10');
            $plato->preparacion11 = $request->input('preparacion11');
            $plato->preparacion12 = $request->input('preparacion12');
            $plato->preparacion13 = $request->input('preparacion13');
            $plato->preparacion14 = $request->input('preparacion14');
            $plato->preparacion15 = $request->input('preparacion15');
            $plato->person_id = 1;
            $plato->tiempo = $request->input('tiempo');
            $plato->dificultad = $request->input('dificultad');
            $plato->grasas_des = $request->input('grasas_des');
            $plato->grasas_kcal = $request->input('grasas_kcal');
            $plato->proteinas_des = $request->input('proteinas_des');
            $plato->proteinas_kcal = $request->input('proteinas_kcal');
            $plato->hidratos_des = $request->input('hidratos_des');
            $plato->hidratos_kcal = $request->input('hidratos_kcal');
            $plato->categoria_id = $request->input('categoria_id');
            $plato->save();

            $cadenaingredientes = $request->input('cadenaingredientes');

            $comp = explode("|", $cadenaingredientes);

            $cantidades = explode(";", $comp[0]);
            $ids = explode(";", $comp[1]);
            $unidades = explode(";", $comp[3]);
            $nombres = explode("@@@", $comp[2]);

            for ($i=0; $i < count($ids); $i++) { 
                if($ids[$i] == "0") {
                    $ingrediente = new Ingrediente();
                    $ingrediente->nombre = $nombres[$i];
                    $ingrediente->save(); 
                    if($ingrediente !== NULL) {
                        $detalleingrediente = new Detalleingrediente();
                        $detalleingrediente->plato_id = $plato->id;
                        $detalleingrediente->unidad_id = $unidades[$i];
                        $detalleingrediente->ingrediente_id = $ingrediente->id;
                        $detalleingrediente->cantidad = $cantidades[$i];
                        $detalleingrediente->save();
                    }                   
                } else {
                    $ingrediente = Ingrediente::find($ids[$i]);
                    if($ingrediente !== NULL) {
                        $detalleingrediente = new Detalleingrediente();
                        $detalleingrediente->plato_id = $plato->id;
                        $detalleingrediente->unidad_id = $unidades[$i];
                        $detalleingrediente->ingrediente_id = $ids[$i];
                        $detalleingrediente->cantidad = $cantidades[$i];
                        $detalleingrediente->save();
                    }
                }                    
            }
        });
        return is_null($error) ? "OK" : $error;
    }

    public function show($id)
    {
        //
    }

    public function edit($id, Request $request)
    {
        $existe = Libreria::verificarExistencia($id, 'plato');
        if ($existe !== true) {
            return $existe;
        }
        $listar   = Libreria::getParam($request->input('listar'), 'NO');
        $plato = Plato::find($id);
        $entidad  = 'Plato';
        $formData = array('plato.update', $id);
        $formData = array('route' => $formData, 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'formMantenimiento'.$entidad, 'autocomplete' => 'off');
        $unidades = Unidad::select("id", "nombre")->orderBy("nombre")->get();
        $categorias = Categoria::lists('nombre', 'id')->all();
        $boton    = 'Modificar';
        return view($this->folderview.'.mant')->with(compact('plato', 'formData', 'entidad', 'boton', 'listar', 'unidades', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $existe = Libreria::verificarExistencia($id, 'plato');
        if ($existe !== true) {
            return $existe;
        }
        $reglas     = array(
            'nombre' => 'required|max:100',
            'link' => 'required|max:300',
            'preparacion' => 'required|max:5000',
            'descripcion' => 'required|max:5000',
        );
        $mensajes = array(
            'nombre.required'         => 'Debe ingresar un nombre.',
            'preparacion.required'         => 'Debe ingresar una preparacion.',
            'link.required'         => 'Debe ingresar una link.',
            'descripcion.required'         => 'Debe ingresar una descripcion.',
        );
        $validacion = Validator::make($request->all(), $reglas, $mensajes);
        if ($validacion->fails()) {
            return $validacion->messages()->toJson();
        } 
        $error = DB::transaction(function() use($request, $id){
            $plato       = Plato::find($id);
            $plato->nombre = $request->input('nombre');
            $plato->link = $request->input('link');
            $plato->descripcion = $request->input('descripcion');
            $plato->tip_cocina = $request->input('tip_cocina');
            $plato->preparacion = $request->input('preparacion');
            $plato->preparacion2 = $request->input('preparacion2');
            $plato->preparacion3 = $request->input('preparacion3');
            $plato->preparacion4 = $request->input('preparacion4');
            $plato->preparacion5 = $request->input('preparacion5');
            $plato->preparacion6 = $request->input('preparacion6');
            $plato->preparacion7 = $request->input('preparacion7');
            $plato->preparacion8 = $request->input('preparacion8');
            $plato->preparacion9 = $request->input('preparacion9');
            $plato->preparacion10 = $request->input('preparacion10');
            $plato->preparacion11 = $request->input('preparacion11');
            $plato->preparacion12 = $request->input('preparacion12');
            $plato->preparacion13 = $request->input('preparacion13');
            $plato->preparacion14 = $request->input('preparacion14');
            $plato->preparacion15 = $request->input('preparacion15');
            $plato->tiempo = $request->input('tiempo');
            $plato->dificultad = $request->input('dificultad');
            $plato->grasas_des = $request->input('grasas_des');
            $plato->grasas_kcal = $request->input('grasas_kcal');
            $plato->proteinas_des = $request->input('proteinas_des');
            $plato->proteinas_kcal = $request->input('proteinas_kcal');
            $plato->hidratos_des = $request->input('hidratos_des');
            $plato->hidratos_kcal = $request->input('hidratos_kcal');
            $plato->categoria_id = $request->input('categoria_id');
            $plato->person_id = 1;
            $plato->save();

            //elimino todos los Detalle ingrediente

            $di = Detalleingrediente::where("plato_id", "=", $plato->id)->get();

            if(count($di)>0) {
                foreach ($di as $dd) {
                    $dd->delete();
                }
            }

            $cadenaingredientes = $request->input('cadenaingredientes');

            $comp = explode("|", $cadenaingredientes);

            $cantidades = explode(";", $comp[0]);
            $ids = explode(";", $comp[1]);
            $unidades = explode(";", $comp[3]);
            $nombres = explode("@@@", $comp[2]);

            for ($i=0; $i < count($ids); $i++) { 
                if($ids[$i] == "0") {
                    $ingrediente = new Ingrediente();
                    $ingrediente->nombre = $nombres[$i];
                    $ingrediente->save(); 
                    if($ingrediente !== NULL) {
                        $detalleingrediente = new Detalleingrediente();
                        $detalleingrediente->plato_id = $plato->id;
                        $detalleingrediente->unidad_id = $unidades[$i];
                        $detalleingrediente->ingrediente_id = $ingrediente->id;
                        $detalleingrediente->cantidad = $cantidades[$i];
                        $detalleingrediente->save();
                    }                   
                } else {
                    $ingrediente = Ingrediente::find($ids[$i]);
                    if($ingrediente !== NULL) {
                        $detalleingrediente = new Detalleingrediente();
                        $detalleingrediente->plato_id = $plato->id;
                        $detalleingrediente->unidad_id = $unidades[$i];
                        $detalleingrediente->ingrediente_id = $ids[$i];
                        $detalleingrediente->cantidad = $cantidades[$i];
                        $detalleingrediente->save();
                    }
                }                    
            }
        });
        return is_null($error) ? "OK" : $error;
    }
    
    public function destroy($id)
    {
        $existe = Libreria::verificarExistencia($id, 'plato');
        if ($existe !== true) {
            return $existe;
        }
        $error = DB::transaction(function() use($id){
            $plato = Plato::find($id);
            $plato->delete();
        });
        return is_null($error) ? "OK" : $error;
    }

    public function eliminar($id, $listarLuego)
    {
        $existe = Libreria::verificarExistencia($id, 'plato');
        if ($existe !== true) {
            return $existe;
        }
        $listar = "NO";
        if (!is_null(Libreria::obtenerParametro($listarLuego))) {
            $listar = $listarLuego;
        }
        $modelo   = Plato::find($id);
        $entidad  = 'Plato';
        $formData = array('route' => array('plato.destroy', $id), 'method' => 'DELETE', 'class' => 'form-horizontal', 'id' => 'formMantenimiento'.$entidad, 'autocomplete' => 'off');
        $boton    = 'Eliminar';
        return view('app.confirmarEliminar')->with(compact('modelo', 'formData', 'entidad', 'boton', 'listar'));
    }

    public function ingredienteautocompleting(Request $request, $searching)
    {
        $cadenaids = $request->input("cadenaids");
        $resultado = Ingrediente::where("id", "=", 0);
        if($searching != "") {
            $resultado = Ingrediente::select('id', 'nombre')->where("nombre", "LIKE", "%" . $searching . "%");
            if($cadenaids !== "") {
                $ids = explode(";", $cadenaids);
                foreach ($ids as $id) {
                    $resultado = $resultado->where("id", "!=", $id);
                }
            }
        }        
        $list      = $resultado->limit(5)->get();
        $data = array();
        foreach ($list as $key => $value) {
            $data[] = array(
                'label' => $value->nombre,
                'id'    => $value->id,
                'value' => $value->nombre,
            );
        }
        return json_encode($data);
    }

    public function cargarIngredienteMicro(Request $request) {
        $cadenaids = $request->input("cadenaids");
        $searching = $request->input("searching");
        $resultado = Ingrediente::where("id", "=", 0);
        if($searching != "") {
            $searching = trim($searching);
            $resultado = Ingrediente::select('id', 'nombre')->where("nombre", "LIKE", "%" . $searching . "%");
            if($cadenaids !== "") {
                $ids = explode(";", $cadenaids);
                foreach ($ids as $id) {
                    $resultado = $resultado->where("id", "!=", $id);
                }
            }
        }        
        $ingred      = $resultado->first();
        if($ingred !== NULL) {
            $data = array(
                'rpta'    => "1",
                'id'    => $ingred->id,
                'nombre' => $ingred->nombre,
            );
        } else {
            $data = array(
                'rpta'    => "2",
            );
        }
        return json_encode($data);
    }

    public function inicializarTablaIngredientes(Request $request) {
        $detalleingredientes = Detalleingrediente::where("plato_id", "=", $request->input("pid"))->get();
        $unidades = Unidad::select("id", "nombre")->orderBy("nombre")->get();

        $text = '';
        $i = 1;
        foreach ($detalleingredientes as $id) {

            $selectunidades = '';

            foreach ($unidades as $uv) {
                $selectunidades .= "<option value='" . $uv->id . "'" . ($id->unidad_id == $uv->id ? " selected" : "") . ">" . $uv->nombre . "</option>";
            }

            $text .= '<tr>
                        <td class="num">' . $i . '</td>
                        <td>
                            <input class="cant numerin form-control input-sm" type="text" value="' . $id->cantidad . '">
                            <input type="hidden" class="inid" value="' . $id->ingrediente->id . '"/>
                            <input type="hidden" class="nomb" value="' . $id->ingrediente->nombre . '"/>
                        </td>
                        <td>
                            <select class="form-control unity" value="' . $id->unidad_id . '">' . $selectunidades . '</select>
                        </td>
                        <td>' . $id->ingrediente->nombre . '</td>
                        <td style="text-align:center;">
                            <button class="remove btn btn-xs btn-danger">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>';
            $i++;
        }
        return $text;
    }

    public function cargarPlatos(Request $request) {
        $cadenaids = $request->input("cadenaids");
        $dids = explode(";", $cadenaids);
        $platos = Plato::get();
        $rpta = "3";        
        $text = "";     
        $cantidad = 0;     
        $data = array();
        if($cadenaids != "") {
            $platosselectos = Detalleingrediente::select("plato_id")
            ->where(function($query) use ($dids){
                foreach ($dids as $did) {
                    if($did !== "") {
                        $query = $query->orWhere("ingrediente_id", "=", $did);
                    }
                }
            });            
            $platosselectos = $platosselectos->distinct()->get();
            if(count($platosselectos)>0) {
                $rpta = "1";
                foreach ($platosselectos as $psid) {
                    $plato = Plato::find($psid->plato_id);
                    $detalles = Detalleingrediente::where("plato_id", "=", $psid->plato_id)->get(); 
                    $ingcoincidentes = 0;                   
                    foreach ($detalles as $detalle) {
                        foreach ($dids as $did) {
                            if($detalle->ingrediente_id == $did) {
                                $ingcoincidentes++;
                            }
                        }
                    }
                    $text .= '<tr style="background-color: #DBEDF8">
                                <td class="text-left">' . $plato->nombre . '</td>
                                <td class="text-center">' . count($detalles) . ' ingredientes</td>
                                <td class="text-center">' . $ingcoincidentes . ' ingredientes</td>
                                <td class="text-center"><a href="verPlato?cadenaids=' . $cadenaids . '&id=' . $psid->plato_id . '" target="_blank" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a></td>
                            </tr>';
                    $cantidad++;
                }
            } else {
                $rpta = "2";
            }
        }
        $data = array(
            "rpta" => $rpta,
            "text" => $text,
            "cantidad" => $cantidad,
        );
        return json_encode($data);
    }

    public function verPlato(Request $request) {
        $cadenaids = explode(";", $request->input("cadenaids"));
        $id = $request->input("id");
        $detalleingredientes = Detalleingrediente::where("plato_id", "=", $id)->get();
        $plato = Plato::find($id);
        return view("plato")->with(compact("id", "cadenaids", "plato", "detalleingredientes"));
    }
}