<?php

namespace App\Http\Controllers\Forca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Forca\Pergunta;
use App\Models\Forca\Categoria;

class ForcaController extends Controller
{
    
    public function adicionar(Request $request)
    {
        $this->validate($request, [
            'dica' => 'required',
            'resposta' => 'required',
        ]);

        $dados = $request->all();
        $dados['ativo'] = true;

        $pergunta = Pergunta::create($dados);

        return response()->json($pergunta, 201);
    }

    public function perguntaAleatoria(Request $request)
    {
        if($request->has('categoria_id')) {
            $perguntas = Pergunta::where('categoria_id', $request->input('categoria_id'))->get()->toArray();
        }
        else {
            $perguntas = Pergunta::all()->toArray();
        }

        $indice = array_rand($perguntas);

        return response()->json($perguntas[$indice], 200);
    }

    public function registrarJogo(Request $request)
    {
        $this->validate($request, [
            'resumo_jogo' => 'required',
            'nota' => 'required|integer',
            'pergunta_id' => 'required|integer',
        ]);

        $dados = $request->all();

        $jogo = Jogo::create($dados);

        return response()->json($jogo, 201);

    }


}