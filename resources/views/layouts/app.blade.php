<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellMark - @yield('title', 'Tienda Online')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/tienda-online.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fa-solid fa-cart-shopping"></i>
                CellMark
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Buscar">
                <span class="material-icons">search</span>
            </div>
            <div class="header-icons">
                <a href="#"><span class="material-icons">chat</span></a>
                <a href="#"><span class="material-icons">notifications</span></a>
                <a href="#"><span class="material-icons">menu</span></a>
            </div>
        </div>
    </header>

    <main class="container">
        <aside>
            <nav class="nav-menu">
                <h2>CellMark</h2>
                <ul>
                    <li><a href="{{ route('explorar') }}" class="{{ request()->is('explorar') ? 'active' : '' }}">
                        <span class="material-icons">explore</span> Explorar todo</a>
                    </li>
                    <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                        <span class="material-icons">smartphone</span> Celulares</a>
                    </li>
                    <li><a href="{{ route('accesorios') }}" class="{{ request()->is('accesorios') ? 'active' : '' }}">
                        <span class="material-icons">cable</span> Accesorios</a>
                    </li>
                    <li><a href="{{ route('login') }}">
                        <span class="material-icons">build</span> Servicio Técnico</a>
                    </li>
                    <li><a href="{{ route('login') }}">
                        <span class="material-icons">sell</span> Vender</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <section class="main-content">
            @yield('content')
        </section>
    </main>   
    
    <ul class="redes-sociales">
        <li>
            <a href="https://www.facebook.com/tu_perfil" target="_blank">
                <img src="{{ asset('img/facebook.png') }}" alt="Facebook" />
                Facebook
            </a>
        </li>
        <li>
            <a href="https://www.twitter.com/tu_perfil" target="_blank">
                <img src="{{ asset('img/medios-de-comunicacion-social.png') }}" alt="Twitter" />
                Twitter
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/tu_perfil" target="_blank">
                <img src="{{ asset('img/logotipo-de-instagram.png') }}" alt="Instagram" />
                Instagram
            </a>
        </li>
        <li>
            <a href="https://www.tiktok.com/@hoyjskills/video/7423828702221389062?lang=es&q=efootball%20highlights%20&t=1729180594486/tu_perfil" target="_blank">
                <img src="{{ asset('img/tik-tok.png') }}" alt="Tiktok" />
                Tiktok
            </a>
        </li>
        <li>
            <a href="https://web.whatsapp.com/tu_perfil" target="_blank">
                <img src="{{ asset('img/whatsapp.png') }}" alt="Whatsapp" />
                Whatsapp
            </a>
        </li>
    </ul>

    @yield('scripts')
    <script>
        function registro(servicio) {
            alert('Se ha iniciado el registro para: ' + servicio);
            // Aquí puedes agregar lógica adicional para manejar el registro.
        }
    </script>
</body>
</html>