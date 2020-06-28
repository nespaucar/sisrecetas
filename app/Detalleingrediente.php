<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalleingrediente extends Model {
	use SoftDeletes;
    protected $table = 'detalleingrediente';
    protected $dates = ['deleted_at'];

    public function plato() {
        return $this->belongsTo('App\Plato', 'plato_id');
    }

    public function unidad() {
        return $this->belongsTo('App\Unidad', 'unidad_id');
    }

    public function ingrediente() {
        return $this->belongsTo('App\Ingrediente', 'ingrediente_id');
    }
}
