<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ebooks = Ebook::all()->where('ativo', 1);
        return view('ebooks.index', compact('ebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ebooks = Ebook::all()->where('ativo', 1);
        return view('ebooks.create', compact('ebooks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $ebook = new Ebook();
        $ebook->descricao = $request->descricao;

        if($request->arquivo->isValid()){
            $nameFile = Str::of($request->descricao)->slug('-').date('his').'.' .$request->arquivo->GetClientOriginalExtension();
            $arquivo = $request->arquivo->storeAs('public/arquivos', $nameFile);
            $arquivo = str_replace('public/','',$arquivo);
            $ebook['arquivo'] = $arquivo;
        }

        if($request->imagem->isValid()){
            $nameFile = Str::of($request->descricao)->slug('-').date('his').'.' .$request->imagem->GetClientOriginalExtension();
            $imagem = $request->imagem->storeAs('public/arquivos', $nameFile);
            $imagem = str_replace('public/','',$imagem);
            $ebook['imagem'] = $imagem;  
        }

        $ebook->tipo = $request->tipo;

        $ebook->save();

        return view('ebooks.index');
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
        $ebook = Ebook::where('id', $id);
        $ebook->delete();

        return redirect()->back()->with('status','Arquivo excluído com sucesso!');
    }
}
