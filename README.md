<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Taller Mecánico CarServ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>San Marcos 244, Querétaro, México</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lun - Sab : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>55 1989 7890</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="" width="150">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Inicio</a>
                <a href="nosotros.php" class="nav-item nav-link">Nosotros</a>
                <a href="generarservicio.php" class="nav-item nav-link">Generar Servicio</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="service.php" class="dropdown-item">Mecánica</a>
                        <a href="service.php" class="dropdown-item">Hojalatería y Pintura Automotriz</a>
                        <a href="service.php" class="dropdown-item">Electricidad Automotriz</a>
                        <a href="service.php" class="dropdown-item">Escáner</a>
                        <a href="service.php" class="dropdown-item">Estética Automotriz</a>
                        <a href="service.php" class="dropdown-item">Venta y Montaje de Llantas</a>
                    </div>
                </div>
            </div>
            <a href="Login/Index.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Iniciar Sesión<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Mantenimiento de
                                        automóviles //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Centro de servicio
                                        de reparación de automóviles calificado</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Saber más<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Mantenimiento de
                                        automóviles //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Centro de servicio
                                        de reparación de automóviles calificado</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Saber más<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Servicio de calidad</h5>
                            <p>Obtén un servicio seguro, libre de contacto físico y con una limpieza y sanitización
                                exhaustiva al término del servicio.</p>
                            <a class="text-secondary border-bottom" href="">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Técnicos Expertos</h5>
                            <p>Todos nuestros técnicos cuentan con certificación, además te ofrecemos el mismo servicio
                                profesional y personalizado que recibes con tu Distribuidor</p>
                            <a class="text-secondary border-bottom" href="">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Equipamiento Moderno</h5>
                            <p>Contamos con servicios especializados en instalación de llantas, servicio profesional de
                                montaje, balanceo, inflado con nitrógeno e incluso cambio de aceite.</p>
                            <a class="text-secondary border-bottom" href="">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Años</span></h1>
                            <h4 class="text-white">Experiencia</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// ¿Quiénes somos? //</h6>
                    <h1 class="mb-4"><span class="text-primary">CarServ</span> Siendo el mejor lugar para el cuidado de
                        su automóvil</h1>
                    <p class="mb-4">Compromiso por la calidad, rapidez, confianza en el trabajo y lo más importante, la
                        seguridad e integridad de cada uno de nuestros clientes son los valores que hacen de CarServ una
                        empresa que día a día trabaja por ofrecer el mejor servicio integral automotriz desde hace 15
                        años.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Profesionales y Expertos</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Centro de Servicio de Calidad</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Trabajadores Ganadores de Premios</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Leer más<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Años de Experiencia</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">+25</h2>
                    <p class="text-white mb-0">Técnicos Expertos</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">+1050</h2>
                    <p class="text-white mb-0">Clientes Satisfechos</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">+1050</h2>
                    <p class="text-white mb-0">Servicios Completos</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Nuestros Servicios //</h6>
                <h1 class="mb-5">Catálogo de Servicios</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Mecánica</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Hojalatería y Pintura Automotriz</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-bolt fa-2x me-3"></i>
                            <h4 class="m-0">Electricidad Automotriz</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-wrench fa-2x me-3"></i>
                            <h4 class="m-0">Escáner</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Estética Automotriz</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                            <i class="fa fa-credit-card fa-2x me-3"></i>
                            <h4 class="m-0">Venta y Montaje de llantas</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Años de experiencia en servicio automotriz</h3>
                                    <p class="mb-4">El correcto funcionamiento de tu automóvil es nuestro compromiso.
                                        Contamos con una amplia diversidad de servicios en mecánica express, general y
                                        mayor que van desde
                                        alineación de ruedas hasta reparaciones de motor.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Servicio de Calidad</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Técnicos Expertos</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Equipo de última tecnología</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Solicitar Cotización<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/figura01.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Dando la Mejor imagen a tu Auto</h3>
                                    <p class="mb-4">¡Que tu auto no pierda el encanto! Si tu auto sufrió una colisión,
                                        golpe o abolladura, recupera aquí la imagen que lo hizo atraer tu atención
                                        cuando lo viste por primera vez. Conoce los servicios
                                        en hojalatería y pintura y haz que te vehículo vuelva a sonreír.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Pintura de Calidad</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Hojalateros Expertos</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Bañado de Pintura</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Solicitar Cotización<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/electrico.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Sistema Eléctrico de tu Auto</h3>
                                    <p class="mb-4">Es de vital importancia que el sistema eléctrico de tu automóvil
                                        esté
                                        siempre en óptimas condiciones, por eso, en CarServ nos ocupamos de diagnosticar
                                        fallos y hacer remplazo de piezas necesarias para asegurar el buen
                                        funcionamiento del mismo.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Escáner</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Diagnóstico de Fallos</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Remplazo de Piezas</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Solicitar Cotización<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/scanner.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Escaneo Automotriz</h3>
                                    <p class="mb-4">Si tu auto presenta una luz encendida en el tablero, podemos hacer
                                        un diagnóstico
                                        exacto de las fallas con el escáner, una herramienta que nos sirve
                                        para realizar una lectura del historial de errores de tu vehículo que
                                        nos permite realizar una correcta reparación.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Herramientas Especializadas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Correcto Diagnóstico</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Reparación Inmediata</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Solicitar Cotización<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-5">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/estetica.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Tuneame la Nave</h3>
                                    <p class="mb-4">Un auto con buen funcionamiento es ideal, pero que tenga una
                                        excelente imagen
                                        es mucho mejor. En CarServ nos encargamos
                                        del lavado de interiores y exteriores, pulido y encerado
                                        y hasta lavado de motor.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Lavado Extremo</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Cuidado del Vehículo</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Servicios Extras</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Solicitar Cotización<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-6">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/figura03.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Experiencia en Venta y Colocación de Llantas</h3>
                                    <p class="mb-4">Las llantas son uno de los puntos de seguridad más
                                        importantes en un automóvil. En CarServ contamos
                                        con diferentes servicios como alineación y balanceo, además,
                                        tenemos a la venta las mejores marcas de llantas en el mercado.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Alineación y Balanceo</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Varias Marcas</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Seguridad</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Solicitar Cotización<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <!-- <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd
                            ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
                            voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr
                            ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Booking End -->





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Dirección</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>San Marcos 244, Querétaro, México</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>55 1986 7890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>carservicesinfo@carserv.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Horarios de Servicio</h4>
                    <h6 class="text-light">Lunes - Sábado:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Domingo:</h6>
                    <p class="mb-0">Cerramos</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Servicios</h4>
                    <a class="btn btn-link" href="">Mecánica</a>
                    <a class="btn btn-link" href="">Hojalatería y Pintura Automotriz</a>
                    <a class="btn btn-link" href="">Electricidad Automotriz</a>
                    <a class="btn btn-link" href="">Escáner</a>
                    <a class="btn btn-link" href="">Estética Automotriz</a>
                    <a class="btn btn-link" href="">Venta y Montaje de Llantas</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#"> 2022 CARSERV, SA DE CV.</a>Todos los derechos
                        reservados.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Diseñado por: <a class="border-bottom">Karla Cecilia González Carrasco</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
