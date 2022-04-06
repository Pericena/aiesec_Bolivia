<footer class="footer">
    <div class="footer__container container">
        <h1 class="footer__title">AIESEC</h1>

        <div class="footer__content grid">
            <div class="footer__data">
                <p class="footer__description">
                    Subscribete para obtener mayor información
                </p>

                <form method="post" action="{{ route('contactos.store') }}" id="contactform">
                    <div class="footer__newsletter">
                        @csrf

                        @error('correo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input class="footer__input" type="text" id="correo" name="correo" placeholder="Correo *"
                            required>
                        <button class="footer__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </form>
            </div>


            <div class="footer__data">
                <h2 class="footer__subtitle">Dirección</h2>
                <p class="footer__information">
                    1234 Av. Eduardo Avaroa. <br>
                    La Paz, Bolivia
                </p>
            </div>

            <div class="footer__data">
                <h2 class="footer__subtitle">Contactanos</h2>
                <p class="footer__information">
                    +591 73665124 <br>
                    aiesec@gmail.com
                </p>
            </div>

            <div class="footer__data">
                <h2 class="footer__subtitle">Horario</h2>
                <p class="footer__information">
                    Lunes - Sabado <br>
                    9AM - 16PM
                </p>
            </div>
        </div>

        <div class="footer__group">
            <ul class="footer__social">
                <a href="#" target="_blank" class="footer__social-link">
                    <i class="bx bxl-facebook"></i>
                </a>
                <a href="#" target="_blank" class="footer__social-link">
                    <i class="bx bxl-instagram"></i>
                </a>
                <a href="#" target="_blank" class="footer__social-link">
                    <i class="bx bxl-twitter"></i>
                </a>
            </ul>

            <span class="footer__copy">
                &#169; AIESEC. 2022 Todos los derechos reservados
            </span>
        </div>
    </div>
</footer>
