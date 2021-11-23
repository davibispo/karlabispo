@extends('layouts.page')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ADICIONAR ARQUIVO</h2>
                <p>Preencha corretamente o formulário para inserir um novo arquivo</p>
            </div>

            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center"><b>INSERIR ARQUIVO</b></div>

                            <div class="card-body">                
                                {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\EbookController@store','enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
                                
                                <div class="form-group">
                                    {!! Form::label('descricao', null, ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::text('descricao', null, ['class' =>'form-control input','placeholder'=>'Cole aqui o código do Texto']) !!}
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    {!! Form::label('arquivo', 'Arquivo:', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-12">
                                        <div class="input-group input-group-sm">
                                            <input type="file" name="arquivo" required class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    {!! Form::label('imagem', 'Imagem:', ['class'=>'col-sm-4 col-form-label text-md-right']) !!}
                                    <div class="col-md-12">
                                        <div class="input-group input-group-sm">
                                            <input type="file" name="imagem" required class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('tipo', null, ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::select('tipo', [
                                            'eBook' => 'eBook', 
                                            'Outro' => 'Outro',
                                            ], null, ['class' => 'form-control', 'placeholder' => '-- Categoria da Produto --']) !!}
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {!! Form::submit('Cadastrar', ['class'=>'btn btn-dark']) !!}
                                        {!! Form::close() !!}
                                        <a href="{{ route('ebooks.index') }}"  class="btn btn-outline-secondary">Página de Arquivos</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">            
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Descrição</th>
                                            <th>Arquivo</th>
                                            <th>Imagem</th>
                                            <th>Tipo</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ebooks as $e)
                                        <tr>
                                            <td>{!! $e->descricao !!}</td>
                                            <td><a href="{!! $e->arquivo !!}">Baixar Arquivo</a></td>
                                            <td><a href="{!! $e->imagem !!}">Baixar Imagem</a></td>
                                            <td>{!! $e->tipo !!}</td>
                                            <td>
                                                {!! Form::model($e, ['method'=>'DELETE', 'action'=>['App\Http\Controllers\EbookController@destroy', $e->id], 'class'=>'form-horizontal']) !!}
                                                    {!! Form::submit('Excluir', ['class'=>'btn btn-danger btn-sm', 'style'=>'font-size:10px', 'data-toggle'=>'tooltip', 'title'=>'Excluir'])!!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection