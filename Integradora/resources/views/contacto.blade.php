<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto - MacFix Shop</title>
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
          <a href="login.html" class="btn-login">Sistema Inventario</a>
        </nav>
      </div>
    </header>

    <main class="main">
      <section id="contacto" class="contacto-section">
        <div class="container">
          <h2>Contáctanos</h2>

          <form id="form-contacto" action="/procesar" method="POST" class="formulario-contacto" novalidate>
            @csrf
            <div class="campo">
              <label for="nombre">Nombre:</label>
              <input type="text" id="nombre" name="nombre" />
            </div>

            <div class="campo">
              <label for="email">Correo electrónico:</label>
              <input type="email" id="email" name="email" required />
            </div>

            <div class="campo">
              <label for="mensaje">Mensaje:</label>
              <textarea id="mensaje" name="mensaje" rows="4"></textarea>
            </div>

            <button type="submit">Enviar</button>

            <p id="aviso-contacto"></p>
          </form>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <p class="info-footer">&copy; 2026 MacFix Shop - La Paz, Bolivia</p>
      </div>
    </footer>
    
    <script src="{{ asset('app.js') }}"></script>
  </body>
</html>