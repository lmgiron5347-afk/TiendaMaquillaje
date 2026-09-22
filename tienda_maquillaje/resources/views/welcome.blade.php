@extends('layouts.app')
 
@section('titulo', 'Inicio')
 
@section('contenido')

<body style="background-color: #FDF8F6;">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #5A3E36;">
        <div class="container">

            <!-- Nombre de la página -->
            <a class="navbar-brand fw-bold" href="#">
                Tienda de Maquillaje
            </a>

            <!-- Botón para dispositivos móviles -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Mostrar menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Opciones del menú -->
            <div
                class="collapse navbar-collapse"
                id="menuPrincipal"
            >
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#productos">
                            Productos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            Contacto
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

       <!-- Sección de bienvenida -->
    <header
        id="inicio"
        class="text-dark py-5"
        style="background-color: #F3E1E1;"
    >
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <span class="badge text-white mb-3" style="background-color: #B76E79;">
                        Maquillaje colombiano
                    </span>

                    <h1 class="display-3 fw-bold">
                        Resalta tu belleza y expresa tu estilo
                    </h1>

                    <p class="lead">
                        Descubre una selección de productos de maquillaje
                        de alta calidad para realzar tu belleza y crear
                        looks únicos para cada ocasión.
                    </p>

                    <a
                        href="#productos"
                        class="btn btn-lg mt-3 text-white"
                        style="background-color: #B76E79; border-color: #B76E79;"
                    >
                        Ver nuestro maquillaje
                    </a>
                </div>

                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <span class="display-1">
                        💄
                    </span>

                    <h2 class="mt-3">
                        Belleza, color y estilo
                    </h2>
                </div>

            </div>
        </div>
    </header>

        <!-- Carrusel de productos -->
    <section class="py-5" style="background-color: #FFFFFF;">
        <div class="container">

            <div class="text-center mb-4">
                <h2 class="fw-bold">
                    ✨ Productos destacados
                </h2>

                <p class="text-secondary">
                    Descubre nuestros productos favoritos de maquillaje.
                </p>
            </div>

            <div
                id="carruselMaquillaje"
                class="carousel slide"
                data-bs-ride="carousel"
            >

                <!-- Indicadores -->
                <div class="carousel-indicators">

                    <button
                        type="button"
                        data-bs-target="#carruselMaquillaje"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Producto 1"
                    ></button>

                    <button
                        type="button"
                        data-bs-target="#carruselMaquillaje"
                        data-bs-slide-to="1"
                        aria-label="Producto 2"
                    ></button>

                    <button
                        type="button"
                        data-bs-target="#carruselMaquillaje"
                        data-bs-slide-to="2"
                        aria-label="Producto 3"
                    ></button>

                </div>

                <!-- Productos -->
                <div class="carousel-inner rounded shadow">

                    <!-- Producto 1 -->
                    <div class="carousel-item active">
                        <img
                            src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=1200&q=80"
                            class="d-block w-100"
                            style="height: 400px; object-fit: cover;"
                            alt="Colección de maquillaje"
                        >

                        <div class="carousel-caption d-block">
                            <h3>
                                Colección Glam
                            </h3>

                            <p>
                                Todo lo que necesitas para crear un look espectacular.
                            </p>

                            <a
                                href="#productos"
                                class="btn text-white"
                                style="background-color: #B76E79;"
                            >
                                Ver productos
                            </a>
                        </div>
                    </div>

                    <!-- Producto 2 -->
                    <div class="carousel-item">
                        <img
                            src="https://images.unsplash.com/photo-1583241800698-e8ab01830a07?auto=format&fit=crop&w=1200&q=80"
                            class="d-block w-100"
                            style="height: 400px; object-fit: cover;"
                            alt="Paleta de sombras"
                        >

                        <div class="carousel-caption d-block">
                            <h3>
                                Paletas de sombras
                            </h3>

                            <p>
                                Colores intensos para looks únicos y creativos.
                            </p>

                            <a
                                href="#productos"
                                class="btn text-white"
                                style="background-color: #B76E79;"
                            >
                                Comprar ahora
                            </a>
                        </div>
                    </div>

                    <!-- Producto 3 -->
                    <div class="carousel-item">
                        <img
                            src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&w=1200&q=80"
                            class="d-block w-100"
                            style="height: 400px; object-fit: cover;"
                            alt="Labiales de maquillaje"
                        >

                        <div class="carousel-caption d-block">
                            <h3>
                                Labiales irresistibles
                            </h3>

                            <p>
                                Dale color a tus labios y completa tu look.
                            </p>

                            <a
                                href="#productos"
                                class="btn text-white"
                                style="background-color: #B76E79;"
                            >
                                Descubrir
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Botón anterior -->
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carruselMaquillaje"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon"></span>

                    <span class="visually-hidden">
                        Anterior
                    </span>
                </button>

                <!-- Botón siguiente -->
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carruselMaquillaje"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon"></span>

                    <span class="visually-hidden">
                        Siguiente
                    </span>
                </button>

            </div>
        </div>
    </section>

    <!-- Sección de productos -->
    <section id="productos" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Nuestros productos
                </h2>

                <p class="text-secondary">
                    Selecciona el maquillaje perfecto para complementar tu estilo.
                </p>
            </div>

            <div class="row g-4">

                <!-- Tarjeta 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?auto=format&fit=crop&w=800&q=80"
                                class="card-img-top object-fit-cover"
                                alt="Base de maquillaje"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge align-self-start mb-2 text-white" style="background-color: #B76E79;">
                                Favorito
                            </span>

                            <h3 class="card-title h5">
                                Base de maquillaje
                            </h3>

                            <p class="card-text text-secondary">
                                Base de cobertura uniforme que ayuda a
                                conseguir un acabado natural y duradero.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold" style="color: #8A5A44;">
                                    $35.000
                                </p>

                                <button class="btn text-white w-100" style="background-color: #5A3E36;">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1583241800698-e8ab01830a07?auto=format&fit=crop&w=800&q=80"
                                class="card-img-top object-fit-cover"
                                alt="Paleta de sombras"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge align-self-start mb-2 text-dark" style="background-color: #E8CFC5;">
                                Nuevo
                            </span>

                            <h3 class="card-title h5">
                                Paleta de sombras
                            </h3>

                            <p class="card-text text-secondary">
                                Colores intensos y combinables para crear
                                looks naturales, elegantes o atrevidos.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold" style="color: #8A5A44;">
                                    $45.000
                                </p>

                                <button class="btn text-white w-100" style="background-color: #5A3E36;">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&w=800&q=80"
                                class="card-img-top object-fit-cover"
                                alt="Labial"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge align-self-start mb-2 text-white" style="background-color: #A65D6A;">
                                Popular
                            </span>

                            <h3 class="card-title h5">
                                Labial
                            </h3>

                            <p class="card-text text-secondary">
                                Labial de color intenso y textura suave para
                                lucir unos labios definidos y atractivos.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold" style="color: #8A5A44;">
                                    $22.000
                                </p>

                                <button class="btn text-white w-100" style="background-color: #5A3E36;">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://images.unsplash.com/photo-1631730486572-226d1f595b68?auto=format&fit=crop&w=800&q=80"
                                class="card-img-top object-fit-cover"
                                alt="Brochas de maquillaje"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge align-self-start mb-2 text-dark" style="background-color: #D8C0B8;">
                                Esencial
                            </span>

                            <h3 class="card-title h5">
                                Set de brochas
                            </h3>

                            <p class="card-text text-secondary">
                                Brochas suaves y prácticas para aplicar
                                diferentes productos de maquillaje.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold" style="color: #8A5A44;">
                                    $40.000
                                </p>

                                <button class="btn text-white w-100" style="background-color: #5A3E36;">
                                    Seleccionar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección nosotros -->
    <section id="nosotros" class="py-5" style="background-color: #FFFFFF;">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <span class="display-1">
                        💋
                    </span>

                    <h2 class="fw-bold mt-3">
                        Belleza que inspira confianza
                    </h2>

                    <p class="text-secondary">
                        Trabajamos para ofrecer productos de maquillaje
                        seleccionados por su calidad, variedad y estilo,
                        ayudándote a expresar tu personalidad en cada look.
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="card border-0" style="background-color: #F3E1E1;">
                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold">
                                ¿Por qué elegirnos?
                            </h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent">
                                    ✓ Productos de excelente calidad
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Gran variedad de colores y estilos
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Precios accesibles
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención cercana y personalizada
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold">
                Visítanos
            </h2>

            <p class="text-secondary">
                Encuentra tus productos favoritos y descubre nuevas
                opciones para crear el look perfecto.
            </p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📍</div>
                            <h3 class="h5">Dirección</h3>
                            <p class="mb-0">San Juan de Pasto, Nariño</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">🕐</div>
                            <h3 class="h5">Horario</h3>
                            <p class="mb-0">Lunes a sábado, 8:00 a. m.–8:00 p. m.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📞</div>
                            <h3 class="h5">Teléfono</h3>
                            <p class="mb-0">300 000 0000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="text-white text-center py-4" style="background-color: #5A3E36;">
        <div class="container">
            <p class="mb-1 fw-bold">
                ✨ LUXE BEAUTY ✨
            </p>

            <p class="mb-1 text-white-50">
                Descubre tu belleza, define tu estilo y brilla todos los días. 💄
            </p>

            <p class="mb-0 text-white-50">
                © 2026 LUXE BEAUTY | Maquillaje para cada versión de ti.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

@endsection
