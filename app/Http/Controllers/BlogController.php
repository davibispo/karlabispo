<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('ativo', 1)->latest()->paginate(3);
        $todos = Post::all()->where('ativo', 1)->sortByDesc('id')->take(5);
        $categorias = DB::table('posts')->select('categoria')->where('ativo',1)->distinct()->get();

        return view('blog.index', compact('posts','todos','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $post = Post::where('id', $id)->first();
        $posts = Post::all()->where('ativo', 1)->sortByDesc('id');
        $categorias = DB::table('posts')->select('categoria')->distinct()->get();
        $comentarios = Comentario::all()->where('ativo', 1);
        $respostas = Resposta::all()->where('ativo', 1);

        $comentarioQtde = DB::table('comentarios')->where('post_id', $id)->select('id')->distinct()->count();
        
        return view('blog.show', compact('post','posts','categorias','comentarios','respostas','comentarioQtde'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function categoria($id)
    {
        //$categoria = Post::where('id', $)
    }
}
