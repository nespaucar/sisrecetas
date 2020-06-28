<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workertype extends Model {
    use SoftDeletes;
    protected $table = 'workertype';
    protected $dates = ['deleted_at'];
    
    public function scopelistar($query, $name) {
        return $query->where(function($subquery) use($name) {
        	if (!is_null($name)) {
        		$subquery->where('name', 'LIKE', '%'.$name.'%');
        	}
        })->orderBy('name', 'ASC');
    }
}
