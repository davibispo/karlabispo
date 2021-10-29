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
                      <th>Ativo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->titulo }}</td>
                        <td>{{ $post->categoria }}</td>
                        <td>{{ $post->ativo }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <div class="btn">
                    <a href="{{ route('post.create') }}">
                        <button class="btn btn-dark">Criar Novo</button>
                    </a>
                </div>
                
                <div class="btn">
                    <a href="{{ route('blog.index') }}">
                        <button class="btn btn-outline-secondary">Página do Blog</button>
                    </a>
                </div>
            </div>           

        </div>
    </section>

@endsection
