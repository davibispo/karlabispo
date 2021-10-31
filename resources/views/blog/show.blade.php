@extends('layouts.page')

@section('content')

<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

        <div class="col-lg-8 entries">

            <article class="entry entry-single">

            <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                {{ $post->titulo }}
            </h2>

            <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $post->autor }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ date('d-m-Y', strtotime($post->created_at)) }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
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

            <h4 class="comments-count">8 Comments</h4>

            <div id="comment-1" class="comment">
                <div class="d-flex">
                <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                </div>
                </div>
            </div><!-- End comment #1 -->

            <div id="comment-2" class="comment">
                <div class="d-flex">
                <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                    Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                    <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                    </p>
                    </div>
                </div>

                <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                    <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                        Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                    </div>
                    </div>

                </div><!-- End comment reply #2-->

                </div><!-- End comment reply #1-->

            </div><!-- End comment #2-->

            <div id="comment-3" class="comment">
                <div class="d-flex">
                <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                <div>
                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                    Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                    Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                    </p>
                </div>
                </div>

            </div><!-- End comment #3 -->

            <div id="comment-4" class="comment">
                <div class="d-flex">
                <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                <div>
                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                    Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                    </p>
                </div>
                </div>

            </div><!-- End comment #4 -->

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
                <button type="submit" class="btn btn-primary">Postar Comentário</button>

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
                        ({{ DB::table('posts')->select('categoria')->where('categoria', $item->categoria)->count('categoria') }})
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