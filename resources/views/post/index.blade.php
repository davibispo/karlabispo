@extends('layouts.page')

@section('content')

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>BLOG - CRIAR POST</h2>
                <p>Criação de post para o Blog.</p>
            </div>

            <div class="row">
                <a href="{{route('post.create')}}">Criar um novo post</a>
            </div>

        </div>
    </section>

@endsection
