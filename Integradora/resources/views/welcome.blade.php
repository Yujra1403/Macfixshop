<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MacFix Shop - Accesorios Ugreen y Anker</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
  </head>
  <body>
    <header class="header">
      <div class="container header-container">
        <a href="#" class="logo-link">
          <img src="img/banner.png" alt="MacFix Shop Logo" class="logo-img" />
        </a>
        <button id="btn-menu" class="btn-menu">☰</button>
        <nav class="nav" id="menu">
          <a href="#ugreen">Ugreen</a>
          <a href="#anker">Anker</a>
          <a href="/contacto">Contacto</a>
          <a href="/login" class="btn-login">Sistema Inventario</a>
        </nav>
      </div>
    </header>

    <main class="main">
      <section class="novedades-section">
        <div class="container">
          <h2 class="novedades-title">Lo Nuevo en MacFix Shop</h2>

          <div class="novedades-grid">
            <!-- 2 Imágenes Arriba -->
            <div class="novedad-card top-row">
              <img src="img/new1.webp" alt="Nuevo ingreso cargadores" />
              <div class="novedad-overlay">
                <span>Powerbank 1000 mha</span>
              </div>
            </div>

            <div class="novedad-card top-row">
              <img src="img/new2.webp" alt="Nuevo ingreso hubs" />
              <div class="novedad-overlay">
                <span>Carga inalambrica</span>
              </div>
            </div>

            <!-- 3 Imágenes Abajo -->
            <div class="novedad-card bottom-row">
              <img src="img/new3.webp" alt="Nuevo ingreso cables" />
              <div class="novedad-overlay">
                <span>Powerbank 20000 mha</span>
              </div>
            </div>

            <div class="novedad-card bottom-row">
              <img src="img/new4.webp" alt="Nuevo ingreso soportes" />
              <div class="novedad-overlay">
                <span>300w de potencia</span>
              </div>
            </div>

            <div class="novedad-card bottom-row">
              <img src="img/new5.webp" alt="Nuevo ingreso audífonos" />
              <div class="novedad-overlay">
                <span>Carga rapida</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SECCIÓN UGREEN: Ahora es dinámica -->
      <section id="ugreen" class="brand-section">
        <div class="container">
          <h2 class="brand-title">Catálogo Ugreen</h2>

          <div class="product-grid">
            <!-- Inicio del ciclo Laravel para Ugreen -->
            @foreach($productos as $producto)
                @if($producto->marca == 'ugreen')
                    <article class="product-card">
                        <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" />
                        <h3>{{ $producto->nombre }}</h3>
                        <p class="price">Bs. {{ $producto->precio }}</p>
                        <button class="btn-buy">Me interesa</button>
                    </article>
                @endif
            @endforeach
            <!-- Fin del ciclo -->
          </div>
        </div>
      </section>

      <!-- SECCIÓN ANKER: Ahora es dinámica -->
      <section id="anker" class="brand-section anker-bg">
        <div class="container">
          <h2 class="brand-title">Catálogo Anker</h2>

          <div class="product-grid">
            <!-- Inicio del ciclo Laravel para Anker -->
            @foreach($productos as $producto)
                @if($producto->marca == 'anker')
                    <article class="product-card">
                        <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" />
                        <h3>{{ $producto->nombre }}</h3>
                        <p class="price">Bs. {{ $producto->precio }}</p>
                        <button class="btn-buy">Me interesa</button>
                    </article>
                @endif
            @endforeach
            <!-- Fin del ciclo -->
          </div>
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
