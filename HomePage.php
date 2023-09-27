<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/Styles.css">
    <link rel="stylesheet" href="assets/css/StlsVarios.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    src = "js/functions.js"
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-qRkZ0y1sdo/VrXlTv5J0tN5eCO/1Eao/V/5qkj6rJ6gh9/M5vLcRJ3bdvLQcI23iUvj7hL4V6JsdvV7W+c55JQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-t42oDrKONJHtddnbgOs4UUI8x/mQ4aCUfeoBIBzxKElVi0qmx0i1WPhBcp4tU8HfC4I+fzuuWE5fH+pi0UUrPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Referencia al archivo JavaScript de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"
        integrity="sha512-N1V4aEwOJxkRnlvDv9A6HivuF1txd5mUhHAA4ojz79I5Oh+dpvC7JrtbNVrZdYiZ58p41dKxlLxEFO3KTwX+sg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    


<div class="card crdbody">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Electronica GT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="HomePage.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Quejas.php">Pantalla de queja</a></li>
                                <li><a class="dropdown-item" href="Crud_comercios.php">Comercios</a></li>
                                <li><a class="dropdown-item" href="Crud_Propietarios.php">Propietarios</a></li>
                                <li><a class="dropdown-item" href="QuejasLista.php">Lista de quejas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="php/cerrar_sesion.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="card crdbody">
        <!--aqui inicia el card-->
        <div class="card-body">
            <!-- FORMULARIO DE PRUEBAS   --->
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="assets/images/Potentiometer.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/images/resistencias.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/LEDs.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--aqui termina el card-->
    </div> 


    <input id="condi" value="CreaProd" readonly hidden>
    <div class="card crdbody">
        <!--aqui inicia el card-->
        <div class="card-header">
            <h4>Quienes Somos</h4>
        </div>
        <div class="card-body">
            <!-- FORMULARIO DE PRUEBAS   --->

            <p>Bienvenido a Electronica GT, tu destino confiable para encontrar los componentes 
                electrónicos de más alta calidad y última tecnología. Nos enorgullece ser tu socio en el 
                mundo de la electrónica y proporcionarte soluciones que impulsan la innovación y el progreso.</p>
            
        </div><!-- ROW FIN  -->
    </div>
    <!--aqui termina el card-->

    <div class="card crdbody">
        <div class="card-body">
            <h2>Nuestra Mision</h2>
            <p>En Electronica GT, nos dedicamos a facilitar el acceso a los componentes electrónicos esenciales para tu proyecto.
                Nuestra misión es:</p>
            <ul>
                <li>Brindar productos de primera calidad y certificados.</li>
                <li>Garantizar la satisfacción total de nuestros clientes a través de un excelente servicio al cliente.</li>
                <li>Fomentar la innovación y el avance tecnológico al proporcionar acceso rápido y fácil a los componentes necesarios.</li>
                <li>Contribuir al crecimiento y éxito de nuestros clientes y partners mediante colaboraciones duraderas y beneficiosas.</li>
            

            </ul>
            <h2>Nuestra Vision</h2>
            <p>Buscamos ser el referente en la industria de componentes electrónicos, reconocidos por nuestra integridad, 
                confiabilidad y compromiso con la excelencia. Aspiramos a:</p>
            <ul>
                <li>Ampliar nuestra gama de productos y servicios para satisfacer las necesidades cambiantes del mercado.</li>
                <li>Establecer relaciones sólidas y mutuamente beneficiosas con nuestros clientes y socios.</li>
                <li>Ser líderes en innovación y tecnología, anticipando y adaptándonos a las tendencias del mercado.</li>
            </ul>

            </ul>
            <h2>Nuestros Valores</h2>
            <p>BEn cada interacción, nos regimos por nuestros valores fundamentales:</p>
            <ul>
                <li>Integridad: Actuamos con honestidad y transparencia en todo lo que hacemos.</li>
                <li>Calidad: Nos esforzamos por ofrecer productos y servicios de alta calidad que cumplan o superen las expectativas.</li>
                <li>Compromiso: Estamos dedicados a la satisfacción total del cliente y a cumplir con nuestras promesas.</li>
                <li>Innovación: Fomentamos la creatividad y la búsqueda constante de nuevas soluciones y tecnologías.</li>
                <li>Colaboración: Trabajamos en equipo y en colaboración para lograr resultados óptimos para nuestros clientes y nuestra empresa.</li>
            </ul>
            <p>Unirte a la familia de [Nombre de tu Empresa] significa unirte a una comunidad apasionada por la electrónica y el progreso. 
                Estamos aquí para ayudarte a materializar tus ideas y proyectos. ¡Juntos, vamos a transformar el mundo a través de la 
                electrónica!</p>
        </div>
    </div>


    
    <!--aqui inicia el card-->
    

   
    <!--aqui termina el card-->

</body>

</html>