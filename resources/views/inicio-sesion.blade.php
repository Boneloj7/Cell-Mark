<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellMark | Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/iniciodesesion.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fa-solid fa-cart-shopping"></i>
                <a href="{{ route('home') }}">CellMark</a>
            </div> 
        </div>
    </header>

    <main class="container">
        <div class="login-container">
            <div class="login-image">
                <div class="image-content">
                    <span class="material-icons image-icon"></span>
                    <h1>CellMark</h1>
                    <p>Renueva tu tecnología, ahorra y cuida el planeta: Celulares de segunda mano con calidad garantizada</p>
                </div>
            </div>
            <div class="login-form">
                <h2>Bienvenido</h2>
                
                <div id="notification" class="notification"></div>
                
                <form id="loginForm">
                    <div class="input-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" required>
                        <span class="material-icons input-icon"></span>
                    </div>
                    <div class="input-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" required>
                        <span class="material-icons input-icon"></span>
                    </div>
                    <button type="submit" id="loginButton">
                        Iniciar Sesión
                        <span class="material-icons button-icon"></span>
                        <span class="loading" id="loadingSpinner"></span>
                    </button>
                    <div class="forgot-password">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </form>
                
                <div class="divider">
                    <span>o continúa con</span>
                </div>
                
                
                
                <div class="form-footer">
                    <div class="register-link">
                        ¿No tienes una cuenta? <a href="#">Registrarse ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/Iniciodesesion.js') }}"></script>
    <script src="{{ asset('js/buscador.js') }}"></script>
</body>
</html>