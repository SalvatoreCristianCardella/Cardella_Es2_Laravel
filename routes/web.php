<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//rotte funzionanti senza procedimento nel controller
// Route::get('/', function () {
//     return view('Homepage');
// })->name('homepage');



// Route::get('/products', function () {
//     $products=[
//         [
//         'id'=>1,
//         'nome'=>'tavolo',
//         'categoria'=>'mobili',
//         'descrizione'=>'un bel tavolo di legno',
//         'img'=>'tavolo.jpg',
//         ],
//         [
//         'id'=>2,
//         'nome'=>'racchetta',
//         'categoria'=>'sport',
//         'descrizione'=>'una racchetta di legno',
//         'img'=>'Racchetta.jpg',
//         ],
//         [
//         'id'=>3,
//         'nome'=>'drago',
//         'categoria'=>'mostri',
//         'descrizione'=>'drago che sputa fuoco',
//         'img'=>'drago.jpeg',
//         ],
//         [
//         'id'=>4,
//         'nome'=>'pc',
//         'categoria'=>'tecnologia',
//         'descrizione'=>'pc super veloce',
//         'img'=>'pc.jpeg',
//         ],
//     ];
//     return view('Products',['products'=>$products]);
// })->name('products');


// Route::get('/product/{id}', function ($id) {

//     $products=[
//         [
//         'id'=>1,
//         'nome'=>'tavolo',
//         'categoria'=>'mobili',
//         'descrizione'=>'un bel tavolo di legno',
//         'img'=>'tavolo.jpg',
//         ],
//         [
//         'id'=>2,
//         'nome'=>'racchetta',
//         'categoria'=>'sport',
//         'descrizione'=>'una racchetta di legno',
//         'img'=>'Racchetta.jpg',
//         ],
//         [
//         'id'=>3,
//         'nome'=>'drago',
//         'categoria'=>'mostri',
//         'descrizione'=>'drago che sputa fuoco',
//         'img'=>'drago.jpeg',
//         ],
//         [
//         'id'=>4,
//         'nome'=>'pc',
//         'categoria'=>'tecnologia',
//         'descrizione'=>'pc super veloce',
//         'img'=>'pc.jpeg',
//         ],
//     ];
//     foreach ($products as $product) {
//        if ($product['id']==$id) {
//         return view('DetailsProduct',['product'=>$product]);
//        }
//     } 
// })->name('details');

//rotte con procedimento nel controller (sono le stesse di sopra!!)

Route::get('/',[PublicController::class, 'nomefunzionecontroller'])->name('homepage');



Route::get('/products', [PublicController::class, 'productpage'])->name('products');


Route::get('/product/{id}', [PublicController::class, 'detailspage'])->name('details');
