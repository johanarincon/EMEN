<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/log.png" type="image/png">
    <title>DisruptivoClub</title>
    <link rel="stylesheet" href="Css/Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const fondoRotativo = document.querySelectorAll('.fondo-rotativo img');
            let index = 0;
    
            // Función para cambiar la imagen activa
            function cambiarFondo() {
                fondoRotativo.forEach((img, i) => {
                    img.classList.toggle('active', i === index);
                });
                index = (index + 1) % fondoRotativo.length;
            }
    
            // Cambio automático cada 5 segundos
            setInterval(cambiarFondo, 5000);
    
            // Evento manual con clic
            fondoRotativo.forEach((img, i) => {
                img.addEventListener('click', () => {
                    index = i;
                    cambiarFondo();
                });
            });
    
            // Iniciar con la primera imagen
            cambiarFondo();
        });
    </script>
    
    <div class="fondo-rotativo">
        <img src="Img/IMG_5081.JPG" alt="Fondo 1">
        <img src="Img/DSC06494.jpg" alt="Fondo 2">
        <img src="Img/IMG_5105.JPG" alt="Fondo 3">
    </div>
    
    <header class="animate__animated animate__fadeInDown">
        <div class="logo">
            <a href="index.php">
                <img src="img/log.png" alt="Logo">
            </a>
        </div>
        <div class="menu">
            <nav class="menu">
                <ul>
                    <li><a href="../Principal/Menu/index.html">Menú</a></li>
                    <li><a href="#contacto">Contáctenos</a></li>
                    <li><a href="../EmenDSRTV/Vista/login.html">Iniciar Sesión</a></li>
                    <li><a href="../EmenDSRTV/Vista/registro.html">Registro</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <section class="bienvenida animate__animated animate__zoomIn">
            <h1>Disruptivo-Club</h1> <br>
            
           
           
                <video controls width="600">
                        <source src="Img/Disruptivo.mp4" type="video/mp4">       
                    </video>
            


            <section id="contacto">
                
                <?php include_once '../EmenDSRTV/Vista/index_usuario.php'; ?>
                
                
                <div class="texto">
                    <h3>Carrera 14A # 83-13 | Primer piso</h3>
                    <h3>314 343 8087</h3>
                    <h3>314 343 8087</h3>
                </div>
                
                <div class="contenido-derecho">
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6435.145279824596!2d-74.05505689969279!3d4.6686667013149865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b5df4acfb09%3A0x5936bb8479b50916!2sEXC%C3%89NTRICA%20Rooftop%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1723226500034!5m2!1ses-419!2sco"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <img src="Img/ig.jpg" alt="QR Código" class="responsive-image">
                </div>
              </section>
        </section>
    </main>

    <footer class="foter">
        <div class="tex">
            <p>&copy; 2024 Emen. Todos los derechos reservados.</p>
            <p>Para solicitar permisos, contacta a: <a href="mailto:emen@gmail.com">emen@gmail.com</a></p>
        </div>
    </footer>
</body>
</html>