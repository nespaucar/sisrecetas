<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model {
    use SoftDeletes;
    protected $table = 'person';
    protected $dates = ['deleted_at'];

    public function workertype() {
        return $this->belongsTo('App\Workertype', 'workertype_id');
    }

    public function especialidad() {
        return $this->belongsTo('App\Especialidad', 'especialidad_id');
    }

    public function distrito2() {
        return $this->belongsTo('App\Distrito', 'distrito');
    }

    public function platos() {
        return $this->hasMany('App\Plato');
    }

    public function scopelistar($query, $name, $type) {
        return $query->where(function($subquery) use($name) {
        	if (!is_null($name)) {
        		$subquery->where('name', 'LIKE', '%'.$name.'%');
        	}
        })->where(function($subquery) use($type) {
        	if (!is_null($type)) {
        		$subquery->where('type', '=', $type);
        	}
        })->orderBy('firstname', 'ASC');
    }
}
