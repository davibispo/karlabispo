@extends('layouts.page')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ADICIONAR LINK</h2>
                <p>Preencha corretamente o formulário para inserir um novo link</p>
            </div>

            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center"><b>INSERIR LINK</b></div>

                            <div class="card-body">                
                                {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\LinkController@store', 'class'=>'form-horizontal']) !!}
                                
                                <div class="form-group">
                                    {!! Form::label('link', null, ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::text('link', null, ['class' =>'form-control input','placeholder'=>'Cole aqui o link']) !!}
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::label('descricao', 'Descrição', ['class'=>'col-md-4 control-label']) !!}
                                    <div class="col-md-12">
                                        {!! Form::textarea('descricao', null, ['class' =>'form-control input','cols'=>5,'rows'=>5 ,'placeholder'=>'Digite aqui a dscrição do link']) !!}
                                    </div>
                                </div>
                               
                                <br>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {!! Form::submit('Cadastrar Link', ['class'=>'btn btn-dark']) !!}
                                        {!! Form::close() !!}
                                        <a href="{{ route('links.index') }}"  class="btn btn-outline-secondary">Página de Links</a>
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

        </div>
    </section>

@endsection