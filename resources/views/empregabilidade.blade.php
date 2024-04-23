@extends("home")
@extends("dashboard")

@section('empregabilidade')
<div class="conteudo">
    <div class="card" style="width: 18rem;">
        <img src="conecta.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mogi Conecta</h5>
            <p class="card-text">Em busca de um novo emprego? No Mogi Conecta emprego você tem acesso aà diversas vagas.</p>
            <a href="https://mogiconecta.mogidascruzes.sp.gov.br/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="vaga1.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Comprador Senior</h5>
            <p class="card-text">Realizar cotações de preços conforme solicitação das áreas; emitir pedidos de compras no sistema ERP; Follow up de entrega mercadorias de fornecedores,.</p>
            <a href="https://www.catho.com.br/vagas/comprador-senior-construcao-civil/28055377/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="vaga2.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Serralheiro e Meio Oficial</h5>
            <p class="card-text">serralheria ser serralheiro ou meio oficial.</p>
            <a href="https://www.catho.com.br/vagas/serralheiro-e-meio-oficial/28052964/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="vaga3.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Lider de Monitoramento</h5>
            <p class="card-text">Instalações - Gerenciamento de Ordens de Serviços - Atendimento ao Cliente - Gerenciamento de Agendamentos - Atendimento pós atendimento técnico de OS -...</p>
            <a href="https://www.catho.com.br/vagas/lider-de-monitoramento-instalacao/28053076/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="vaga4.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Analista de cobrança</h5>
            <p class="card-text">Monitoramento de Contas a Receber: Acompanhar o status das contas a receber da empresa, identificando quais estão em atraso e necessitam de ações de cobrança.</p>
            <a href="https://www.catho.com.br/vagas/analista-de-cobranca/28056138/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img src="vaga5.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Assistente Financeiro</h5>
            <p class="card-text">Processamento de Transações Financeiras: Registrar e processar transações financeiras, como contas a pagar, contas a receber, faturas e despesas. </p>
            <a href="https://www.catho.com.br/vagas/assistente-financeiro-contas-a-pagar/28056447/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="vaga6.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Analista de Suporte Técnico</h5>
            <p class="card-text">Informações sobre vaga: Procuramos profissionais para atuar em Mogi das Cruzes no nosso time do NOC! O time do NOC utiliza procedimentos padrões para localizar e resolver problemas...</p>
            <a href="https://www.catho.com.br/vagas/analista-de-suporte-tecnico/28053538/" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="vaga7.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Original SP | Estagiário</h5>
            <p class="card-text">Aqui na Automob, o que temos de mais valioso mesmo é a nossa gente! Gente que ama o que faz, que sonha grande e que quer sempre ir além.</p>
            <a href="https://www.catho.com.br/vagas/original-sp-estagiario/28054855/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="vaga8.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Analista fiscal Jr</h5>
            <p class="card-text">Aqui na Automob, o que temos de mais valioso mesmo é a nossa gente! Gente que ama o que faz, que sonha grande e que quer sempre ir além.</p>
            <a href="https://www.catho.com.br/vagas/analista-fiscal-jr/28054783/" class="btn btn-primary">Conferir</a>
        </div>
    </div>

    @foreach ($listaEmpregabilidade as $empregabilidade)
    <div class="card" style="width: 18rem;">
        <img src="{{ $empregabilidade->imagem }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"> {{ $empregabilidade->titulo }} </h5>
            <p class="card-text"> {{ $empregabilidade->descricao }} </p>
            <a href="{{ $empregabilidade->url }}" class="btn btn-primary">Conferir</a>
        </div>
    </div>
    @endforeach
</div>
@endsection