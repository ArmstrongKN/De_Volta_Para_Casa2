@extends("layout")
@section("content")

<div class="container">
    <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('emprego.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('lago.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('festival.png')}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>

<div class="container">
    <h1>POR QUE ESCOLHER MOGI DAS CRUZES</h1>
    <h3>Segurança de Mogi das Cruzes é destaque entre as 100 maiores cidades brasileiras</h3>
    <h5>Secretaria de Segurança</h5>
    </div>

  <div class="container">
    <div class="row">
    <div class="col-6"><img src="{{asset('policia.png')}}" class="img-fluid" alt=""> 
    <div class="col-6"> <p>A segurança pública de Mogi das Cruzes foi um dos destaques no ranking do Índice dos Desafios da Gestão Municipal (IDGM), realizado pelo Instituto MacroPlan e publicado na Revista Exame deste mês. A cidade aparece como a sétima mais segura entre as 100 maiores do país.</p>
    </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
    <h2>Educação</h2>
    <div class="col-6"><img src="{{asset('escola.png')}}" class="img-fluid" alt=""> 
    <div class="col-6"> <p>O início do ano letivo na rede municipal de ensino de Mogi das Cruzes acontece nesta sexta-feira (4), com retorno 100% presencial e permanência de protocolos sanitários contra a Covid-19, como uso de máscara, álcool gel e distanciamento. Devem ser atendidos neste ano mais de 47 mil alunos, segundo a administração municipal.</p>
    </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
    <h2>Educação</h2>
    <div class="col-6"><img src="{{asset('escola.png')}}" class="img-fluid" alt=""> 
    <div class="col-6"> <p>O início do ano letivo na rede municipal de ensino de Mogi das Cruzes acontece nesta sexta-feira (4), com retorno 100% presencial e permanência de protocolos sanitários contra a Covid-19, como uso de máscara, álcool gel e distanciamento. Devem ser atendidos neste ano mais de 47 mil alunos, segundo a administração municipal.</p>
    </div>
    </div>
  </div>

  <img src="aki.png" class="img-thumbnail" alt="...">
  <div class="col-6"> 
    <h3>Um dos maiores festivais da cultura japonesa no Brasil!</h3>
    <p>

    O Festival de Outono Akimatsuri é realizado desde 1986, na cidade de Mogi das
    Cruzes (SP), pela Associação Cultural de Mogi das Cruzes - Bunkyo, em seu Centro
    Esportivo, um espaço com área de 250 mil m2. A organização, planejamento e realização é
    feita por um grupo de voluntários que tem como missão ajudar a associação no resgate e
    divulgação da cultura japonesa no Brasil.
    </p>
    </div>

    <div class="conteudo">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('tooronagashi.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">CERIMÔNIA
TOORO NAGASHI</h5>
            <p class="card-text">Uma das cerimônias mais
aguardadas do Akimatsuri, onde
barquinhos iluminados a vela são
soltos no lago do Bunkyo ao
anoitecer, homenageando nossos
antepassados
</p>
            <a href="https://akimatsuri.com.br/cms/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="{{ asset('missakimatsuri.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">CONCURSO MISS
AKIMATSURI 2024</h5>
            <p class="card-text">ascendentes de japoneses do Alto
Tietê concorrem ao título de Miss
Akimatsuri, classificando para o
Miss Nikkey (nível nacional).</p>
            <a href="https://akimatsuri.com.br/cms/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="{{ asset('dezenasdeatracoes.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">DEZENAS DE ATRAÇÕES
ARTÍSTICAS E CULTURAIS</h5>
            <p class="card-text">A programação artística e cultural
do Akimatsuri 2023 está recheada
de grandes atrações: cantores,
grupos de dança, artes marciais e
os taikôs (tambores japoneses).</p>
            <a href="https://akimatsuri.com.br/cms/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
    <video src="{{ asset('taiko.mp4')}}" class="object-fit-cover" controls autoplay></video>
        <div class="card-body">
            <h5 class="card-title"> APRESENTAÇÃO DE TAIKO </h5>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <video src="{{ asset('kpop.mp4')}}" class="object-fit-cover" controls autoplay></video>
        <div class="card-body">
            <h5 class="card-title"> APRESENTAÇÃO DE K-POP </h5>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <video src="{{ asset('kodomo.mp4')}}" class="object-fit-cover" controls autoplay></video>
        <div class="card-body">
            <h5 class="card-title"> APRESENTAÇÃO DE KODOMO </h5>
        </div>
    </div>
</div>
@endsection