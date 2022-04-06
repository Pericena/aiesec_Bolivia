<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/stylehosp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <title>AIESEC Bolivia</title>
</head>


<body>


    @extends('plantilla.menu')
    <main>
        <section class="home" id="home">
            <div class="home__container">
                <div class=" container">


                    <a href="#">
                        <img src="{{ asset('assets/img/logohosp.png') }}" alt="" class="home__scroll">
                    </a>

                </div>

            </div>



        </section>
        <div class="specialty section container" id="specialty">
            <div class="specialty__container">
                <div class="specialty__box">
                    <h2 class="section__title">
                        ¿POR QUÉ HOSPEDAR?
                    </h2>

                    <div>
                        <a href="#contact" class="button specialty__button">¡Unirme!</a>
                    </div>
                </div>

                <div class="specialty__category">
                    <div class="specialty__group specialty__line">
                        <i class='bx bx-world specialty__img'></i>

                        <h3 class="specialty__title">Muestra lo mejor de ser Boliviano.</h3>
                    </div>

                    <div class="specialty__group specialty__line">
                        <i class='bx bx-group specialty__img'></i>
                        <h3 class="specialty__title">Conoce otra cultura sin salir de casa</h3>
                    </div>

                    <div class="specialty__group specialty__line">
                        <i class='bx bx-happy specialty__img'></i>
                        <h3 class="specialty__title">Crea amistades para toda la vida.</h3>
                    </div>
                </div>
            </div>
        </div>



        <section class="quality section" id="premium">
            <div class="quality__container container">
                <h2 class="section__title">
                    ¡Hospeda a un internacional en casa!
                </h2>

                <div class="quality__content grid">
                    <div class="quality__images">

                        <img src="{{ asset('assets/img/Requisitos_01.png') }}" alt="" class="quality__img-big">
                    </div>

                    <div class="quality__data">
                        <h1 class="quality__title">Requisitos Generales</h1>
                        <table style="width: 100%; border: none;">
                            <tbody>
                                <tr>
                                    <td class="table__img">
                                        <i class='bx bx-building-house quality__img-req'></i>
                                    </td>
                                    <td class="table__desciption">
                                        Alojamiento para una persona. Un espacio para dormir, baño y condiciones básicas
                                        de comodidad
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table__img">
                                        <i class='bx bx-bulb quality__img-req'></i>
                                    </td>
                                    <td class="table__desciption">
                                        Acceso gratuito a los servicios básicos, agua, luz y gas
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <i class='bx bx-wifi quality__img-req'></i>
                                    </td>
                                    <td class="table__desciption">
                                        Acceso gratuito a servicios adicionales como internet
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <i class='bx bx-calendar quality__img-req'></i>
                                    </td>
                                    <td class="table__desciption">
                                        Duración: 6, 8 o más semanas
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="quality__buttons">
                            <button class="button">
                                Postularte
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <h2 class="section__title">Contactanos</h2>
                <h3 class="contact__title">Escribe tus datos!</h3>
            </div>

            <form action="{{ url('hospedaje/store') }}" class="contact__form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="contact__container container grid">
                    <div class="contact__content">
                        <div class="contacts2">

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Nombre Completo *:</label>
                                <input name="nombre" class="contact__form-input" maxlength="50" type="text"
                                    placeholder="Inserta tus Nombres" required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Celular *:</label>
                                <input name="celular" class="contact__form-input" maxlength="10" type="text"
                                    placeholder="Inserta número de celular..." required>
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Correo *:</label>
                                <input name="correo" class="contact__form-input" type="email"
                                    placeholder="Inserta tu Email.." required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿En qué ciudad te encuentras? *:</label>
                                <select class="contact__form-input" name="ciudad_reside" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="La Paz">La Paz</option>
                                    <option class="text-dark" value="Cochabamba">Cochabamba</option>
                                    <option class="text-dark" value="Santa Cruz">Santa Cruz</option>
                                    <option class="text-dark" value="Chuquisaca">Chuquisaca</option>
                                    <option class="text-dark" value="Tarija">Tarija</option>
                                    <option class="text-dark" value="Potosí">Potosí</option>
                                    <option class="text-dark" value="Oruro">Oruro</option>
                                    <option class="text-dark" value="Pando">Pando</option>
                                    <option class="text-dark" value="Beni">Beni</option>
                                    <option class="text-dark" value="Se encuentra en 2 o más departamentos">Se
                                        encuentra en 2 o más departamentos</option>
                                </select>
                            </div>



                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Dirección donde vives *: </label>
                                <input name="direccion" class="contact__form-input" maxlength="50" type="text"
                                    placeholder="Inserta número de celular..." required>
                            </div>



                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿Cuántos voluntarios puedes hospedar? *:</label>
                                <select class="contact__form-input" name="cantidad_voluntarios" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="1">1</option>
                                    <option class="text-dark" value="2">2</option>
                                    <option class="text-dark" value="3 o más">3 o más</option>

                                </select>
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">En que fecha puedes empezar a hospedar al (los)
                                    Voluntario(s) * </label>
                                <input type="date" name="hospedar_fecha" placeholder="fecha" class="contact__form-input"
                                    required>
                            </div>


                        </div>
                    </div>

                    <div class="contact__content">
                        <div class="contacts2">


                            <div class=" contact__form-div">
                                <label for="" class="contact__form-tag">En que hora puedes empezar a hospedar al (los)
                                    Voluntario(s) *</label>
                                <input type="time" name="hospedar_hora" placeholder="hora" class="contact__form-input"
                                    required>
                            </div>

                            <br>
                            <div class=" contact__form-div">

                                <p>¿Qué puedes ofrecerle al voluntario? *: </p>

                                <p>
                                    <label for="check1">
                                        <input type="checkbox" name="habitacion_unica" value="1"> Habitación única
                                    </label>
                                </p>
                                <p>
                                    <label for="check1">
                                        <input type="checkbox" name="habitacion_compa" value="1"> Habitación compartida
                                    </label>
                                </p>
                                <p>
                                    <label for="check1">
                                        <input type="checkbox" name="servicios" value="1"> Servicios (Agua, luz,
                                        internet, etc.)
                                    </label>
                                </p>

                                <p>
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="desayuno" value="1"> Desayuno
                                    </label>
                                </p>
                                <p>
                                    <label for="check1">
                                        <input type="checkbox" name="almuerzo" value="1"> Almuerzo
                                    </label>
                                </p>
                                <p>
                                    <label for="check1">
                                        <input type="checkbox" name="cena" value="1"> Cena
                                    </label>
                                </p>
                                <p>
                                    <label for="check1">
                                        <input type="checkbox" name="otros" value="1"> Otros
                                    </label>
                                </p>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class=" contact__form-div">
                                <label for="" class="contact__form-tag">¿Por qué quieres formar parte del programa
                                    Familia
                                    Global?
                                    *:</label>
                                <textarea class="contact__form-input" name="formar_parte" cols="50" rows="7" placeholder="Escribir" required></textarea>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿Cómo te enteraste del programa Familia Global?
                                    *:</label>
                                <select class="contact__form-input" name="saber_programa" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Soy o Fui miembro de AIESEC">Soy o Fui miembro
                                        de AIESEC</option>
                                    <option class="text-dark" value="Amigos/Familiares">Amigos/Familiares</option>
                                    <option class="text-dark" value="Facebook">Facebook</option>
                                    <option class="text-dark" value="Instagram">Instagram</option>
                                    <option class="text-dark" value="LinkedIn">LinkedIn</option>
                                    <option class="text-dark" value="WhatsApp">WhatsApp</option>
                                    <option class="text-dark" value="Sitio Web">Sitio Web</option>
                                    <option class="text-dark" value="Otras redes sociales">Otras redes sociales
                                    </option>
                                </select>
                            </div>

                            <div class=" contact__form-div ">
                                <label for="" class="contact__form-tag">¿Tienes algo para decirnos?</label>
                                <textarea class="contact__form-input" name="decir_algo" cols="50" rows="7" placeholder="Escribir"></textarea>
                            </div>
                            <br>
                            <button class="button">Registrarme</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>

    </main>




    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-up-arrow-alt"></i>
    </a>

    @extends('contactos.index')
    @extends('plantilla.flechaarriba')
    {{-- @extends('plantilla.parners') --}}




    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!--<script src="{{ asset('assets/js/main.js') }}"></script>-->
</body>

</html>
