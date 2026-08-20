<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MacFix Shop - Sistema</title>
    <!-- Cargamos tu CSS oscuro y elegante -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
  </head>
  <body>
    
    <header class="header">
      <div class="container header-container">
        <a href="/" class="logo-link">
          <img src="{{ asset('img/banner.png') }}" alt="MacFix Shop Logo" class="logo-img" />
        </a>
        <button id="btn-menu" class="btn-menu">☰</button>
        <nav class="nav" id="menu">
          <a href="/">Inicio (Tienda)</a>
          <a href="/contacto">Contacto</a>
          <a href="/login" class="btn-login">Sistema Inventario</a>
        </nav>
      </div>
    </header>

    <main class="main">
        <!-- Aquí es donde se inyectará el panel o el login -->
        @yield('contenido')
    </main>

    <footer class="footer">
      <div class="container">
        <p class="info-footer">&copy; 2026 MacFix Shop - La Paz, Bolivia</p>
      </div>
    </footer>
    
    <script src="{{ asset('app.js') }}"></script>
  </body>
</html>