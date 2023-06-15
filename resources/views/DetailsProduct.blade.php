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
<header class="mt-5 pt-2">
  <h1>DETTAGLI</h1>
  <section class="container">
    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <img src="/img/{{$product['img']}}" class="img-fluid" alt="immagine contenente {{$product['nome']}}">
        </div>
        <div class="col-12 col-md-6">
            <h2>nome: {{$product['nome']}}</h2>
            <h4>categoria: {{$product['categoria']}}</h4>
            <p>descrizione: {{$product['descrizione']}}</p>
        </div>
    </div>
  </section>
</header>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
