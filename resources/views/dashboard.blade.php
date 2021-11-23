<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Olá, {{ Auth::user()->name }}! Você está no ambiente administrativo.
                </div>
            </div>
            <br>
            <div class="d-grid gap-3">
                <div class="btn-group-vertical">
                    <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary btn-block">Loja | Gerenciar Produtos</a>
                    <a href="{{ route('post.index') }}" class="btn btn-outline-secondary btn-block">Blog | Gerenciar Artigos</a>
                    <a href="{{ route('ebooks.create') }}" class="btn btn-outline-secondary btn-block">Arquivos | Gerenciar Arquivos</a>
                    <a href="{{ route('links.create') }}" class="btn btn-outline-secondary btn-block">Links | Gerenciar Links</a>
                    <a class="btn btn-outline-secondary btn-block" href="https://mail.hostinger.com/?clearSession=true&_user=contato@karlabispo.com.br&_ga=2.106084803.1111315649.1637064459-1226415465.1637064459" target="_blank">E-mail | Gerenciar</a>
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>
