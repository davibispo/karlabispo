<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('id');
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->autor = Auth::user()->name;
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->resumo = $request->resumo;
        $post->categoria = $request->categoria;

        if($request->imagem->isValid()){
            $nameFile = Str::of($request->titulo)->slug('-').date('his').'.' .$request->imagem->GetClientOriginalExtension();
            $imagem = $request->imagem->storeAs('public/posts', $nameFile);
            $imagem = str_replace('public/','',$imagem);
            $post['imagem'] = $imagem;

        }

        $post->save();

        return redirect()->route('post.index');
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
        $post = Post::where('id', $id)->first();
        //dd($post);

        return view('post.update', compact('post'));
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
        $post = Post::where('id', $id)->first();
        
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->resumo = $request->resumo;
        $post->categoria = $request->categoria;

        if($request->imagem->isValid()){
            $nameFile = Str::of($request->titulo)->slug('-').date('his').'.' .$request->imagem->GetClientOriginalExtension();
            $imagem = $request->imagem->storeAs('public/posts', $nameFile);
            $imagem = str_replace('public/','',$imagem);
            $post['imagem'] = $imagem;

        }
        
        $post->update();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id);
        $post->delete();

        return redirect()->back()->with('status','Post excluído com sucesso!');
    }

    public function ativar($id)
    {
        $post = Post::find($id);

        if($post->ativo == 0){
            $post->ativo = 1; //ativar cadastro
            $post->update();
            return redirect()->back();
        }else{
            $post->ativo = 0; //desativar cadastro
            $post->update();
            return redirect()->back();
        }
    }
}
