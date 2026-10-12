
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNSA - Portal Institucional</title>
    <link rel="stylesheet" href="{{ asset('css/unsa.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<header class="navbar">
    <div class="contenedor nav-contenido">
        <a href="{{ route('unsa.index') }}" class="logo">UNSA</a>

        <nav>
            <a href="#inicio" class="activo">Inicio</a>
            <a href="#facultades">Facultades</a>
            <a href="#noticias">Investigación</a>
            <a href="#eventos">Admisión</a>
            <a href="#footer">Transparencia</a>
        </nav>

        <div class="nav-derecha">
            <a href="#accesos" class="btn-amarillo">Portal Académico</a>
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>

<section class="hero" id="inicio">
    <div class="contenedor hero-contenido">
        <h1>Excelencia Académica desde Arequipa</h1>
        <p>
            Líderes en investigación y formación profesional
            con más de 195 años de historia transformando
            el sur del Perú.
        </p>
        <div class="hero-botones">
            <a href="#eventos" class="btn-rojo">Admisión</a>
            <a href="#facultades" class="btn-azul">Nuestras Carreras</a>
        </div>
    </div>
</section>

<section class="contenedor accesos" id="accesos">
    <a href="#facultades" class="acceso">
        <div class="icono"><i class="fas fa-graduation-cap"></i></div>
        <h3>Portal Académico</h3>
    </a>

    <a href="#noticias" class="acceso">
        <div class="icono"><i class="fas fa-book-open"></i></div>
        <h3>Biblioteca Virtual</h3>
    </a>

    <a href="#eventos" class="acceso">
        <div class="icono"><i class="fas fa-file-alt"></i></div>
        <h3>Trámites TUPA</h3>
    </a>

    <a href="#footer" class="acceso">
        <div class="icono"><i class="fas fa-briefcase"></i></div>
        <h3>Bolsa de Trabajo</h3>
    </a>
</section>

<main class="contenedor principal">
    <section class="noticias" id="noticias">
        <div class="titulo-seccion">
            <h2>Noticias UNSA</h2>
            <a href="#noticias">Ver todas →</a>
        </div>

        @foreach($noticias as $noticia)
            @if($loop->first)
                <article class="noticia-destacada">
                    <img src="{{ $noticia['imagen'] }}" alt="Noticia">
                    <div class="noticia-texto">
                        <small>
                            {{ $noticia['categoria'] }} · {{ $noticia['fecha'] }}
                        </small>
                        <h3>{{ $noticia['titulo'] }}</h3>
                        <p>{{ $noticia['descripcion'] }}</p>
                        <a href="#noticias">Leer más →</a>
                    </div>
                </article>
            @endif
        @endforeach

        <div class="noticias-grid">
            @foreach($noticias as $noticia)
                @if(!$loop->first)
                    <article class="noticia-card">
                        <img src="{{ $noticia['imagen'] }}" alt="Noticia">
                        <div class="noticia-texto">
                            <small>
                                {{ $noticia['categoria'] }} · {{ $noticia['fecha'] }}
                            </small>
                            <h3>{{ $noticia['titulo'] }}</h3>
                            <p>{{ $noticia['descripcion'] }}</p>
                        </div>
                    </article>
                @endif
            @endforeach
        </div>
    </section>

    <aside class="eventos" id="eventos">
        <h2><i class="far fa-calendar-alt"></i> Próximos Eventos</h2>

        @foreach($eventos as $evento)
            <div class="evento">
                <div class="fecha">
                    <strong>{{ $evento['dia'] }}</strong>
                    <span>MAY</span>
                </div>
                <div>
                    <h4>{{ $evento['titulo'] }}</h4>
                    <p>{{ $evento['lugar'] }}</p>
                </div>
            </div>
        @endforeach

        <a href="#eventos" class="btn-calendario">
            Ver Calendario Completo
        </a>
    </aside>
</main>

<footer id="footer">
    <div class="contenedor footer-grid">
        <div>
            <h3>UNSA</h3>
            <p>Universidad Nacional de San Agustín de Arequipa.</p>
            <p>Comprometidos con la excelencia y la formación integral.</p>
        </div>
        <div>
            <h3>Institución</h3>
            <p>Directorio</p>
            <p>Bolsa de Trabajo</p>
            <p>Radio UNSA</p>
            <p>Mapa del Sitio</p>
        </div>
        <div>
            <h3>Ubicaciones</h3>
            <p>Sede Central: Calle Santa Catalina 117</p>
            <p>Cercado, Arequipa - Perú</p>
        </div>
        <div>
            <h3>Enlaces Rápidos</h3>
            <p>Campus Virtual</p>
            <p>Repositorio Institucional</p>
            <p>Editorial UNSA</p>
        </div>
    </div>
    <div class="copyright">
        © {{ date('Y') }} Universidad Nacional de San Agustín de Arequipa.
    </div>
</footer>

</body>
</html>
