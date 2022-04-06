    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="{{ asset('assets/img/Blue-Logo.png') }}" alt="" class="nav__logo-img">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ url('/') }}" class="nav__link ">Inicio</a>
                    </li>

                    <li class="nav__item">
                        <p href="#" class="nav__link">Jóvenes <i class="bx bx-chevron-down nav__arrow"></i></p>
                        <ul class="children">
                            <li class="sub__child">
                                <a href="{{ asset('form_talentos') }}" class="nav2__link">Talento Global</a>
                            </li>
                            <li class="sub__child">
                                <a href="{{ asset('form_voluntariados') }}" class="nav2__link">Voluntariado
                                    Global</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <p href="#" class="nav__link">Sé nuestro aliado <i
                                class="bx bx-chevron-down nav__arrow"></i></p>
                        <ul class="children">
                            <li class="sub__child">
                                <a href="{{ asset('form_ong') }}" class="nav2__link">Proyectos para ONGs</a>
                            </li>
                            <li class="sub__child">
                                <a href="{{ asset('form_empresas') }}" class="nav2__link">Talento Global -
                                    Empresas</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <a href="{{ asset('form_hospedajes') }}" class="nav__link">Hospeda</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
        <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </header>
