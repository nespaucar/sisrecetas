<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plato extends Model {
	use SoftDeletes;
    protected $table = 'plato';
    protected $dates = ['deleted_at'];

    public function detalleingredientes() {
		return $this->hasMany('App\Detalleingrediente');
	}

	public function categoria() {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public function person() {
        return $this->belongsTo('App\Person', 'person_id');
    }
}
