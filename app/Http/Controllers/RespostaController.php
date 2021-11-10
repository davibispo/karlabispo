<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespostaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('respostas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd($id);
        return view('respostas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resposta = new Resposta();

        $resposta->nome = auth()->user()->name;
        $resposta->comentario_id = $request->comentario_id;
        $resposta->resposta = $request->resposta;

        $comentarioPost = DB::table('comentarios')->select('post_id')->where('id', $resposta->comentario_id)->where('ativo', 1)->value('post_id');
        $postId = DB::table('posts')->select('id')->where('id', $comentarioPost)->value('id');

        $resposta->save();

        return redirect()->route('blog.show', $postId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resposta = Resposta::where('id', $id);

        return view('resposta.update', compact('resposta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resposta = Resposta::where('id', $id)->first();
        
        $resposta->nome = auth()->user()->name;
        $resposta->comentario_id = $request->comentario_id;
        $resposta->resposta = $request->resposta;
        
        //recupera o post_id para voltar a rota do post comentado
        $postId = DB::table('comentarios')->where('id', $resposta->comentario_id)->value('post_id');

        $resposta->update();

        return redirect()->route('blog.show', $postId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
