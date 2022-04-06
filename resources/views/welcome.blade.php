<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



    <title>AIESEC Bolivia</title>
</head>

<body>
    @extends('plantilla.logo')
    @extends('plantilla.menu')




    <main>
        <section class="home grid" id="home">
            <div class="home__container">
                <div class="home__content container">
                    <div id="typewriter"></div>
                    <h1 class="home__title">
                        con AIESEC<span>.</span>
                    </h1>
                    <p class="home__description">
                        Viaja al extranjero e impulsa tu carrera profesional trabajando en una empresa multinacional o
                        sé un voluntario y participa en proyectos de impacto social. Internacionaliza tu empresa
                        conectando con jóvenes extranjeros cubriendo las necesidades de tu negocio.
                    </p>

                    <div class="home__data">
                        <div class="home__data-group">
                            <h2 class="home__data-number">+1200</h2>
                            <h3 class="home__data-title">Miembros</h3>
                            <p class="home__data-description">De jóvenes, para jóvenes.</p>
                        </div>

                        <div class="home__data-group">
                            <h2 class="home__data-number">200</h2>
                            <h3 class="home__data-title">Aliados</h3>
                            <p class="home__data-description">Ambiente multicultural en tu organización.</p>
                        </div>
                    </div>

                </div>
            </div>

            <img src="{{ asset('assets/img/Homeaiesec.jpg') }}" alt="" class="home__img">
        </section>

        <section class="carts section container" id="carts">
            <h2 class="section__title">Descúbrete a ti mismo y conoce el mundo</h2>

            <div class="carts_container container grid">
                <div class="carts_content cart_1">
                    <div>
                        <img src="{{ asset('assets/img/GV_horizontal_white.png') }}" class="carts_icon" />
                        <p class="carts_subtitle">
                            Sé un ciudadano del mundo. Nuestras oportunidades alrededor del mundo han inspirado a miles
                            de jóvenes a participar en causas sociales que solucionan problemáticas globales.
                        </p>
                    </div>
                    <div>
                        <a href="{{ asset('form_voluntariados') }}" class="button2 button--flex button--white ">
                            Ver más
                            <i class="uil uil-arrow-from-right button_icon"></i>
                        </a>
                    </div>
                </div>
                <div class="carts_content cart_2">
                    <div>
                        <img src="{{ asset('assets/img/GTa_horizontal_white.png') }}" class="carts_icon" />
                        <p class="carts_subtitle">
                            Una oportunidad para jóvenes que buscan desarrollar sus habilidades de liderazgo,
                            competencias profesionales y cualidades mediante una experiencia de enseñanza en Institutos
                            alrededor del mundo.
                        </p>
                    </div>
                    <div>
                        <a href="{{ asset('form_talentos') }}" class="button2 button--flex button--white ">
                            Ver más
                            <i class="uil uil-arrow-from-right button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog section" id="blog">
            <div class="blog__container container">
                <h2 class="section__title">
                    Conoce las intercambios de jóvenes como tú.
                </h2>

                <div class="blog__content grid">
                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ asset('assets/img/blg1.jpg') }}" alt="" class="blog__img">
                            <a href="https://www.thehersheycompany.com/es_mx/inicio.html" class="blog__button">
                                <img src="{{ asset('assets/img/blg2em.png') }}" alt="" class="blog__img2">
                            </a>
                        </div>

                        <div class="blog__data">
                            <h2 class="blog__title">
                                Natalia Carranza | Talento Global
                            </h2>
                            <p class="blog__description">
                                Soy estudiante de la UPSA estudio Administracíon de empresas, hice mi intercambio en
                                México, Guadalajara en la empresa Hershey’s aqui cumpli mi cargo como
                                Coordinadora de Marketing Digital, ser parte del programa de Talento Global fue una
                                experiencia
                                inolvidable en mi vida.

                            </p>

                        </div>
                    </article>

                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ asset('assets/img/blg2.jpeg') }}" alt="" class="blog__img">
                            <a href="https://inoquos.com/" class="blog__button2">
                                <img src="{{ asset('assets/img/blg3em.png') }}" alt="" class="blog__img2">
                            </a>
                        </div>

                        <div class="blog__data">
                            <h2 class="blog__title">
                                Dylan Irala | Talento Global
                            </h2>
                            <p class="blog__description">
                                Soy estudiante de la UCB estudio Administración de Empresas, hice mi intercambio en
                                México en la empresa INOQUOS aqui cumpli mi cargo como
                                Consultor de Marketing, perteneciendo a talento global tuve la oportunidad de conocer
                                personas nuevas, entornos
                                y culturas totalmente diferentes
                            </p>

                        </div>
                    </article>
                </div>
            </div>
        </section>

    </main>

    @extends('contactos.index')
    @extends('plantilla.flechaarriba')
    @extends('plantilla.parners')



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!--<script src="{{ asset('assets/js/main.js') }}"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
