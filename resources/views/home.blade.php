<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> De volta para casa! </title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>

   <header class="header">
        <div class="text-danger">
        <h3>Clique nas navegações para acessar o conteúdo</h3>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">


            <a class="nav-link active" aria-current="page" href="{{'/'}}"> Home </a>

            <a class="nav-link" href="{{'/atracoes'}}" role="button" aria-expanded="false">
                Atrações
             </a>

             <a class="nav-link" href="{{'/empregabilidade'}}" role="button" aria-expanded="false">
                Empregabilidade
              </a>

              <a class="nav-link" href="{{'/imobiliaria'}}" role="button" aria-expanded="false">
                Imobiliárias
              </a>

              <a class="nav-link" href="{{'/educacao'}}" role="button" aria-expanded="false">
                Educação
              </a>
              @if (Route::has('login'))
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Entrar
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Registrar
                        </a>
                    @endif
                @endauth
        @endif
        </h2>
        </header>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <main>
                    @yield('index')
                    @yield('atracoes')
                    @yield('empregabilidade')
                    @yield('imobiliaria')
                    @yield('educacao')
                </main>
                </div>
            </div>
        </div>
    </div>

</body>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>