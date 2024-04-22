@extends("dashboard")
@section("atracoes")

<div class="container">
      <h1>POR QUE ESCOLHER MOGI DAS CRUZES</h1>
      <h3>Turismo em Mogi atrai AVENTUREIROS</h3>
      <h5>Secretaria do Turismo</h5>
    </div>

<div class="conteudo">
    <div class="card" style="width: 18rem;">
        <img src="neblinas.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Parque das Neblinas</h5>
            <p class="card-text">Situado nos municípios de Mogi das Cruzes e Bertioga, em São Paulo, o Parque das Neblinas, reserva privada da Suzano Papel e Celulose, gerida pelo Instituto Ecofuturo ...</p>
            <a href="https://www.tripadvisor.com.br/Attraction_Review-g303619-d4598559-Reviews-Parque_das_Neblinas-Mogi_das_Cruzes_State_of_Sao_Paulo.html" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="centenario.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Parque Centenário da Imigração Japonesa</h5>
            <p class="card-text">O parque está inserido na Área de Proteção Ambiental da Várzea do Rio Tietê. Em alguns trechos das margens do rio foram plantadas mudas nativas visando restaurar a mata ciliar existente.</p>
            <a href="https://visitemogi.com.br/places/ecologico/parque-centenario-da-imigracao-japonesa/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="urubu.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pico do Urubu</h5>
            <p class="card-text">Com uma vista privilegiada de 360º da cidade e uma altitude de 1.160m acima do nível do mar, quem gosta de se sentir nas nuvens, encontra no Pico do Urubu a estrutura necessária para observar a cidade...</p>
            <a href="https://visitemogi.com.br/places/picos_e_mirantes/pico-do-urubu/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="orquidario.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Orquidário Oriental</h5>
            <p class="card-text">As primeiras atividades do Orquidário começaram em 1984. No local era produzida apenas uma variedade de orquídea, a Dendrobium Nobile, conhecida popularmente como Olho de Boneca.</p>
            <a href="https://visitemogi.com.br/places/rural/orquidario-oriental/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="catedral.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Catedral de Mogi das Cruzes</h5>
            <p class="card-text">Construída no mesmo local, onde foi erguida a primeira capela do povoamento, e em 1902 foi construída uma igreja destinada a Padroeira Sant’Anna.</p>
            <a href="https://visitemogi.com.br/places/destinos/igreja-matriz-de-santana/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img src="casarao.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Casarão do Chá </h5>
            <p class="card-text">O Casarão do Chá recebe, a partir do dia 10 de setembro, a 2º edição da Exposição e Venda de Miniaturas: Dollhouse. Realizado pela primeira vez em dezembro do ano passado, o evento foi um verdadeiro sucesso de público...</p>
            <a href="https://visitemogi.com.br/blog/2017/09/13/exposicao-e-venda-de-miniaturas-retornam-ao-casarao-do-cha/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="pedra.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pedra da Lua</h5>
            <p class="card-text">Trilha do Vale das Pedras e Pedra da Lua, na serra do Itapety em Mogi das cruzes.</p>
            <a href="https://pt.wikiloc.com/trilhas-trekking/pedra-da-lua-e-vale-das-pedras-mogi-sp-81013272" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="afonso.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Parque Natural Municipal Francisco Affonso de Mello</h5>
            <p class="card-text">O Parque Natural Municipal Francisco Affonso de Mello – Chiquinho Veríssimo, na Serra do Itapeti, pode ser considerado um grande viveiro da flora e fauna nativas da Mata Atlântica na cidade.</p>
            <a href="https://visitemogi.com.br/places/ecologico/parque-municipal/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="museuMaua.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">História e Museu de Ensino Visconde de Mauá</h5>
            <p class="card-text">O Museu Histórico e Pedagógico "Visconde Mauá" é destinado a abrigar várias peças que remetem à história da população de Mogi das Cruzes e região.</p>
            <a href="https://cadastro.museus.gov.br/museus/museu-historico-e-pedagogico-visconde-de-maua/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    @foreach ($listaAtracoes as $atracao)
    <div class="card" style="width: 18rem;">
        <img src="{{ $atracao->imagem }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"> {{ $atracao->titulo }} </h5>
            <p class="card-text"> {{ $atracao->descricao }} </p>
            <a href="{{ $atracao->url }}" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    @endforeach
</div>
@endsection