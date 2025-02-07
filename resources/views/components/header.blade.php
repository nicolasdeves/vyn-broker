    <nav class="d-flex header">
        <div class="container">
            <div class="row w-100 align-items-center">

                <div class="col-4 text-start">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/site/logo.png') }}" alt="Logo" class="logo" width="180">
                    </a>
                </div>

                <div class="col-4 text-center fs-4">
                    <div class="container d-flex justify-content-center align-items-center gap-5">
                        <a class="icon-link" href="#">
                            Comprar
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>

                        <a class="icon-link" href="#">
                            Alugar
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>

                        <a class="icon-link" href="#">
                            Contato
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>

                        <a class="icon-link" href="#">
                            Anuncie
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>
                    </div>

                </div>

                <div class="col-4 text-end">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/site/instagram.png') }}" alt="Logo" class="logo"
                            width="50">
                    </a>

                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/site/whatsapp.png') }}" alt="Logo" class="logo" width="50">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <style>
        .icon-link {
            font-size: 20px;
            font-weight: bold;
            color: var(--text-color);

        }

        .icon-link:hover {
            opacity: 0.8;
        }

        .header {
            background: linear-gradient(to bottom, rgb(206, 231, 255), rgb(255, 255, 255));
        }
    </style>
