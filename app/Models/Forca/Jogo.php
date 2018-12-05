<?php

namespace App\Models\Forca;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model {

    protected $table = 'forca_jogo';

    protected $fillable = ['jogador', 'resumo_jogo', 'pergunta_id', 'nota', 'resultado'];

    public function setNotaAttribute($nota)
    {
        $this->attributes['nota'] = $nota + 1;
    }

}