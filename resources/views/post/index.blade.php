@extends('layouts.page')

@section('content')

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="container mt-3">
                <h2>BLOG | Artigos</h2>
                <p>Administração de postagens</p> 
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif           
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Título</th>
                      <th>Categoria</th>
                      <th>Editar</th>
                      <th>Ativo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->titulo }}</td>
                        <td>{{ $post->categoria }}</td>
                        <td>
                            <a href="{{ route('post.edit', $post->id) }}">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            @if ($post->ativo == 1)
                                <a href="{{ route('post.ativar', $post->id) }}"><i class="bi bi-toggle-on" style="color:green"></i></a>
                            @else
                                <a href="{{ route('post.ativar', $post->id) }}"><i class="bi bi-toggle-off" style="color:red"></i></a>
                            @endif
                        </td>
                        <td>
                            {!! Form::model($post, ['method'=>'DELETE', 'action'=>['App\Http\Controllers\PostController@destroy', $post->id], 'class'=>'form-horizontal']) !!}
                                {!! Form::submit('Excluir', ['class'=>'btn btn-danger btn-sm', 'style'=>'font-size:10px', 'data-toggle'=>'tooltip', 'title'=>'Excluir'])!!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                <div class="btn">
                    <a href="{{ route('post.create') }}" class="btn btn-outline-secondary">
                        Criar Novo
                    </a>
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary">
                        Página do Blog
                    </a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                        Voltar ao Administrativo
                    </a>
                </div>

            </div>           

        </div>
    </section>

@endsection
