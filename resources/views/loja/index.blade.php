@extends('layouts.page')

@section('content')
    
<section id="portfolio" class="portfolio section-bg" style="background-color: white">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Loja</h2>
            <p>Aqui você encontra as melhores oportunidades de comprar livros e outros itens educacionais.</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Tudo</li>
                    <li data-filter=".filter-livros">Livros</li>
                    <li data-filter=".filter-jogos">Jogos</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($produtos as $p)
                
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $p->categoria }}">
                <div class="portfolio-wrap">
                    {!! $p->codigo_html !!}
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
            
        </div>
        </section><!-- End Portfolio Section -->

    </div>
</section>
@endsection