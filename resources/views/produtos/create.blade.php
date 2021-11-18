@extends('layouts.page')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ADICIONAR PRODUTO</h2>
                <p>Preencha corretamente o formulário para inserir um novo produto</p>
            </div>

            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center"><b>CADASTRAR PRODUTO</b></div>

                            <div class="card-body">                
                                {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\ProdutoController@store', 'class'=>'form-horizontal']) !!}
                                
                                <div class="form-group">
                                    {!! Form::label('descricao', null, ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::text('descricao', null, ['class' =>'form-control input','placeholder'=>'Cole aqui o código do Texto']) !!}
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    {!! Form::label('imagem', null, ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::text('imagem', null, ['class' =>'form-control input','placeholder'=>'Cole aqui o código da Imagem']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('codigo_html', null, ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::textarea('codigo_html', null, ['class' =>'form-control input', 'cols'=> 20, 'rows'=>5, 'maxlength'=> '','placeholder'=>'Cole aqui o cógio HTML Texto + Imagem']) !!}
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    {!! Form::label('categoria', null, ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::select('categoria', [
                                            'livros' => 'Livros', 
                                            'jogos' => 'Jogos',
                                            ], null, ['class' => 'form-control', 'placeholder' => '-- Categoria da Produto --']) !!}
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {!! Form::submit('Cadastrar', ['class'=>'btn btn-dark']) !!}
                                        {!! Form::close() !!}
                                        <a href="{{ route('produtos.index') }}"  class="btn btn-outline-secondary">Lista de Produtos</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection