@extends('layouts.page')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ARQUIVOS DIGITAIS</h2>
                <p>Baixe conteúdos gratuitamente.</p>
            </div>

            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center"><b>LISTA DE ARQUIVOS PARA DOWNLOAD</b></div>

                            <div class="card-body">                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Arquivo</th>
                                            <th>Baixar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ebooks as $e)
                                        <tr>
                                            <td>
                                                <a href="{{ url("storage/{$e->arquivo}") }}" target="_blank"><img src="{{ url("storage/{$e->imagem}") }}" alt="{{ $e->descricao }}" class="img-fluid arquivo">
                                                    {!! $e->descricao !!}
                                                </a>
                                            </td>
                                            <td><a href="{{ url("storage/{$e->arquivo}") }}" target="_blank"><i class="bi bi-download"></i></a></td>
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
    </section>

@endsection