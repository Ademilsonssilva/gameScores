<?php

namespace App\Models\Forca;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = 'forca_categoria';

    protected $fillable = ['nome'];

}