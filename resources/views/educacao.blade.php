@extends("home")
@extends("dashboard")
@section('educacao')
<div class="conteudo">

    <div class="container">
      <h1>POR QUE ESCOLHER MOGI DAS CRUZES</h1>
      <h3>Mogi conquistou o 1º lugar do Alto Tietê no ranking do Programa Previne Brasil</h3>
      <h5>Secretaria de Educação</h5>
    </div>

<div class="container">
    <div class="row">
    <div class="col-6"><img src="{{asset('escola.png')}}" class="img-fluid" alt=""> 
    <div class="col-12"> <p> 

 

O Governo do Estado amplia o Programa de Ensino Integral (PEI) que no que que vem atenderá novas 111 escolas estaduais da região metropolitana. Na região do Alto Tietê, serão mais 9 unidades contempladas pelo modelo em fase de implantação e que ainda encontra certa resistência entre a comunidade estudantil. Até o ano passado, eram mais de 40 estabelecimentos nas cidades de Mogi das Cruzes, Itaquaquecetuba, Suzano, Poá, Ferraz de Vasconcelos, Guararema, Arujá, Santa Isabel e Salesópolis.

O Plano Nacional de Educação prevê, até 2024, a oferta de jornada de 7 horas a 25% dos estudantes da Educação Básica. Com esse recorte alcançado, o Estado afirma que atingirá esse índice em 2022.

Confira aqui a lista das escolas que passarão a ser atendidas pelo Programa de Ensino Integral no ano que vem 

No total, 952 unidades do estado passarão a ser atendidas, segundo anúncio feito sexta-feira, 8, pelo governador João Doria e o secretário estadual da Educação, Rossieli Soares.

Serão quatro novas unidades na Diretoria Regional de Ensino de Mogi das Cruzes, que aponta uma redução de cerca de mil alunos matriculados neste ano, como O Diário mostrou em reportagem sobre a adesão às aulas presenciais nas redes estadual e municipal.
As unidades integradas ao PEI em Mogi das Cruzes são: Alzira Fernandes Scungisqui, Arlindo Aquino de Oliveira, Desembargador Heráclides Batalha de Camargo, Paulo Tapajós, Wahstingon Luis e José Paulino Nogueira.

Em Suzano, as novas unidades participantes são Carlino Reis e Zelia Gattai, de Ferraz de Vasconcelos, e Alfredo Roberto e Professor Paulo Kobayahi, ambas na rede estadual suzanense. Ali, outras cidades como Rual Brasil e Sebastião Vidal já contavam com o sistema.

A implantação do modelo é decidida pelas próprias escolas. No ano passado, a “Sentaro Takaoka”, no bairro do Cocuera, foi uma das que rejeitou a possiblidade.
O segundo processo de adesão ao programa, conduzido pela Secretaria da Educação do Estado de São Paulo (Seduc-SP), validou 171 escolas que estão em 103 municípios, dos quais 31 vão ter as primeiras PEI.

Este grupo se soma as 781 unidades anunciadas no último mês de julho. Atualmente, são 448 mil estudantes atendidos em 1077 escolas, de 308 cidades, de todas as 91 Diretorias de Ensino. 

O governador Doria destacou a importância da oferta de um ensino de cada vez mais qualidade. “A meta que era dezembro já está sendo atingida agora. São Paulo é o estado com o maior número de escolas de tempo integral em todo o Brasil. Alcançamos 2.029 escolas de tempo integral, quase seis vezes mais do que tínhamos dois anos e meio atrás”, afirmou. 

Agora, a Seduc-SP passa a atender mais de 1 milhão de estudantes da educação básica*, segundo o Secretário Rossieli. 

Veja a lista das escolas no PEI em 2021, conforme está no site da Secretaria de Educação do Estado.

“No último anúncio falamos que em 2022 seriam 929 mil vagas em PEI. Considerando essas 171 novas escolas, são mais 97 mil vagas. Nosso grande esforço tem sido melhorar as condições e a nossa Educação em todos os aspectos. Então, transformar as escolas em ensino integral tem sido uma das missões”, diz Rossieli Soares.  
Em 2022, serão 261 escolas do PEI de Anos Iniciais (1° ao 5°ano), 1563 de Anos Finais (6° ao 9°ano) e 1570 de ensino médio (que representam 18%, 42,6% e 43% da rede estadual, respectivamente). 

 Formação integral 

Criado em 2012, o PEI pretende potencializar a melhoria da aprendizagem e o desenvolvimento integral dos estudantes, nas dimensões intelectual, física, socioemocional e cultural, por meio de um modelo pedagógico articulado a um Modelo de Gestão. 
São trabalhadas práticas pedagógicas, como Tutoria, Nivelamento, Protagonismo Juvenil com Clubes Juvenis e Líderes de Turma, além de componentes curriculares específicos, como Orientação de Estudos e Práticas Experimentais, que potencializam a formação integral do estudante a partir do seu Projeto de Vida. 

Dentro do Plano Nacional de Educação (PNE), a Meta 6 – Educação Integral – prevê em seu objetivo 2 que em 2024, no mínimo, 25% dos alunos da Educação Básica sejam atendidos em jornadas de mais de 7 horas. Com as novas PEIs, São Paulo atinge este objetivo, no âmbito de sua rede estadual, já em 2022. 

  IDEB e alcance 

Os investimentos na jornada integral refletem em melhores notas no Índice de Desenvolvimento da Educação Básica (IDEB) já no primeiro ano de implantação do programa. 

Mais números segundo o Governo do Estado:

– Escolas PEI cresceram 1,2 pontos no IDEB 2019, enquanto as regulares, 0,6. 

– Das escolas estaduais de São Paulo, as 33 melhores colocadas no ranking são PEIs.– 9 das 10 primeiras colocadas de ensino fundamental são PEIs. 

  

95% de satisfação 

Em agosto de 2020, a Seduc-SP avaliou a percepção de 13 mil professores e 121 mil estudantes da rede pública estadual envolvidos no PEI: 

– De 0 a 10, os professores recomendariam 9,1 as escolas em que atuam aos colegas de profissão; 

– De 0 a 10, os estudantes recomendariam 8,5 as escolas em que atuam aos colegas; 

– 95% dos professores se sentem satisfeitos ou muito satisfeitos em atuar nas escolas.  




</p>
    </div>
    </div>
  </div>

  @foreach ($listaEducacao as $educacao)
    <div class="card" style="width: 18rem;">
        <img src="{{ $educacao->imagem }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"> {{ $educacao->titulo }} </h5>
            <p class="card-text"> {{ $educacao->descricao }} </p>
            <a href="{{ $educacao->url }}" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    @endforeach
 
@endsection