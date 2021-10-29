@extends('layouts.blog')

@section('content')
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>BLOG RAÍZES DA INFÂNCIA</h2>
            <p>Aqui teremos artigos e discussões sobre os temas mais importantes para a criação de crianças e jovens.</p>
        </div>

        <div class="row">

          <div class="col-lg-8 entries">

            @foreach ($posts as $post)    
            <article class="entry">
              
              <div class="entry-img">
                <img src="{{ url("storage/{$post->imagem}") }}" alt="{{ $post->titulo }}" class="img-fluid blog-imagem">
              </div>
              
              <h2 class="entry-title">
                <a href="{{ route('blog.show', $post->id) }}">{{ $post->titulo }}</a>
              </h2>
              
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $post->autor }}</li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ date('d-m-Y', strtotime($post->created_at)) }}</li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('blog.show', $post->id) }}">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>{{ $post->resumo }}<p>
                <div class="read-more">
                  <a href="{{ route('blog.show', $post->id) }}">Leia Mais</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

                <div class="sidebar-item">
                    <img src="assets/img/imgkb/image3-sem-fundo2.png" class="img-fluid" alt="">
                </div>

              <h3 class="sidebar-title">Busca</h3>
              <div class="sidebar-item search-form">
                <input class="form-control" id="myInput" type="text" placeholder="Pesquise aqui..." autofocus>
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
              <!--
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div> End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
@endsection