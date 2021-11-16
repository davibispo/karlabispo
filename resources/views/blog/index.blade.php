@extends('layouts.page')

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
                <img src="{{ url("storage/{$post->imagem}") }}" alt="{{ $post->titulo }}" class="img-fluid">
              </div>
              
              <h2 class="entry-title">
                <a href="{{ route('blog.show', $post->id) }}">{{ $post->titulo }}</a>
              </h2>
              
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $post->autor }}</li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ date('d/m/Y', strtotime($post->created_at)) }}</li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>{{ DB::table('comentarios')->where('post_id', $post->id)->select('id')->distinct()->count() }} Comentário(s)</li>
                </ul>
              </div>

              <div class="entry-content">
                <p>{!! $post->resumo !!}<p>
                <div class="read-more">
                  <a href="{{ route('blog.show', $post->id) }}">Leia Mais</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            
            <div class="pagination">
              {{ $posts->links("pagination::bootstrap-4") }}
            </div>
            
            
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item">
                <div class="" style="text-align: center">
                  <img src="{{ asset('assets/img/perfil-blog.png') }}"  alt="" style="width: 200px;">
                </div>
              </div>

              <h3 class="sidebar-title">Categorias</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach ($categorias as $item)  
                  <li>
                    <a href="{{ route('blog.categoria', $item->categoria) }}">{{ $item->categoria }} 
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
                @foreach ($todos as $item)  
                <div class="post-item clearfix">
                  <img src="{{ url("storage/{$item->imagem}") }}" alt="{{ $item->titulo }}" style="width: 60px">
                  <h4><a href="{{ route('blog.show', $post->id) }}">{{ $item->titulo }}</a></h4>
                  <time datetime="2020-01-01">{{ date('d/m/Y', strtotime($item->created_at)) }}</time>
                </div>
                @endforeach
              </div><!-- End sidebar recent posts-->
              
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
@endsection