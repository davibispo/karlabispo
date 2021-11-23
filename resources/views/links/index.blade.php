@extends('layouts.page')

@section('content')
    
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>LINKS INTERESSANTES</h2>
                <p>Recomendações de ótimos conteúdos</p>
            </div>

            <div class="row">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-center"><b>LINKS RECOMENDADOS</b></div>

                            <div class="card-body">                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Link</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($links as $e)
                                        <tr>
                                            <td><a href="{{ $e->link }}" target="_blank">{!! $e->link !!}</a></td>
                                            <td>{!! $e->descricao !!}</td>
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