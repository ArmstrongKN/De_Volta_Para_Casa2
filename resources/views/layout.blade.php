<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Gestão de controle de Hotel</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary absolute-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> De Volta Para Casa </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{'/'}}"> Home </a>
          </li>
         <li class="nav-item dropdown">
             <a class="nav-link" href="{{'/atracoes'}}" role="button" aria-expanded="false">
                Atrações
             </a>
           </li>
           <li class="nav-item dropdown">
              <a class="nav-link" href="{{'/empregabilidade'}}" role="button" aria-expanded="false">
                Empregabilidade
              </a>
           </li>
           <li class="nav-item dropdown">
              <a class="nav-link" href="{{'/imobiliaria'}}" role="button" aria-expanded="false">
                Imobiliárias
              </a>
           </li>


           <!-- Somente o usuário com a condição true ou 1 no banco de dados na tabela de permissão
            
           <li class="nav-item dropdown">
              <a class="nav-link"  href="{{'/imobiliaria'}}" role="button"aria-expanded="false">
                Administracao
              </a>
           </li> -->
      </ul>
    </div>
   
  </div>

</nav>

    </header>
    <main>
        @yield('content')
        @yield('atracoes')
        @yield('empregabilidade')
        @yield('imobiliaria')
        @yield('administracao')

    </main>
    <footer>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('panoramica.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('panoramica.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('panoramica.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    <h1>POR QUE ESCOLHER MOGI DAS CRUZES</h1>
    <h3>Segurança de Mogi das Cruzes é destaque entre as 100 maiores cidades brasileiras</h3>
    <h5>Secretaria de Segurança</h5>
    <div class="container">
  <div class="row">
    <div class="col-6"><img src="{{asset('policia.png')}}" class="img-fluid" alt=""> 
    <div class="col-6"> <p>A segurança pública de Mogi das Cruzes foi um dos destaques no ranking do Índice dos Desafios da Gestão Municipal (IDGM), realizado pelo Instituto MacroPlan e publicado na Revista Exame deste mês. A cidade aparece como a sétima mais segura entre as 100 maiores do país.</p>
    </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
</div>
   
   </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>