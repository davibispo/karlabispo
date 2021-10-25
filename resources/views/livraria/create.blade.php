@extends('layouts.form')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ADICIONAR PRODUTO</h2>
                <p>Preencha corretamente o formulário para inserir nu novo produto</p>
            </div>

            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center" style="background-color:cornflowerblue;"><b>CADASTRAR NOVO PRODUTO</b></div>

                            <div class="card-body">                
                                {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\LivrariaController@store', 'class'=>'form-horizontal']) !!}
                               
                                <div class="form-group">
                                    {!! Form::label('codigo_html', 'Código do livro', ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('codigo_html', null, ['class' => 'form-control', 'placeholder'=>'Cole aqui o cógio HTML']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('categoria', 'Categoria do livro', ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::select('categoria', [
                                            'infantil' => 'Infantil', 
                                            'educacao' => 'Educação',
                                            'familia' => 'Família',
                                            'politica' => 'Política',
                                            ], null, ['class' => 'form-control', 'placeholder' => '-- Categoria do livro --']) !!}
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {!! Form::submit('Enviar Solicitação', ['class'=>'btn btn-primary']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection