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
                    Você está no ambiente administrativo.
                </div>
            </div>
            <br>
            <div class="d-grid gap-3">
                <a href="{{ route('produtos.create') }}"><button type="button" class="btn btn-outline-secondary btn-block">Loja | Cadastrar Produto</button></a>
                <a href="{{ route('post.index') }}"><button type="button" class="btn btn-outline-secondary btn-block">Blog | Gerenciar Artigos</button></a>
                <a href="https://mail.hostinger.com/?clearSession=true&_user=contato@karlabispo.com.br&_ga=2.106084803.1111315649.1637064459-1226415465.1637064459" target="_blank">
                    <button type="button" class="btn btn-outline-secondary btn-block">Gerenciar E-mails</button>
                </a>
            </div>
                       
        </div>
    </div>
</x-app-layout>
