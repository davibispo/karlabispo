@extends('layouts.page')

@section('content')

<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <a href="{{ route('blog.index') }}" class=""><h2>Blog Raízes da Infância</h2></a>
            <p></p>
        </div>

        <div class="row">

        <div class="col-lg-8 entries">

            <article class="entry entry-single">

            <div class="entry-img">
                <img src="{{ url("storage/{$post->imagem}") }}" alt="{{ $post->titulo }}" class="img-fluid">
            </div>

            <h2 class="entry-title">
                {{ $post->titulo }}
            </h2>

            <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $post->autor }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ date('d-m-Y', strtotime($post->created_at)) }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> {{ $comentarioQtde }} Comentário(s)</li>
                </ul>
            </div>

            <div class="entry-content">
                {{ $post->texto }}
            </div>

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
            <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
            <div>
                <h4>Karla Bispo</h4>
                <div class="social-links">
                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                Itaque quidem optio quia voluptatibus dolorem dolor. 
                Modi eum sed possimus accusantium. 
                Quas repellat voluptatem officia numquam sint aspernatur voluptas. 
                sse et accusantium ut unde voluptas.
                </p>
            </div>
            </div><!-- End blog author bio -->

            <div class="blog-comments">

            <h4 class="comments-count">{{ $comentarioQtde }} Comentário(s)</h4>
            
            @foreach ($comentarios as $comentario)
            @if ($comentario->post_id == $post->id)
                
            <div id="comment-2" class="comment">
                <div class="d-flex">
                    <div>
                        <h5><b>{{ $comentario->nome }}</b>
                            @if (Auth::check() && (DB::table('users')->select('status')->where('status', 9)->value('status') == '9'))
                            <a href="#" class="reply" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-reply-fill"></i> Responder</a>
                            @endif
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Responder Comentário</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        {{ Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\RespostaController@store', 'class'=>'form-horizontal']) }}
                                        
                                        <div class="row">
                                            <div class="col form-group">
                                                {{ Form::textarea('resposta', null, array('class' =>'form-control', 'cols' => 20, 'rows' =>4, 'required' => '', 'placeholder'=>'Sua resposta', 'maxlength' => ""))}}
                                            </div>
                                        </div>
                                        <input type="hidden" name="comentario_id" value="{{ $comentario->id }}">
                                        <br>
                                        <div class="col form-group">
                                            {{ Form::submit('Postar Resposta', ['class'=>'btn btn-secondary btn-sm']) }}
                                        </div>
                                        {{ Form::close() }}
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
  
                        </h5>
                        <i><time datetime="01-01-2020">{{ date('d-m-Y', strtotime($comentario->created_at)) }}</time></i>
                        <p>{{ $comentario->comentario }}</p>
                    </div>
                </div>

                
                <div id="comment-reply-1" class="comment comment-reply">
                    @foreach ($respostas as $resposta)
                    @if ($resposta->comentario_id == $comentario->id)
                    <div class="d-flex">
                        <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                        <div>
                            <h5><b>{{ $resposta->nome }}</b></h5>
                            <i><time datetime="2020-01-01">{{ date('d-m-Y', strtotime($resposta->created_at)) }}</time></i>
                            <p>{{ $resposta->resposta }}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div><!-- End comment reply #1-->
            </div><!-- End comment #2-->
            @endif
            @endforeach    

            <div class="reply-form">
                <h4>Deixe um Comentário</h4>
                <p>Seu e-mail não será publicado. </p>
                {{ Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\ComentarioController@store', 'class'=>'form-horizontal']) }}
                <div class="row">
                    <div class="col-md-6 form-group">
                        {{ Form::text('nome', null, ['class'=>'form-control', 'required','placeholder'=>'Seu Nome']) }}
                    </div>
                    <div class="col-md-6 form-group">
                        {{ Form::email('email', null, ['class'=>'form-control', 'required','placeholder'=>'Seu e-mail']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        {{ Form::textarea('comentario', null, array('class' =>'form-control', 'cols' => 20, 'rows' =>4, 'required' => '', 'placeholder'=>'Seu Comentário', 'maxlength' => ""))}}
                    </div>
                </div>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                    {{ Form::submit('Postar Comentário', ['class'=>'btn btn-primary btn-sm']) }}

                {{ Form::close() }}

            </div>

            </div><!-- End blog comments -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

            <div class="sidebar">

            <h3 class="sidebar-title">Busca</h3>
            <div class="sidebar-item search-form">
                <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categorias</h3>
            <div class="sidebar-item categories">
                <ul>
                    @foreach ($categorias as $item)  
                    <li>
                    <a href="#">{{ $item->categoria }} 
                        <span>
                        ({{ DB::table('posts')->select('categoria')->where('ativo',1)->where('categoria', $item->categoria)->count('categoria') }})
                        </span>
                    </a>
                    </li>
                    @endforeach
                </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Artigos Recentes</h3>
            <div class="sidebar-item recent-posts">
                @foreach ($posts as $post)  
                <div class="post-item clearfix">
                    <img src="{{ url("storage/{$post->imagem}") }}" alt="{{ $post->titulo }}" style="width: 60px">
                    <h4><a href="{{ route('blog.show', $post->id) }}">{{ $post->titulo }}</a></h4>
                    <time datetime="2020-01-01">{{ date('d-m-Y', strtotime($post->created_at)) }}</time>
                </div>
                @endforeach
            </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Single Section -->

@endsection