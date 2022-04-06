<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styletglo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <title>AIESEC Bolivia</title>
</head>

<body>
    @extends('plantilla.menu')
    <main>
        <section class="home grid" id="home">
            <div class="home__container">
                <div class="home__content container">

                    <h1 class="home__title">
                        <img src="{{ asset('assets/img/GTa_horizontal_white.png') }}" alt="" class="home__img">
                    </h1>
                    <p class="home__description">
                        Con aiesec puedes realizar tus prácticas, pasantías u obtener
                        una oportunidad de trabajo en el exterior que potencia tu hoja de vida y
                        ayuda al crecimiento de tu carrera, además obtienes nuevas competencias y
                        desarrollas tu liderazgo.<br>
                        <br>
                        ¿Quieres un trayecto profesional internacional?
                    </p>

                    <a href="#contact" class="button">¡Unirme!</a>
                </div>

            </div>

            <div class="home__container2">
                <!-- <div class="home__content container">
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
                    </div> -->

            </div>


        </section>

        <div class="specialty section container" id="specialty">
            <div class="specialty__container">
                <div class="specialty__box">
                    <h2 class="section__title">
                        Suena interesante ¿verdad?<br>
                        Espera a conocer los beneficios
                    </h2>

                    <div>
                        <a href="#contact" class="button specialty__button">¡Unirme!</a>
                    </div>
                </div>

                <div class="specialty__category">
                    <div class="specialty__group specialty__line">
                        <img src="{{ asset('assets/img/Icon_GT01.png') }}" alt="" class="specialty__img">

                        <h3 class="specialty__title">EXPERIENCIA PROFESIONAL</h3>
                        <p class="specialty__Description">
                            Inscríbete, un asesor local te contactará y además tendrás acceso a la
                            plataforma de proyectos en todo el mundo.
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <img src="{{ asset('assets/img/Icon_GT02.png') }}" alt="" class="specialty__img">

                        <h3 class="specialty__title">REMUNERACIÓN</h3>
                        <p class="specialty__Description">
                            Oportunidades profesionales con remuneración o no remuneración;
                            según duración de oportunidad y costo de vida del país destino.
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <img src="{{ asset('assets/img/Icon_GT03.png') }}" alt="" class="specialty__img">

                        <h3 class="specialty__title">DESARROLLO DE LIDERAZGO</h3>
                        <p class="specialty__Description">
                            Desarrollo de liderazgo en ambientes interculturales,
                            retantes y prácticos, que sacarán la mejor versión como profesional.
                        </p>
                    </div>
                </div>
            </div>
        </div>



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

        <section class="quality section" id="premium">
            <div class="quality__container container">
                <h2 class="section__title">
                    A pocos pasos de tener una experiencia profesional
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
                                        <img src="{{ asset('assets/img/Icon_GT040.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        <p>Los programas de intercambios están dirigidos a jóvenes entre los 18 y
                                            30 años de edad.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT05.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        Para esta experiencia debes tener cursado un 70% de tu carrera.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT060.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        El inglés es un factor importante si tu intercambio lo realiza en un país que no
                                        habla tu idioma.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT07.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        Tener algún tipo de experiencia en el área de estudio, así logra ser un
                                        candidato ideal para cualquier organización.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT08.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        Pagar la cuota adminsitratica a AIESEC (aplican términos y condiciones), comprar
                                        tiquetes, tramites/pagos de Visa y seguro internacional.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="quality__buttons">
                            <a href="#contact" class="button">Postularte</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="specialty section container" id="specialty">
            <div class="specialty__container">
                <div class="specialty__box">
                    <h2 class="section__title">
                        Es necesario que conozca todo el proceso
                    </h2>
                </div>

                <div class="specialty2__category">
                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT08.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            <strong class="active-link">Inscríbete</strong>, un asesor local te contactará y además
                            tendrás
                            acceso a la plataforma de proyectos en todo el mundo.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT11.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            <strong class="active-link">Aplica</strong> a las oportunidades que se adaptan a su
                            perfil y
                            a los requisitos solicitados por la empresa.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT12.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            Realiza tu <strong class="active-link">entrevista</strong> con el comité local
                            del país destino y con la empresa a la que aplicaste.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT08.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            Una vez aprobado en la oportunidad debes realizar el aporte de <strong
                                class="active-link">cuota administrativa</strong>
                            a AEISEC y alistar los demás documentos necesarios para el viaje.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT14.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            <strong class="active-link">¡Listo!</strong> tu experiencia de intercambio profesional
                            comienza ahora.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <h2 class="section__title">Pasantías Glogales</h2>
                <h3 class="contact__title">Escribe tus datos!</h3>
            </div>
            @error('correo')
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>¡Error!</strong> Este producto ya está registrado.
                </div>
            @enderror
            <form action="{{ url('talento/store') }}" class="contact__form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="contact__container container grid">
                    <div class="contact__content">
                        <div class="contacts2">
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Nombres *</label>
                                @error('nombres')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" name="nombres" placeholder="Inserta tus Nombres"
                                    class="contact__form-input" maxlength="50" required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Apellidos *</label>
                                <input type="text" name="apellidos" maxlength="50" placeholder="Inserta tus Apellidos"
                                    class="contact__form-input" required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Edad *</label>
                                <select class="contact__form-input" name="edad" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Menos de 18 años">Menos de 18 años
                                    </option>
                                    <option class="text-dark" value="18">18</option>
                                    <option class="text-dark" value="19">19</option>
                                    <option class="text-dark" value="20">20</option>
                                    <option class="text-dark" value="21">21</option>
                                    <option class="text-dark" value="22">22</option>
                                    <option class="text-dark" value="23">23</option>
                                    <option class="text-dark" value="24">24</option>
                                    <option class="text-dark" value="25">25</option>
                                    <option class="text-dark" value="26">26</option>
                                    <option class="text-dark" value="27">27</option>
                                    <option class="text-dark" value="28">28</option>
                                    <option class="text-dark" value="29">29</option>
                                    <option class="text-dark" value="30">30</option>
                                    <option class="text-dark" value="Más de 30 años">Más de 30 años</option>
                                </select>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Correo *</label>
                                <input type="email" name="correo" maxlength="50" placeholder="Inserta tu Correo"
                                    class="contact__form-input" required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Celular *</label>
                                <input
                                    onkeydown="return ((event.keyCode>=47 && event.keyCode<=58) || (event.keyCode==8))"
                                    type="text" name="celular" maxlength="10" placeholder="Inserta tu Celular"
                                    class="contact__form-input" required>
                            </div>



                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿En que ciudad resides? *</label>
                                <select class="contact__form-input" name="ciudad_reside" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="La Paz">La Paz</option>
                                    <option class="text-dark" value="Cochabamba">Cochabamba</option>
                                    <option class="text-dark" value="Santa Cruz">Santa Cruz</option>
                                    <option class="text-dark" value="Sucre">Sucre</option>
                                    <option class="text-dark" value="Tarija">Tarija</option>
                                    <option class="text-dark" value="Potosí">Potosí</option>
                                    <option class="text-dark" value="Oruro">Oruro</option>
                                    <option class="text-dark" value="Pando">Pando</option>
                                    <option class="text-dark" value="Beni">Beni</option>
                                    <option class="text-dark" value="Villamontes">Villamontes</option>
                                    <option class="text-dark" value="Yacuiba">Yacuiba</option>
                                    <option class="text-dark" value="Otra">Otra</option>
                                </select>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿En que universidad estudias o
                                    estudiaste? *</label>
                                <select class="contact__form-input" id="buscador" name="universidad" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    @foreach ($universidades as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Grado de Estudio *</label>
                                <select class="contact__form-input" name="grado_estudio" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Bachiller">Bachiller</option>
                                    <option class="text-dark" value="Universidad 1er. a 3er. semestre">
                                        Universidad
                                        1er. a 3er. semestre</option>
                                    <option class="text-dark" value="Universidad 4to. a 6to. semestre">
                                        Universidad
                                        4to. a 6to. semestre</option>
                                    <option class="text-dark" value="Universidad 7mo. a 10mo. semestre">
                                        Universidad
                                        7mo. a 10mo. semestre</option>
                                    <option class="text-dark" value="Egresado">Egresado</option>
                                    <option class="text-dark" value="Titulado">Titulado</option>
                                    <option class="text-dark" value="Posgrado Maestría/Doctorado">Posgrado
                                        Maestría/Doctorado</option>
                                </select>
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿Qué carrera estudias o estudiaste?
                                    *</label>
                                <select class="contact__form-input" name="carrera" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Administración de Empresas">
                                        Administración de
                                        Empresas</option>
                                    <option class="text-dark" value="Ciencias de la Educación">Ciencias de la
                                        Educación</option>
                                    <option class="text-dark" value="Comercio Internacional">Comercio
                                        Internacional
                                    </option>
                                    <option class="text-dark" value="Comunicación Social">Comunicación Social
                                    </option>
                                    <option class="text-dark" value="Diseño Gráfico">Diseño Gráfico</option>
                                    <option class="text-dark" value="Turismo y Hotelería">Turismo y Hotelería
                                    </option>
                                    <option class="text-dark" value="Idiomas">Idiomas</option>
                                    <option class="text-dark" value="Ingeniería Comercial">Ingeniería
                                        Comercial
                                    </option>
                                    <option class="text-dark" value="Ingeniería Financiera">Ingeniería
                                        Financiera
                                    </option>
                                    <option class="text-dark" value="Ingeniería Industrial">Ingeniería
                                        Industrial
                                    </option>
                                    <option class="text-dark" value="Ingeniería de Sistemas y Computación">
                                        Ingeniería de Sistemas y Computación</option>
                                    <option class="text-dark" value="Ingeniería Informática">Ingeniería
                                        Informática
                                    </option>
                                    <option class="text-dark" value="Marketing">Marketing</option>
                                    <option class="text-dark" value="Negocios Internacionales">Negocios
                                        Internacionales</option>
                                    <option class="text-dark" value="Publicidad">Publicidad</option>
                                    <option class="text-dark" value="Otra">Otra</option>
                                </select>
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Si seleccionaste "Otra escribe tú carrera
                                </label>
                                <input type="text" name="otra_carrera" placeholder="Inserta Nombre de la carrera"
                                    class="contact__form-input" maxlength="50">
                            </div>
                        </div>
                    </div>


                    <div class="contact__content">
                        <div class="contacts2">
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Nivel de Ingles *</label>
                                <select class="contact__form-input" name="nivel_ingles" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Básico (A1-A2)">Básico (A1-A2)</option>
                                    <option class="text-dark" value="Intermedio (B1-B2)">Intermedio (B1-B2)
                                    </option>
                                    <option class="text-dark" value="Avanzado (C1-C2)">Avanzado (C1-C2)
                                    </option>
                                    <option class="text-dark" value="No tengo estudios en Inglés">No tengo
                                        estudios
                                        en Inglés</option>
                                </select>
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Experiencia Laboral *</label>
                                <select class="contact__form-input" name="experiencia" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Aún no tengo experiencia profesional">Aún
                                        no
                                        tengo experiencia profesional</option>
                                    <option class="text-dark"
                                        value="Tengo experiencia profesional menor a 6 meses">
                                        Tengo experiencia
                                        profesional menor a 6 meses</option>
                                    <option class="text-dark"
                                        value="Tengo experiencia profesional de 6 meses a 1 año">
                                        Tengo experiencia
                                        profesional de 6 meses a 1 año</option>
                                    <option class="text-dark"
                                        value="Tengo experiencia profesional de más de 1 año">
                                        Tengo experiencia
                                        profesional de más de 1 año</option>
                                </select>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿En qué área te gustaría desarrollarte? *
                                </label>
                                <select class="contact__form-input" name="area_desarrollo" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Administración de Empresas">
                                        Administración de
                                        Empresas</option>
                                    <option class="text-dark" value="Desarrollo de Negocios">Desarrollo de
                                        Negocios</option>
                                    <option class="text-dark" value="Diseño Gráfico">Diseño Gráfico</option>
                                    <option class="text-dark" value="Idiomas">Idiomas</option>
                                    <option class="text-dark" value="Tecnologías de la Información">
                                        Tecnologías de
                                        la Información</option>
                                    <option class="text-dark" value="Programación y Desarrollo de Software">
                                        Programación y Desarrollo de Software</option>
                                    <option class="text-dark" value="Marketing y Publicidad">Marketing y
                                        Publicidad</option>
                                    <option class="text-dark" value="Hotelería y Turismo">Hotelería y Turismo
                                    </option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿Porque desea tomar una pasantía
                                    internacional?
                                    *
                                </label>
                                <select class="contact__form-input" name="pasantia_internacional" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Internacionalizar mi profesión">
                                        Internacionalizar mi profesión</option>
                                    <option class="text-dark" value="Potenciar mi CV">Potenciar mi CV</option>
                                    <option class="text-dark" value="Trabajar en una empresa multinacional">
                                        Trabajar en una empresa multinacional</option>
                                    <option class="text-dark" value="Aprender para tener mi propio negocio">
                                        Aprender para tener mi propio negocio</option>
                                    <option class="text-dark" value="Viajar y conocer otros países">Viajar y
                                        conocer otros países</option>
                                </select>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿Cual de los programas te interesa? *
                                </label>
                                <select class="contact__form-input" name="programa" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Talento Global | 6 a 12 semanas">Talento
                                        Global | 6 a 12 semanas</option>
                                    <option class="text-dark" value="Talento Global | 3 a 6 meses">Talento
                                        Global
                                        | 3 a 6 meses</option>
                                    <option class="text-dark" value="Talento Global | 6 a 18 meses">Talento
                                        Global
                                        | 6 a 18 meses</option>
                                </select>
                            </div>

                            <p>¿Cómo te enteraste de nuestro</p>
                            <br>
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag"> programa de
                                    Pasantías
                                    Globales?*
                                </label>
                                <select class="contact__form-input" name="descubrimiento_programa" required>
                                    <option value="" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Amigos/Familiares">Amigos/Familiares
                                    </option>
                                    <option class="text-dark" value="Eventos/Webinars">Eventos/Webinars
                                    </option>
                                    <option class="text-dark" value="Facebook">Facebook</option>
                                    <option class="text-dark" value="Instagram">Instagram</option>
                                    <option class="text-dark" value="LinkedIn">LinkedIn</option>
                                    <option class="text-dark" value="TikTok">TikTok</option>
                                    <option class="text-dark" value="Sesión Informativa">Sesión Informativa
                                    </option>
                                    <option class="text-dark" value="Correo Informativo">Correo Informativo
                                    </option>
                                    <option class="text-dark" value="Punto Informativo">Punto Informativo
                                    </option>
                                    <option class="text-dark" value="Página de la Universidad">Página de la
                                        Universidad</option>
                                    <option class="text-dark" value="Otros">Otros</option>
                                </select>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿Por cual medio deseas ser contactado? *
                                </label>
                                <select class="contact__form-input" name="medio_contacto">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Chat de WhatsApp">Chat de WhatsApp
                                    </option>
                                    <option class="text-dark" value="Llamada de WhatsApp">Llamada de WhatsApp
                                    </option>
                                    <option class="text-dark" value="Correo">Correo</option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Describa los documentos a adjuntar
                                    de manera corta*</label>
                                <input type="text" name="describir_documento" placeholder="Describa.."
                                    class="contact__form-input" maxlength="200" required>
                            </div>
                            <p>En caso de adicionar tu CV y/o otro documento
                                (Certificados, Recomendaciones, Etc.),
                                por favor un archivo general y en extensión
                                zip *
                            </p>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag"><i class='bx bxs-cloud-upload'></i>Adjuntar
                                    Archivo </label>
                                <br>
                                <div class="custom-input-file2">
                                    {{-- <div class="custom-input-file"> --}}
                                    <input name="documentos" class="upload" type="file"
                                        accept=".zip,.rar,.7zip" alt="Click aquí para subir"
                                        title="Click aquí para subir" required>
                                    {{-- <i class='bx bxs-cloud-upload'></i>Subir fichero... --}}
                                    {{-- </div> --}}


                                </div>
                            </div>
                            <input type="hidden" name="estado" value="Sin Ver">
                            <button type="submit" class="button">Registrarme</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>

    </main>
    @extends('contactos.index')
    @extends('plantilla.flechaarriba')
    {{-- @extends('plantilla.parners') --}}
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!--<script src="{{ asset('assets/js/main.js') }}"></script>-->
</body>

</html>
