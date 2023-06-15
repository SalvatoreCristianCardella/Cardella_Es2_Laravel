<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public  $products=[
        [
        'id'=>1,
        'nome'=>'tavolo',
        'categoria'=>'mobili',
        'descrizione'=>'un bel tavolo di legno',
        'img'=>'tavolo.jpg',
        ],
        [
        'id'=>2,
        'nome'=>'racchetta',
        'categoria'=>'sport',
        'descrizione'=>'una racchetta di legno',
        'img'=>'Racchetta.jpg',
        ],
        [
        'id'=>3,
        'nome'=>'drago',
        'categoria'=>'mostri',
        'descrizione'=>'drago che sputa fuoco',
        'img'=>'drago.jpeg',
        ],
        [
        'id'=>4,
        'nome'=>'pc',
        'categoria'=>'tecnologia',
        'descrizione'=>'pc super veloce',
        'img'=>'pc.jpeg',
        ],
    ];
    public function nomefunzionecontroller() {
        return view('Homepage');
    }
    public function productpage() {
        // $products=[
        //     [
        //     'id'=>1,
        //     'nome'=>'tavolo',
        //     'categoria'=>'mobili',
        //     'descrizione'=>'un bel tavolo di legno',
        //     'img'=>'tavolo.jpg',
        //     ],
        //     [
        //     'id'=>2,
        //     'nome'=>'racchetta',
        //     'categoria'=>'sport',
        //     'descrizione'=>'una racchetta di legno',
        //     'img'=>'Racchetta.jpg',
        //     ],
        //     [
        //     'id'=>3,
        //     'nome'=>'drago',
        //     'categoria'=>'mostri',
        //     'descrizione'=>'drago che sputa fuoco',
        //     'img'=>'drago.jpeg',
        //     ],
        //     [
        //     'id'=>4,
        //     'nome'=>'pc',
        //     'categoria'=>'tecnologia',
        //     'descrizione'=>'pc super veloce',
        //     'img'=>'pc.jpeg',
        //     ],
        // ]; (non serve piu perchè l'ho inizializzato al di fuori della funzione)
        return view('Products',['products'=>$this->products]);
    }
    public function detailspage($id) {
        // $products=[
        //     [
        //     'id'=>1,
        //     'nome'=>'tavolo',
        //     'categoria'=>'mobili',
        //     'descrizione'=>'un bel tavolo di legno',
        //     'img'=>'tavolo.jpg',
        //     ],
        //     [
        //     'id'=>2,
        //     'nome'=>'racchetta',
        //     'categoria'=>'sport',
        //     'descrizione'=>'una racchetta di legno',
        //     'img'=>'Racchetta.jpg',
        //     ],
        //     [
        //     'id'=>3,
        //     'nome'=>'drago',
        //     'categoria'=>'mostri',
        //     'descrizione'=>'drago che sputa fuoco',
        //     'img'=>'drago.jpeg',
        //     ],
        //     [
        //     'id'=>4,
        //     'nome'=>'pc',
        //     'categoria'=>'tecnologia',
        //     'descrizione'=>'pc super veloce',
        //     'img'=>'pc.jpeg',
        //     ],
        // ];  (non serve piu perchè l'ho inizializzato al di fuori della funzione)
        foreach ($this->products as $product) {
           if ($product['id']==$id) {
            return view('DetailsProduct',['product'=>$product]);
           }
        }
        abort(404);
    }
}
