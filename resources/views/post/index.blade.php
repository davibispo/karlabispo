@extends('layouts.page')

@section('content')

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="container mt-3">
                <h2>BLOG | Artigos</h2>
                <p>Administração de postagens</p>            
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Categoria</th>
                      <th>Imagem</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->titulo }}</td>
                        <td>{{ $post->categoria }}</td>
                        <td>{{ $post->imagem }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>           

        </div>
    </section>

@endsection
