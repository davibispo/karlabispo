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
                            <div class="card-header text-center"><b>LISTA DE PRODUTOS</b></div>

                            <div class="card-body">                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Descrição</th>
                                            <th>Categoria</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produtos as $p)
                                        <tr>
                                            <td>{!! $p->descricao !!}</td>
                                            <td>{!! $p->categoria !!}</td>
                                            <td>
                                                {!! Form::model($p, ['method'=>'DELETE', 'action'=>['App\Http\Controllers\ProdutoController@destroy', $p->id], 'class'=>'form-horizontal']) !!}
                                                    {!! Form::submit('Excluir', ['class'=>'btn btn-danger btn-sm', 'style'=>'font-size:10px', 'data-toggle'=>'tooltip', 'title'=>'Excluir'])!!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="">
                            <a href="{{ route('produtos.create') }}" class="btn btn-outline-secondary">
                                Cadastrar Produto
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection