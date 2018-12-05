<?php

namespace App\Models\Forca;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model {

    protected $table = 'forca_pergunta';

    protected $fillable = [ 'dica', 'resposta', 'email_criador', 'ativo', 'categoria_id' ];

    public function  setRespostaAttribute($resposta)
    {
        $this->attributes['resposta'] = substr(strtolower(removeAcentos($resposta)), 0, 14);
    }

}