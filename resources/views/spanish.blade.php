<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Joseph Avila - Desarrollador de Software</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('/css/nice-select.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('/css/style.css')}} ">
    
</head>
<body class="home-one">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- main header -->
        <header class="main-header menu-absolute">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container container-1620 clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="index.html"><img src="{{('asset/images/logos/logo.png')}}" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer clearfix mx-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                   <div class="mobile-logo my-15">
                                       <a href="index.html">
                                            <img src="{{asset('/images/logos/logo.png')}}" alt="Logo" title="Logo">
                                       </a>
                                   </div>
                                   
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="#">Home</a>
                                            <ul>
                                               <li><a href="#">MultiPage</a>
                                                    {{-- <ul>
                                                        <li><a href="index.html">Home One</a></li>
                                                        <li><a href="index2.html">Home Two</a></li>
                                                    </ul>
                                                </li> --}}
                                               <li><a href="#">OnePage</a>
                                                    {{-- <ul>
                                                        <li><a href="indexonepage.html">Home One</a></li>
                                                        <li><a href="index2onepage.html">Home Two</a></li>
                                                    </ul>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="#">projects</a>
                                            {{-- <ul>
                                                <li><a href="projects.html">project Grid</a></li>
                                                <li><a href="projects-masonry.html">projects masonry</a></li>
                                                <li><a href="project-details.html">projects details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="#">blog</a>
                                            {{-- <ul>
                                                <li><a href="blog.html">blog standard</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="#">pages</a>
                                            {{-- <ul>
                                                <li><a href="404.html">Error Page</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li class="dropdown">
                                            <a href="#">
                                              <img src="{{ asset('images/icons/colombia.png') }}" alt="Descripción de la imagen" />
                                            </a>
                                            <ul>
                                              <li>
                                                <a href="{{ route('ingles') }}">Inglés</a>
                                                <img src="{{ asset('images/icons/uk.png') }}" alt="Descripción de la imagen" />
                                              </li>
                                            </ul>
                                          </li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        
                        <!-- Menu Button -->
                        <div class="menu-btns">
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button>
                                    <img src="{{asset('/images/shape/sidebar-tottler.svg')}}" alt="Toggler">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>
       
        <!--Form Back Drop-->
        <div class="form-back-drop"></div>
        
        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->
       
        
        <!-- Hero Section Start -->
        <section class="main-hero-area pt-150 pb-80 rel z-1">
            <div class="container container-1620">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-7">
                        <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                            <span class="h2">Hola, Soy </span>
                            <h1><b>Joseph Avila</b> Desarollador de Software</h1>
                            <p>Programador entusiasta en desarrollar soluciones digitales innovadoras y efectivas. Trabajo para transformar tus ideas en aplicaciones prácticas y a medida, diseñadas para satisfacer tus necesidades específicas.</p>
                            {{-- <div class="hero-btns">
                                <a href="contact.html" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                                <a href="contact.html" class="read-more">Download Resume <i class="far fa-angle-right"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 order-lg-3">
                        <div class="hero-counter-wrap ms-lg-auto rmb-55 wow fadeInUp delay-0-4s">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text plus" data-speed="100" data-stop="2">0</span>
                                <span class="counter-title">Años de Experiencia</span>
                            </div>
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text plus" data-speed="500" data-stop="10">0</span>
                                <span class="counter-title">Proyectos Completados</span>
                            </div>
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text percent" data-speed="3000" data-stop="98">0</span>
                                <span class="counter-title">Clientes Satisfechos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="author-image-part wow fadeIn delay-0-3s">
                            <div class="bg-circle"></div>
                            <img src="{{asset('/images/hero/me.png')}}" alt="Author">
                            <div class="progress-shape">
                                <img src="{{asset('/images/hero/progress-shape.png')}}" alt="Progress">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Hero Section End -->
        
        
        <!-- About Area start -->
        <section class="about-area rel z-1">
            <div class="for-bgc-black py-130 rpy-100">
                <div class="container">
                    <div class="row gap-100 align-items-center">
                        <div class="col-lg-7">
                            <div class="about-content-part rel z-2 rmb-55">
                                <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                                    <span class="sub-title mb-15">Sobre Mí</span>
                                    <h2>Soluciones <span>Profesionales</span> para Productos Digitales</h2>
                                    <p>Ofrezco soluciones efectivas y personalizadas para abordar desafíos en el ámbito digital. Mi enfoque se centra en resolver problemas con integridad y profesionalismo, garantizando resultados que superen tus expectativas</p>
                                </div>
                                <ul class="list-style-one two-column wow fadeInUp delay-0-2s">
                                    <li>Desarrollo Web</li>
                                    <li>Desarrollo de Aplicaciones Móviles</li>
                                    <li>Desarrollo de Software a Medida</li>
                                    <li>Gestión de Proyectos Tecnológicos</li>
                                </ul>
                                <div class="about-info-box mt-25 wow fadeInUp delay-0-2s">
                                    <div class="info-box-item">
                                        <i class="far fa-envelope"></i>
                                        <div class="content">
                                            <span>Envíanos un Email</span><br>
                                            <a href="mailto:support@gmail.com">avilajoseph@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="info-box-item">
                                        <i class="far fa-phone"></i>
                                        <div class="content">
                                            <span>Haz una Llamada</span><br>
                                            <a href="callto:+000(123)45688">311 759 7105</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-image-part wow fadeInUp delay-0-3s">
                                <img src="{{asset('/images/about/about.jpg')}}" alt="About Me">
                                <div class="about-btn btn-one wow fadeInRight delay-0-4s">
                                    <img src="{{asset('/images/about/btn-image1.png')}}" alt="Image">
                                    <h6>Experience Designer</h6>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="about-btn btn-two wow fadeInRight delay-0-5s">
                                    <img src="{{asset('/images/about/btn-image2.png')}}" alt="Image">
                                    <h6>Mark J. Collins</h6>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="dot-shape">
                                    <img src="{{asset('/images/shape/about-dot.png')}}" alt="Shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- About Area end -->
        
        
        <!-- Resume Area start -->
        <section class="resume-area pt-130 rpt-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="big-icon mt-85 rmt-0 rmb-55 wow fadeInUp delay-0-2s">
                            <i class="flaticon-asterisk-1"></i>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9">
                                <div class="section-title mb-60 wow fadeInUp delay-0-2s">
                                    <span class="sub-title mb-15">Mi Currículum</span>
                                    <h2>Experiencia en <span>Desarrollo de Soluciones </span>Efectivas</h2>
                                </div>
                            </div>
                        </div>
                        <div class="resume-items-wrap">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon">
                                            <i class="far fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2021 - 2022</span>
                                            <h4>Desarrollador de Software</h4>
                                            <span class="company">SERVICIOS Y ASESORIAS
                                                CONSTRUMEGA CO SAS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item wow fadeInUp delay-0-4s">
                                        <div class="icon">
                                            <i class="far fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2023</span>
                                            <h4>Desarrollador de Software</h4>
                                            <span class="company">ARECONSULTORIA SAS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item wow fadeInUp delay-0-2s">
                                        <div class="icon">
                                            <i class="far fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2023 - 2024</span>
                                            <h4>Desarrollador de Software</h4>
                                            <span class="company">TPDINDUSTRIAL SAS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item wow fadeInUp delay-0-4s">
                                        <div class="icon">
                                            <i class="far fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">2024 - Actualmente</span>
                                            <h4>Desarrollador de Software</h4>
                                            <span class="company">SENA TECNOPARQUE ATLANTICO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Resume Area end -->
        
        
        <!-- Services Area start -->
        <section class="services-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Mis Servicios</span>
                            <h2>Habilidades en <span>Desarrollo de Software</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-item wow fadeInUp delay-0-2s">
                            <div class="number">01.</div>
                            <div class="content">
                                <h4>Soluciones de Software a Medida</h4>
                                <p>Aplicaciones personalizadas para tu empresa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item wow fadeInUp delay-0-4s">
                            <div class="number">02.</div>
                            <div class="content">
                                <h4>Desarrollo Web Full Stack</h4>
                                <p>Soluciones web dinámicas y responsivas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item wow fadeInUp delay-0-2s">
                            <div class="number">03.</div>
                            <div class="content">
                                <h4>Desarrollo de Apps Móviles</h4>
                                <p>Aplicaciones móviles multiplataforma avanzadas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item wow fadeInUp delay-0-4s">
                            <div class="number">04.</div>
                            <div class="content">
                                <h4>Arquitectura de Bases de Datos</h4>
                                <p>Diseño y gestión para datos seguros y eficientes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item wow fadeInUp delay-0-2s">
                            <div class="number">05.</div>
                            <div class="content">
                                <h4>Diseño de Interfaces de Usuario (UI/UX)</h4>
                                <p>Experiencia de usuario intuitiva y atractiva</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-item wow fadeInUp delay-0-4s">
                            <div class="number">06.</div>
                            <div class="content">
                                <h4>Desarrollo de Aplicaciones de Escritorio</h4>
                                <p>Software de escritorio para sistemas operativos</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Services Area end -->
        
        
        <!-- Skill Area start -->
        <section class="skill-area rel z-1">
            <div class="for-bgc-black pt-130 rpt-100 pb-100 rpb-70">
                <div class="container">
                    <div class="row gap-100">
                        <div class="col-lg-5">
                            <div class="skill-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                                <div class="section-title mb-40">
                                    <span class="sub-title mb-15">Mis Competencias</span>
                                    <h2>Descubre Mis Principales <span>Habilidades</span></h2>
                                    <p>Como desarrollador de software, poseo un conjunto diversificado de habilidades para enfrentar diversos desafíos tecnológicos.
                                    Mi enfoque abarca desde la creación de soluciones a medida hasta la implementación de sistemas eficientes y escalables.
                                    Aquí puedes conocer las áreas clave en las que me especializo para entregar proyectos de alta calidad y eficacia.</p>
                                </div>
                                {{-- <a href="about.html" class="theme-btn">Learn More <i class="far fa-angle-right"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="skill-items-wrap">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-2s">
                                            <img src="{{asset('/images/skills/skill1.png')}}" alt="Skill">
                                            <h5>PHP</h5>
                                            <span class="percent">95%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-3s">
                                            <img src="{{asset('/images/skills/skill2.png')}}" alt="Skill">
                                            <h5>Laravel</h5>
                                            <span class="percent">83%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-4s">
                                            <img src="{{asset('/images/skills/skill3.png')}}" alt="Skill">
                                            <h5>Java</h5>
                                            <span class="percent">93%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-5s">
                                            <img src="{{asset('/images/skills/skill4.png')}}" alt="Skill">
                                            <h5>MySQL</h5>
                                            <span class="percent">84%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-2s">
                                            <img src="{{asset('/images/skills/skill5.png')}}" alt="Skill">
                                            <h5>React</h5>
                                            <span class="percent">65%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-3s">
                                            <img src="{{asset('/images/skills/skill6.png')}}" alt="Skill">
                                            <h5>JavaScript</h5>
                                            <span class="percent">86%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-4s">
                                            <img src="{{asset('/images/skills/skill7.png')}}" alt="Skill">
                                            <h5>Python</h5>
                                            <span class="percent">62%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-5s">
                                            <img src="{{asset('/images/skills/skill8.png')}}" alt="Skill">
                                            <h5>Flutter</h5>
                                            <span class="percent">94%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Skill Area end -->
        
        
        <!-- Projects Area start -->
        <section class="projects-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Ultimos Trabajos</span>
                            <h2>Explora Mis <span>Proyectos Populares</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6">
                        <div class="project-image wow fadeInLeft delay-0-2s">
                            <img src="{{asset('/images/projects/project1.jpg')}}" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="project-content wow fadeInRight delay-0-2s">
                            <span class="sub-title">Product Design</span>
                            <h2><a href="project-details.html">Mobile Application Design</a></h2>
                            <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6 order-lg-2">
                        <div class="project-image wow fadeInLeft delay-0-2s">
                            <img src="{{asset('/images/projects/project2.jpg')}}" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 ms-auto">
                        <div class="project-content wow fadeInRight delay-0-2s">
                            <span class="sub-title">Product Design</span>
                            <h2><a href="project-details.html">Website Makeup Design</a></h2>
                            <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6">
                        <div class="project-image wow fadeInLeft delay-0-2s">
                            <img src="{{asset('/images/projects/project3.jpg')}}" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="project-content wow fadeInRight delay-0-2s">
                            <span class="sub-title">Product Design</span>
                            <h2><a href="project-details.html">Brand Identity and Motion Design</a></h2>
                            <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6 order-lg-2">
                        <div class="project-image wow fadeInLeft delay-0-2s">
                            <img src="{{asset('/images/projects/project4.jpg')}}" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 ms-auto">
                        <div class="project-content wow fadeInRight delay-0-2s">
                            <span class="sub-title">Product Design</span>
                            <h2><a href="project-details.html">Mobile Application Development</a></h2>
                            <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis architecto beatae</p>
                            <a href="project-details.html" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-btn text-center wow fadeInUp delay-0-2s">
                    <a href="projects.html" class="theme-btn">Ver Más Proyectos <i class="far fa-angle-right"></i></a>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Projects Area end -->
        
        
        <!-- Testimonial Area start -->
        <section class="testimonials-area rel z-1">
            <div class="for-bgc-black py-130 rpy-100">
                <div class="container">
                    <div class="row gap-90">
                        <div class="col-lg-4">
                            <div class="testimonials-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                                <div class="section-title mb-40">
                                    <span class="sub-title mb-15">Testimonios</span>
                                    <h2>Testimonios de <span>Clientes</span></h2>
                                    <p>He recibido comentarios de más de 1253 clientes satisfechos, quienes han destacado la calidad y efectividad de mis soluciones de software. Aquí hay algunos casos de lo que dicen:</p>
                                </div>
                                <div class="slider-arrows">
                                    <button class="testimonial-prev"><i class="fal fa-arrow-left"></i></button>
                                    <button class="testimonial-next"><i class="fal fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="testimonials-wrap">
                                <div class="testimonial-item wow fadeInUp delay-0-3s">
                                    <div class="author">
                                        <img src="{{asset('/images/testimonials/author1.png')}}" alt="Author">
                                    </div>
                                    <div class="text">At vero eoset accusamus et iusto odio dignissimos ducimus quie blanditiis praesentium voluptatum deleniti atque corrupti dolores</div>
                                    <div class="testi-des">
                                        <h5>Rodolfo E. Shannon</h5>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item wow fadeInUp delay-0-4s">
                                    <div class="author">
                                        <img src="{{asset('/images/testimonials/author2.png')}}" alt="Author">
                                    </div>
                                    <div class="text">Nam libero tempore cumsoluta nobise est eligendi optio cumque nihil impedit quominus idquod maxime placeat facere possimus</div>
                                    <div class="testi-des">
                                        <h5>Kenneth J. Dutton</h5>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                                <div class="testimonial-item wow fadeInUp delay-0-2s">
                                    <div class="author">
                                        <img src="{{asset('/images/testimonials/author1.png')}}" alt="Author">
                                    </div>
                                    <div class="text">At vero eoset accusamus et iusto odio dignissimos ducimus quie blanditiis praesentium voluptatum deleniti atque corrupti dolores</div>
                                    <div class="testi-des">
                                        <h5>Rodolfo E. Shannon</h5>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item wow fadeInUp delay-0-2s">
                                    <div class="author">
                                        <img src="{{asset('/images/testimonials/author2.png')}}" alt="Author">
                                    </div>
                                    <div class="text">Nam libero tempore cumsoluta nobise est eligendi optio cumque nihil impedit quominus idquod maxime placeat facere possimus</div>
                                    <div class="testi-des">
                                        <h5>Kenneth J. Dutton</h5>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Testimonial Area end -->
        
        
        <!-- Pricing Area start -->
        <!-- <section class="pricing-area pt-130 rpt-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Pricing Package</span>
                            <h2>Amazing <span>Pricing</span> For your Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-2s">
                            <div class="pricing-header">
                                <h4 class="title">Basic Plan</h4>
                                <p class="save-percent">Try Out Basic Plan Save <span>20%</span></p>
                                <span class="price">19.95</span>
                            </div>
                            <div class="pricing-details">
                                <p>Sed perspiciatis unde natus totam see rem aperiam eaque inventore</p>
                                <ul>
                                    <li>Website Design</li>
                                    <li>Mobile Apps Design</li>
                                    <li>Product Design</li>
                                    <li class="unable">Digital Marketing</li>
                                    <li class="unable">Custom Support</li>
                                </ul>
                                <a href="contact.html" class="theme-btn">Choose Package <i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-4s">
                            <div class="pricing-header">
                                <h4 class="title">Standard Plan</h4>
                                <p class="save-percent">Try Out Basic Plan Save <span>35%</span></p>
                                <span class="price">19.95</span>
                            </div>
                            <div class="pricing-details">
                                <p>Sed perspiciatis unde natus totam see rem aperiam eaque inventore</p>
                                <ul>
                                    <li>Website Design</li>
                                    <li>Mobile Apps Design</li>
                                    <li>Product Design</li>
                                    <li>Digital Marketing</li>
                                    <li>Custom Support</li>
                                </ul>
                                <a href="contact.html" class="theme-btn">Choose Package <i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item wow fadeInUp delay-0-6s">
                            <div class="pricing-header">
                                <h4 class="title">Basic Plan</h4>
                                <p class="save-percent">Try Out Basic Plan Save <span>45%</span></p>
                                <span class="price">19.95</span>
                            </div>
                            <div class="pricing-details">
                                <p>Sed perspiciatis unde natus totam see rem aperiam eaque inventore</p>
                                <ul>
                                    <li>Website Design</li>
                                    <li>Mobile Apps Design</li>
                                    <li>Product Design</li>
                                    <li>Digital Marketing</li>
                                    <li>Custom Support</li>
                                </ul>
                                <a href="contact.html" class="theme-btn">Choose Package <i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section> -->
        <!-- Pricing Area end -->
        
        
        <!-- Contact Area start -->
        <section class="contact-area pt-95 pb-130 rpt-70 rpb-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-content-part pt-5 rpt-0 rmb-55 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-40">
                                <span class="sub-title mb-15">Ponte en Contacto</span>
                                <h2>Hablemos sobre tus <span>próximos proyectos</span></h2>
                                <p>Estoy aquí para ayudarte a convertir tus ideas en realidad con soluciones a medida. No dudes en contactarme para discutir cómo podemos trabajar juntos para alcanzar tus objetivos.</p>
                            </div>
                            <ul class="list-style-two">
                                <li>2+ Años de Experiencia</li>
                                <li>Desarrollador Web Profesional</li>
                                <li>Desarrollador de Aplicaciones Móviles</li>
                                <li>Soporte para Diseño Personalizado</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form contact-form-wrap form-style-one wow fadeInUp delay-0-4s">
                            <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nombre Completo</label>
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Richard D. Hammond" required data-error="Please enter your Name">
                                            <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="support@gmail.com" required data-error="Please enter your Email">
                                            <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">Numero de Telefono</label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="+880 (123) 456 88" required data-error="Please enter your Phone Number">
                                            <label for="phone_number" class="for-icon"><i class="far fa-phone"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Requerimiento</label>
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                                            <label for="subject" class="for-icon"><i class="far fa-text"></i></label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Mensaje</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="write message" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">Envianos un Mensaje <i class="far fa-angle-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Contact Area end -->
        
        
        <!-- Blog Area start -->
        <!-- <section class="blog-area rel z-1">
            <div class="for-bgc-black pt-130 pb-100 rpt-100 rpb-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">News & Blog</span>
                                <h2>Latest News & <span>Blog</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog1.png" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta mb-35">
                                        <a class="tag" href="blog.html">Design</a>
                                        <a class="tag" href="blog.html">Figma</a>
                                    </div>
                                    <h5><a href="blog-details.html">Tips For Conductin See Usability Studies</a></h5>
                                    <hr>
                                    <div class="blog-meta mt-35">
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog2.png" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta mb-35">
                                        <a class="tag" href="blog.html">Design</a>
                                        <a class="tag" href="blog.html">Figma</a>
                                    </div>
                                    <h5><a href="blog-details.html">Keyboard-Only Suppor Assistive Technology</a></h5>
                                    <hr>
                                    <div class="blog-meta mt-35">
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section> -->
        <!-- Blog Area end -->
        
        <!-- Client Log start -->
        <!-- <div class="client-logo-area rel z-1 pt-130 rpt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center pt-5 mb-65 wow fadeInUp delay-0-2s">
                            <h6>I’ve <span>1253+ Global Clients</span> & lot’s of Project Complete</h6>
                        </div>
                    </div>
                </div>
                <div class="client-logo-wrap">
                    <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo1.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo2.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo3.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo4.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo5.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo6.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo7.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo8.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo9.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.html">
                        <img src="assets/images/client-logos/client-logo10.png" alt="Client Logo">
                    </a>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </div> -->
        <!-- Client Log end -->
        
        
        <!-- footer area start -->
        <footer class="main-footer rel z-1">
            <div class="footer-top-wrap bgc-black pt-100 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-12">
                            <div class="footer-widget widget_logo wow fadeInUp delay-0-2s">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{asset('/images/logos/logo.png')}}" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                                <h6 class="footer-title">Quick Link</h6>
                                <ul>
                                    <li><a href="services.html">Service</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="services.html#pricing">Pricing</a></li>
                                    <li><a href="about.html#faqs">Faqs</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget widget_newsletter wow fadeInUp delay-0-4s">
                                <form action="#">
                                    <label for="email-address"><i class="far fa-envelope"></i></label>
                                    <input id="email-address" type="email" placeholder="Email Address" required>
                                    <button>Sign Up <i class="far fa-angle-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-widget widget_contact_info wow fadeInUp delay-0-6s">
                                <h6 class="footer-title">Dirección</h6>
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i>Cra. 54 #68 – 80, Nte. Centro Historico, Barranquilla</li>
                                    <li><i class="far fa-envelope"></i> <a href="mailto:support@gmail.com">avilajoseph2021@gmail.com</a></li>
                                    <li><i class="far fa-phone"></i> <a href="callto:+880(123)45688">311 759 7105</a></li>
                                    <li>
                                        <img src="{{ asset('images/icons/colombia.png') }}" alt="Descripción de la imagen" style="margin-right: 15px;" />
                                        <img src="{{ asset('images/icons/uk.png') }}" alt="Descripción de la imagen" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="footer-bottom pt-20 pb-5 rpt-25">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>Copyright @2023, <a href="index.html">Noxfolio</a> All Rights Reserved</p>
                            </div>
                       </div>
                       <div class="col-lg-6 text-lg-end">
                           <ul class="footer-bottom-nav">
                               <li><a href="#">Facebook</a></li>
                               <li><a href="#">Twitter</a></li>
                               <li><a href="#">Instagram</a></li>
                               <li><a href="#">LinkedIn</a></li>
                           </ul>
                       </div>
                   </div>
                   <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
                </div>
                <div class="bg-lines">
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                   <span></span><span></span>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

    </div>
    <!--End pagewrapper-->
   
    
    <!-- Jquery -->
    <script src=" {{asset('/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <!-- Appear Js -->
    <script src="{{asset('/js/appear.min.js')}}"></script>
    <!-- Slick -->
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('/js/jquery.nice-select.min.js')}}"></script>
    <!-- Image Loader -->
    <script src="{{ asset('/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{ asset('/js/isotope.pkgd.min.js')}}"></script>
    <!--  WOW Animation -->
    <script src="{{asset('/js/wow.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('/js/script.js')}}"></script>
    
    <!-- For Contact Form -->
    <script src="{{asset('/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('/js/form-validator.min.js')}}"></script>
    <script src="{{asset('/js/contact-form-script.js')}}"></script>

</body>
</html>