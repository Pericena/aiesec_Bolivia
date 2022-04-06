<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>AIESEC Bolivia</title>
</head>

<body>
    @extends('plantilla.logo')
    @extends('plantilla.menu')
    <main>
        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <h2 class="section__title">Contactanos</h2>
            </div>
            <div class="contact__container container grid">
                <div class="contact__content">
                    <h3 class="contact__title">Tienes dudas?</h3>
                    <div class="contact__info">
                        <div class="contact__card">
                            <i class="bx bx-mail-send contact__card-icon"></i>
                            <h3 class="contact__card-title">Email</h3>
                            <span class="contact__card-data">aiesec@gmail.com</span>

                            <a href="mailto:fernandocayolacar@gmail.com" target="_blank" class="contact__button">
                                Escribenos <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class="bx bxl-whatsapp contact__card-icon"></i>
                            <h3 class="contact__card-title">WhatsApp</h3>
                            <span class="contact__card-data">+591 73665052</span>

                            <a href="" target="_blank" class="contact__button">
                                Escribenos <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class="bx bxl-messenger contact__card-icon"></i>
                            <h3 class="contact__card-title">Messenger</h3>
                            <span class="contact__card-data">AIESEC Bolivia</span>

                            <a href="" target="_blank" class="contact__button">
                                Escribenos <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact__content">
                    <h3 class="contact__title">Escribe tus datos!</h3>

                    <form action="" class="contact__form">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Nombres</label>
                            <input type="text" placeholder="Inserta tus Nombres" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Apellidos</label>
                            <input type="text" placeholder="Inserta tus Apellidos" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Fecha de Nacimiento</label>
                            <input type="date" placeholder="Inserta tu edad" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Email</label>
                            <input type="text" placeholder="Inserta tu Email" class="contact__form-input">
                        </div>


                        <button class="button">Registrarme</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    @extends('plantilla.footer')
    @extends('plantilla.flechaarriba')

    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
</body>

</html>
