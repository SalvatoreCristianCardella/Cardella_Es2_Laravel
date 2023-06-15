<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    {{-- ESERCIZIO LARAVEL - NAMED ROUTES E ROTTE PARAMETRICHE
Realizzare con Laravel un sito di annunci con due viste principali:
Homepage
Elenco di prodotti
Nella pagina di elenco prodotti realizzare delle card che portino ad una pagina di dettaglio prodotto attraverso una rotta parametrica --}}
<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('products')}}">Products</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<header class="mt-5 pt-2 container">
    <h1>Products</h1>
    <section class="row justify-content-evenly">
{{-- @dd($products) --}}
    @foreach ($products as $product)
        <div class="col-12 col-md-3 justify-content-center align-items-center">
            <div class="card " style="width: 18rem; height: 30rem">
                <img src="/img/{{$product['img']}}" class="card-img-top" alt="immagine {{$product['nome']}}">
                <div class="card-body d-flex flex-column justify-content-end align-items-start">
                  <h5 class="card-title">{{$product['nome']}}</h5>
                  <p class="card-text">{{$product['categoria']}}</p>
                  <a href="{{route('details',['id'=>$product['id']])}}" class="btn btn-primary">dettagli</a>
                </div>
              </div>
        </div>
    @endforeach
    </section>
    
  </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
