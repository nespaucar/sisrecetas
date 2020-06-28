<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingrediente extends Model {
	use SoftDeletes;
    protected $table = 'ingrediente';
    protected $dates = ['deleted_at'];
}
