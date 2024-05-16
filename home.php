<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>softvigitecol</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/e6d3741188.js" crossorigin="anonymous"></script>
    
</head>

</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                
                <div class="logo">
                <img src="imag/logo-vigitecol.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#Servicios" id="enlace-servicios" class="btn-header">Servicios</a>
                    <a href="#Equipo" id="enlace-equipo" class="btn-header">Equipo</a>
                    <a href="#Software" id="enlace-inicio" class="btn-header">Software</a>
                    <a href="#Trabaja" id="enlace-trabajo" class="btn-header">Trabaja con nosotros</a>
                    <a href="#Contacto" id="enlace-contacto" class="btn-header">Contacto</a>
                    <a href="GRIDS/index_inicioSesion.html" class="btn-header">Iniciar sesion</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Softvigitecol</h1>
            <h2>Software de Vigilancia y seguridad privada</h2>
        </div>
    </header>
    <main>
        <section class="about" id="Servicios">
            <div class="contenedor">
                <h3>Nuestros servicios</h3>
                <p class="after">Siempre mejorando para ti</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>vigilancia humana y canina</h4>
                        <p>Esta modalidad esta establecida para el cuidado de bienes e inmuebles residenciales o industriales.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Circuito cerrado de Television</h4>
                        <p>Elemento 2. Será afectado por justify-content. Architecto debitis quos cumque similique</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/efectos.png" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Elemento 3. Será afectado por justify-content.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="team contenedor" id="equipo">
            <h3>Sobre Nosotros</h3>
            <p class="after">Conoce a nuestro equipo</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="imag/jheison.jpeg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Jheison rojas</h4>
                        <p>Guarda de seguridad Vigitecol y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="imag/Arbey.jpeg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Harvey Bernal</h4>
                        <p>Natalicio de briceño boyaca, líder social y gremial  de la seguridad privada y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="anak jun 2023_fondo blanco.jpg">
                    </div>
                    <div class="texto-team">
                        <h4>Ana Karina Yepes</h4>
                        <p>Profesional Ambiental SIG, Bioinformatica, Analísta de datos, ilustradora científica y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                <!--agrego un nuevo content-card a mi gusto-->
                <div class="content-card">
                    <div class="people">
                        <img src="adan.jpg" alt=""> <!--cambio imagen-->
                    </div>
                    <div class="texto-team">
                        <h4>Adan de Jesus Restrepo Zapata</h4>
                        <p>39 años. De Barranquilla, Atlántico. Técnico en administración de empresas y Aprendiz SENA ADSO 2027091</p>
                    </div>
                </div>
                
            </div>
        </section>
        
        <section class="work contenedor" id="trabajo">
            <h3>Nuestro trabajo</h3>
            <p class="after">Hacemos de algo simple algo extraordinario</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='diseño'>Diseño</li>
                    <li class="filter" data-nombre='programacion'>Programacion</li>
                    <li class="filter" data-nombre='marketing'>Marketing</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/programacion2.jpeg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Programacion</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/frontend-04.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Diseño</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/marketing1.jpeg" alt="">
                    </div>
                    <h4>Marketing</h4>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="iconos">
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter"></i>
            </div>
            <p>Formando a los mejores aprendices</p>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>

</html>
