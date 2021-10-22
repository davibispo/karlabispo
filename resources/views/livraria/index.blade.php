@extends('layouts.page')

@section('content')
    
    <section id="portfolio" class="portfolio section-bg" style="background-color: white">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Livraria</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                <a href="{{ route('livraria.create') }}">Adicionar</a>
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

                <div class="col-lg-4 col-md-6 portfolio-item filter-infantil">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Curso 1</h4>
                        <p>Como ser pais raízes</p>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-educacao">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-infantil">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Curso 2</h4>
                        <p>Como evitar traumas na infância</p>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-familia">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
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

                <div class="col-lg-4 col-md-6 portfolio-item filter-educacao">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-infantil">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Curso 3</h4>
                        <p>Resiliência emocional</p>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-familia">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-familia">
                    <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-educacao">
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
                </div>

                </div>
                
            </div>
            </section><!-- End Portfolio Section -->

        </div>
    </section>

@endsection