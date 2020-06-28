<style>
	thead {
		background-color: yellow;
	}
	thead tr td, .num {
		font-weight: bold;
		text-align: center;
	}
	td {
		padding: 3px;
	}
	textarea{
	  	padding: 10px;
	}
</style>
<div id="divMensajeError{!! $entidad !!}"></div>
{!! Form::model($plato, $formData) !!}	
	{!! Form::hidden('listar', $listar, array('id' => 'listar')) !!}
	{!! Form::hidden('cadenaingredientes', null, array('id' => 'cadenaingredientes')) !!}
	<div class="form-group">
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="form-group">
				{!! Form::label('nombre', 'Nombre', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::text('nombre', null, array('class' => 'form-control input-sm', 'id' => 'nombre', 'placeholder' => 'Ingrese nombre')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('link', 'ID video', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::text('link', null, array('class' => 'form-control input-sm', 'id' => 'link', 'placeholder' => 'Ingrese link')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('descripcion', 'Descripción', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('descripcion', null, array('class' => 'form-control input-sm', 'id' => 'descripcion', 'placeholder' => 'Ingrese descripcion', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('tip_cocina', 'TIP', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('tip_cocina', null, array('class' => 'form-control input-sm', 'id' => 'tip_cocina', 'placeholder' => 'Ingrese tip_cocina', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion', 'Paso 1', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion', null, array('class' => 'form-control input-sm', 'id' => 'preparacion', 'placeholder' => 'Ingrese Paso 1', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion2', 'Paso 2', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion2', null, array('class' => 'form-control input-sm', 'id' => 'preparacion2', 'placeholder' => 'Ingrese paso 2', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion3', 'Paso 3', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion3', null, array('class' => 'form-control input-sm', 'id' => 'preparacion3', 'placeholder' => 'Ingrese paso 3', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion4', 'Paso 4', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion4', null, array('class' => 'form-control input-sm', 'id' => 'preparacion4', 'placeholder' => 'Ingrese paso 4', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion5', 'Paso 5', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion5', null, array('class' => 'form-control input-sm', 'id' => 'preparacion5', 'placeholder' => 'Ingrese paso 5', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion6', 'Paso 6', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion6', null, array('class' => 'form-control input-sm', 'id' => 'preparacion6', 'placeholder' => 'Ingrese paso 6', 'rows' => '3')) !!}
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="form-group">
				{!! Form::label('preparacion7', 'Paso 7', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion7', null, array('class' => 'form-control input-sm', 'id' => 'preparacion7', 'placeholder' => 'Ingrese paso 7', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion8', 'Paso 8', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion8', null, array('class' => 'form-control input-sm', 'id' => 'preparacion8', 'placeholder' => 'Ingrese paso 8', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion9', 'Paso 9', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion9', null, array('class' => 'form-control input-sm', 'id' => 'preparacion9', 'placeholder' => 'Ingrese paso 9', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion10', 'Paso 10', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion10', null, array('class' => 'form-control input-sm', 'id' => 'preparacion10', 'placeholder' => 'Ingrese paso 10', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion11', 'Paso 11', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion11', null, array('class' => 'form-control input-sm', 'id' => 'preparacion11', 'placeholder' => 'Ingrese paso 11', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion12', 'Paso 12', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion12', null, array('class' => 'form-control input-sm', 'id' => 'preparacion12', 'placeholder' => 'Ingrese paso 12', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion13', 'Paso 13', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion13', null, array('class' => 'form-control input-sm', 'id' => 'preparacion13', 'placeholder' => 'Ingrese paso 13', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion14', 'Paso 14', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion14', null, array('class' => 'form-control input-sm', 'id' => 'preparacion14', 'placeholder' => 'Ingrese paso 14', 'rows' => '3')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('preparacion15', 'Paso 15', array('class' => 'col-lg-3 col-md-3 col-sm-3 control-label')) !!}
				<div class="col-lg-9 col-md-9 col-sm-9">
					{!! Form::textarea('preparacion15', null, array('class' => 'form-control input-sm', 'id' => 'preparacion15', 'placeholder' => 'Ingrese paso 15', 'rows' => '3')) !!}
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="form-group">
				{!! Form::label('categoria_id', 'Categoría', array('class' => 'col-lg-4 col-md-4 col-sm-4 control-label')) !!}
				<div class="col-lg-8 col-md-8 col-sm-8">
					{!! Form::select('categoria_id', $categorias, null, array('class' => 'form-control', 'id' => 'categoria_id')) !!}
				</div>
			</div>
			<hr>
			<div class="form-group">
				{!! Form::label('tiempo', 'Tiempo', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('tiempo', null, array('class' => 'form-control input-sm', 'id' => 'tiempo', 'placeholder' => 'Ingrese tiempo')) !!}
				</div>
				{!! Form::label('dificultad', 'Dificultad', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('dificultad', null, array('class' => 'form-control input-sm', 'id' => 'dificultad', 'placeholder' => 'Ingrese dificultad')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('grasas_des', 'Grasas des', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('grasas_des', null, array('class' => 'form-control input-sm', 'id' => 'grasas_des', 'placeholder' => 'Ingrese grasas_des')) !!}
				</div>
				{!! Form::label('grasas_kcal', 'Grasas Kcal', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('grasas_kcal', null, array('class' => 'form-control input-sm', 'id' => 'grasas_kcal', 'placeholder' => 'Ingrese grasas_kcal')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('proteinas_des', 'Proteínas des', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('proteinas_des', null, array('class' => 'form-control input-sm', 'id' => 'proteinas_des', 'placeholder' => 'Ingrese proteinas_des')) !!}
				</div>
				{!! Form::label('proteinas_kcal', 'Proteínas Kcal', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('proteinas_kcal', null, array('class' => 'form-control input-sm', 'id' => 'proteinas_kcal', 'placeholder' => 'Ingrese proteinas_kcal')) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('hidratos_des', 'Hidratos des', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('hidratos_des', null, array('class' => 'form-control input-sm', 'id' => 'hidratos_des', 'placeholder' => 'Ingrese hidratos_des')) !!}
				</div>
				{!! Form::label('hidratos_kcal', 'Hidratos Kcal', array('class' => 'col-lg-2 col-md-2 col-sm-2 control-label')) !!}
				<div class="col-lg-4 col-md-4 col-sm-4">
					{!! Form::text('hidratos_kcal', null, array('class' => 'form-control input-sm', 'id' => 'hidratos_kcal', 'placeholder' => 'Ingrese hidratos_kcal')) !!}
				</div>
			</div>
			<hr>
			<div class="form-group">
				{!! Form::label('ingrediente', 'Ingrediente en BD', array('class' => 'col-lg-4 col-md-4 col-sm-4 control-label')) !!}
				<div class="col-lg-8 col-md-8 col-sm-8">
					{!! Form::text('ingrediente', null, array('class' => 'form-control input-sm', 'id' => 'ingrediente', 'placeholder' => 'Ingrese ingrediente')) !!}
				</div>
			</div>
			<div class="form-group">
				<hr>
				{!! Form::label('ingredienten', 'Ingrediente nuevo', array('class' => 'col-lg-4 col-md-4 col-sm-4 control-label')) !!}
				<div class="col-lg-7 col-md-7 col-sm-7">
					{!! Form::text('ingredienten', null, array('class' => 'form-control input-sm', 'id' => 'ingredienten', 'placeholder' => 'Ingrese ingrediente nuevo')) !!}
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1">
					<button id="btningredientenuevo" type="button" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<table border="1" align="center" style="width: 100%;">
						<thead>
							<tr>
								<td width="5%">#</td>
								<td width="20%">CANT.</td>
								<td width="20%">UNI.</td>
								<td width="50%">INGRED.</td>
								<td width="5%">SACAR</td>
							</tr>
						</thead>
						<tbody id="cuerpo"></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12 col-md-12 col-sm-12 text-right">
			{!! Form::button('<i class="fa fa-check fa-lg"></i> '.$boton, array('class' => 'btn btn-success btn-sm', 'id' => 'btnGuardar', 'onclick' => 'guardarPlato(\''.$entidad.'\', this)')) !!}
			{!! Form::button('<i class="fa fa-exclamation fa-lg"></i> Cancelar', array('class' => 'btn btn-warning btn-sm', 'id' => 'btnCancelar'.$entidad, 'onclick' => 'cerrarModal();')) !!}
		</div>
	</div>
{!! Form::close() !!}
<script type="text/javascript">
$(document).ready(function() {
	var selectunidades = "";
	@foreach($unidades as $uv)
		selectunidades += "<option value='{{$uv->id}}'>{{$uv->nombre}}</option>";
	@endforeach
	$(".closdat").remove();
    $(".modal-title").append('<button type="button" class="close closdat" onclick="$(this).parent().parent().parent().parent().parent().modal(\'hide\')" title="Cerrar"><i style="font-weight:bold;color:red; font-weight: bold;" class="glyphicon glyphicon-remove-circle"></i></button>');
	configurarAnchoModal('1650');
	init(IDFORMMANTENIMIENTO+'{!! $entidad !!}', 'M', '{!! $entidad !!}');	
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
			}
		}
	});
	ingrediente.initialize();
	$('#ingrediente').typeahead(null,{
		displayKey: 'value',
		source: ingrediente.ttAdapter()
	}).on('typeahead:selected', function (object, datum) {
		$("#cuerpo").append('<tr><td class="num"></td><td><input class="cant numerin form-control input-sm" type="text"/><input type="hidden" class="inid" value="' + datum.id + '"/><input type="hidden" class="nomb" value="' + datum.value + '"/></td><td><select class="form-control unity">' + selectunidades + '</select></td><td>' + datum.value + '</td><td style="text-align:center;"><button class="remove btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td></tr>');
		ordenarnumeros();
		$('.numerin').inputmask('decimal', { radixPoint: ".", autoGroup: true, groupSeparator: "", groupSize: 3, digits: 2 });
		$('#ingrediente').typeahead('val', '');
	});
	             
	function autosize(){
		$("textarea").each(function(index, value) {
			this.style.cssText = 'height:auto; padding:0';
		    this.style.cssText = 'height:' + this.scrollHeight + 'px';
		});
	}

	$("textarea").on("keyup", function() {
		autosize();
	});

	autosize();
}); 

$(document).on("click", ".remove", function(e) {
	e.preventDefault();
	$(this).parent().parent().remove();
	ordenarnumeros();
});

$(document).on("click", "#btningredientenuevo", function(e) {
	e.preventDefault();
	e.stopImmediatePropagation();
	if($("#ingredienten").val() !== "") {
		var valor = $("#ingredienten").val();
		var esta = false;
		$(".nomb").each(function(index, el) {
			if($(this).val() == valor) {
				esta = true;
			}
		});

		if(esta == false) {
			$("#cuerpo").append('<tr><td class="num"></td><td><input class="cant numerin form-control input-sm" type="text"/><input type="hidden" class="inid" value="0"/><input type="hidden" class="nomb" value="' + valor + '"/></td>' + selectunidades + '<td>' + valor + '</td><td style="text-align:center;"><button class="remove btn btn-xs btn-danger"><i class="fa fa-remove"></i></button></td></tr>');
			ordenarnumeros();
			$('.numerin').inputmask('decimal', { radixPoint: ".", autoGroup: true, groupSeparator: "", groupSize: 3, digits: 2 });
		} else {
			var a = 'El nombre del ingrediente ya existe.';
			alertaG(a);
		}			
	} else {
		var a = 'Escribe un ingrediente nuevo.';
		alertaG(a);
	}
});

function ordenarnumeros() {
	var a = 1;
	$("#cuerpo tr .num").each(function(index, el) {
		$(this).html(a);
		a++;
	});
}

function validarinputs() {
	cadena1 = "";
	cadena2 = "";
	cadena4 = "";
	cadena3 = "";
	v = true;
	$(".cant").each(function(index, el) {
		if($(this).val() == "") {
			v = false;
		} else {
			cadena1 += $(this).val() + ";";
		}
	});
	$(".inid").each(function(index, el) {
		cadena2 += $(this).val() + ";";
	});
	$(".unity").each(function(index, el) {
		cadena4 += $(this).val() + ";";
	});
	$(".nomb").each(function(index, el) {
		cadena3 += $(this).val() + "@@@";
	});
	$("#cadenaingredientes").val(cadena1 + "|" + cadena2 + "|" + cadena3 + "|" + cadena4);
	return v;
}

function guardarPlato(entidad, idboton) {
	if(!validarinputs()){
		a = 'No dejes cantidades vacias.';
		alertaG(a);
		return false;
	} else {
		var filas = 0;
		$(".cant").each(function(index, el) {
			filas++;
		});
		if(filas == 0) {
			a = 'Ingresa al menos un ingrediente.';
			alertaG(a);
			return false;
		} else {
			var idformulario = IDFORMMANTENIMIENTO + entidad;
			var data         = submitForm(idformulario);
			var respuesta    = '';
			var btn = $(idboton);	
			btn.button('loading');
			data.done(function(msg) {
				respuesta = msg;
			}).fail(function(xhr, textStatus, errorThrown) {
				respuesta = 'ERROR';
			}).always(function() {
				btn.button('reset');
				if (respuesta=== 'OK') {
					cerrarModal();
					buscar('Plato');
					a = 'Plato registrado/editado correctamente.';          
	                alertaB(a);   
				} else {
					mostrarErrores(respuesta, idformulario, entidad);
				}
			});
		}			
	}
}

@if($plato !== NULL)
	$.ajax({
		url: 'plato/inicializarTablaIngredientes?pid={{ $plato->id }}',
		success: function(a) {
			$("#cuerpo").html(a);
			$('.numerin').inputmask('decimal', { radixPoint: ".", autoGroup: true, groupSeparator: "", groupSize: 3, digits: 2 });
		}
	});	
@endif
</script>