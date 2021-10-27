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
                    Você está no logado no ambiente administrativo!
                </div>
            </div>

            <ul>
                <li><a href="{{ route('livraria.create') }}">Adicionar livros na livraria</a></li>
                <li><a href="{{ route('posts.create') }}">Criar um novo post no blog</a></li>
            </ul>
            
            
        </div>
    </div>
</x-app-layout>
