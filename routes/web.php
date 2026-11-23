<?php
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



route::get('/series', [SeriesController::class, 'listarSeries']);

Route::get('/ola', function () {
    echo "Olá, mundo!" ;
});
