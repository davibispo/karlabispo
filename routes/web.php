<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RaizesController,
    SiteController,
    BlogController,
    ClinicaController,
    ContatoController,
    LinkController,
    LojaController,
    PalestraController,
    VideosController,
    CursoController,
    PostController,
    LivrariaController,
    ComentarioController,
    RespostaController,
    EbookController,
};

Route::middleware(['auth'])->group(function(){
    Route::get('post/ativar/{id}', [PostController::class, 'ativar'])->name('post.ativar');
    Route::resource('post', PostController::class);
});
Route::resource('ebooks', EbookController::class);
Route::resource('respostas', RespostaController::class);
Route::resource('comentarios', ComentarioController::class);
Route::resource('livraria', LivrariaController::class);
Route::resource('curso', CursoController::class);
Route::resource('videos', VideosController::class);
Route::resource('palestras', PalestraController::class);
Route::resource('loja', LojaController::class);
Route::resource('links', LinkController::class);
Route::post('contato/send-mail', [ContatoController::class, 'sendMail']);
Route::resource('contato', ContatoController::class);
Route::resource('clinica', ClinicaController::class);
Route::get('blog/categoria/{id}', [BlogController::class, 'categoria'])->name('blog.categoria');
Route::resource('blog', BlogController::class);
Route::resource('site', SiteController::class);
Route::resource('raizes_da_infancia', RaizesController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

require __DIR__.'/auth.php';
