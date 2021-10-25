@extends('layouts.page')

@section('content')
    
    <section id="portfolio" class="portfolio section-bg" style="background-color: white">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Livraria</h2>
                <p>Aqui você encontra os melhores livros para desfrutar de leituras interessantes e enriquecedoras.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Tudo</li>
                        <li data-filter=".filter-infantil">Infantil</li>
                        <li data-filter=".filter-familia">Família</li>
                        <li data-filter=".filter-educacao">Educação</li>
                    </ul>
                </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($livros as $livro)
                <div class="col-lg-2 col-md-6 portfolio-item filter-{{ $livro->categoria  }}">
                    <div class="portfolio-wrap">
                       {{ urlencode($livro->codigo_html) }}
                    </div>
                </div>
                @endforeach

                <!--
                <div class="col-lg-2 col-md-6 portfolio-item filter-educacao">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <p>Web</p>
                        <h4>Web 3</h4>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>-->

                </div>
                
            </div>
            </section><!-- End Portfolio Section -->

        </div>
    </section>

@endsection