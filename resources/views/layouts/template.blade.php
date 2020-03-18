<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    
    <title>@yield('titulo')</title>
</head>
<body style="background-color: #cecece;" >
    <div style="background-color: #cecece; width:100%;">
    </div>
    
    <header class="d-flex p-1 headerFull" >

        <nav class="navbar navbar-expand-lg navMenu container">
            <div id=gavetaLogoBotao>
                <a class="navbar-brand" href="/"><img id="logo" src="/img/logo-recorte.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon" id="btnHamburguer"></span> -->
                    <img src="/img/botao-hamburguer.jpg" id="hamburguer" alt="imagem do botão hamburguer">
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ulMenu" >
                    <li class="nav-item active customLink">
                        <a class="linkMenu"href="/comoComprar">Como Comprar</a>
                    </li>
                    <li class="nav-item customLink">
                        <a class="linkMenu"href="/sobreNos">Sobre Nós</a>
                    </li>
                    <li class="nav-item customLink">
                        <a class="linkMenu"href="/faleConosco">Fale Conosco</a>
                    </li>
               
                    @if (Auth::user())
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle logado" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                    @endif

                                <div class="dropdown-menu dropdown-menu-right logadoMenu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                    <a class="dropdown-item" href="/adm">Painel Adm</a>
                                </div>
                            </li>
                    </ul>
               
            </div>
        </nav>
        
   </header>


    <main classs="d-flex flex-column; h-auto" style="background-color: #cecece; " >
   
        @yield('conteudo')
    </main>


    <footer class="shadow p-3 rounded footer">
        
    <a href="/adm"> <img src="../img/engrenagem.png" id="adm" alt="" > </a> <p>© 2019 All rights reserved </p>
    </footer> 

    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>