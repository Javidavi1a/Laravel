<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Blade</title>
    <link href="{{ url ('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{('styles.css') }}">
    <link href="{{ ('https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css') }}"rel="stylesheet"/>
</head>
<body>
    <nav>
        <div class="nav__logo">
            <a href="#"> <img src="img1/urban_blade-removebg-preview.png" alt="logo"></a>
        </div>
        <ul class="nav__links">
            <li class="link"><a href="#">Inicio</a></li>
            <li class="link"><a href="#">Servicios</a></li>
            <li class="link"><a href="#">Nosotros</a></li>
            <li class="link"><a href="#">Contactanos</a></li>
        </ul>
        <button class="btn">Iniciar Sesion</button>
    </nav>


    <header class="section_container header_container">
        <div class="header__content">
            <span class="bg__blur"></span>
            <span class="bg_blur header_blur"></span>
            <h4>Tu barbería, tu estilo, tu momento</h4>
            <h1><span>URBAN</span>BLADE</h1>
            <p>
                ¡Bienvenidos a Urban Blade!<br>
                Donde el estilo cobra vida.<br>
                Expertos en cortes y afeitados.<br>
                Estilos que definen tu personalidad.<br>
                Agenda tu cita hoy.
            </p>
            <button class="btn">Saber más..</button>
        </div>
        <br>
        <div class="header__image">
            <img src="img1/foto1-removebg-preview.png" alt="header"> <!-- Cambia el src por la ruta de tu imagen -->
        </div>
    </header>
    
<br><br>
<br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img1/corte1.jpg" class="d-block w-100" alt="corte1">
            </div>
            <div class="carousel-item">
                <img src="img1/corte2.jpg" class="d-block w-100" alt="corte2">
            </div>
            <div class="carousel-item">
                <img src="img1/corte4.jpg" class="d-block w-100" alt="corte3">
            </div>
        </div>
    </div>
    <br><br>
    
    <section class="contact">
        <div class="container mb-3 mb-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="secction-header text-center pb-2 pb-lg-5">
                        <h2>Contactanos</h2>
                        <p>
                            En Urban Blade, nos encantaría saber de ti. Si tienes preguntas <br>
                            sobre nuestros servicios, deseas agendar una cita o simplemente <br>
                            quieres saber más sobre las últimas tendencias en cortes de cabello, <br>
                            no dudes en ponerte en contacto con nosotros.
                        </p>
                    </div>
                </div>
            <br>

            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-12 col-lg-6 pt-4 pb-4">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Correo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Contraseña">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="section_container footer_container">
        <span class="bg_blur"></span>
        <span class="bg_blur footer_blur"></span>
        <div class="footer__col">
            <div class="footer__logo"><img src="img1/urban_blade-removebg-preview.png" alt="logo"></div>
            <p>
                Nuestro equipo de expertos está aquí para ayudarte a encontrar el estilo perfecto que refleje tu personalidad. 
                ¡Escríbenos o visítanos en nuestras redes sociales y déjanos cuidar de tu look!
            </p>
            <div class="footer__socials">
                <a href="#"><i class="ri-facebook-circle-line"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-x-line"></i></a>
            </div>    
        </div>
        <div class="footer__col">
            <h4>Company</h4>
            <a href="#">Negocios</a><br>
            <a href="#">Blog</a><br>
            <a href="#">Galeria</a>
        </div>
        <div class="footer__col">
            <h4>Politicas</h4>
            <a href="#">Terminos y condiciones</a><br>
            <a href="#">Politica y privacidad</a>
        </div>
    </footer>
    <div class="footer__bar">
        © 2024 Urban Blade. Todos los derechos reservados.
    </div>
</body>
</html>