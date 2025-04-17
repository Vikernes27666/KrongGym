<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KrongGym</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./logo.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../backend/css/inicio.css">
  <link rel="stylesheet" href="../backend/css/wtsp.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=+51987654321&text=Hola,%20me%20gustaria%20Obtener%20m%C3%A1s%20informaci%C3%B3n" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float "></i>
  </a>
    

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo">
            <img src="../backend/img/logo_gym.png" alt="KrongGym Logo">
        </a>
      </h1>
    
      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <img src="../backend/img/logo_gym.png" alt="KrongGym Logo">

          <button class="nav-close-btn" aria-label="Clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>
              <span>INICIO</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>
              <span>NOSOTROS</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#Promociones" class="navbar-link" data-nav-link>
              <span>PROMOCIONES</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#feature" class="navbar-link" data-nav-link>
              <span>SERVICIOS</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#gallery" class="navbar-link" data-nav-link>
              <span>GALERIA</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>
              <span>CONTÁCTANOS</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

        <li class="navbar-item">
        <a href="login.php" class="navbar-link" data-nav-link>
            <span>INICIAR SESIÓN</span>

            <ion-icon name="log-in-outline"></ion-icon>
        </a>
</li>

        </ul>

      </nav>

      <div class="header-contact">

        <div>
          <p class="contact-label">Perú</p>
        </div>

        <div class="contact-icon">
          <ion-icon name="call-outline"></ion-icon>
        </div>

      </div>

      <button class="nav-open-btn" aria-label="Open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home" id="home"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../backend/img/gimnasio.jpg');">
        <div class="container">

          <div class="hero-content">

            <h2 class="h1 hero-title">
              <span class="span" id="texto1">Tú también</span>
              <span class="span" id="texto2" style="color: white;">puedes.</span>
            </h2>
          

            <p class="hero-text">
            Impulsamos tu bienestar con soluciones integrales de entrenamiento. Nos esforzamos por ofrecer un servicio personalizado, efectivo y motivador para ayudarte a alcanzar tus metas.
            </p>

            <a href="#" class="btn-outline">VER SERVICOS</a>

            <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwiYraz_td6MAxX2ILkGHT2DLsQQFnoECBMQAQ&url=https%3A%2F%2Fwww.realfitness.cl%2Fadmin%2Fimagenes%2Fdescargas%2FEnciclopedia%2520de%2520ejercicios%2520de%2520musculacion.pdf&usg=AOvVaw0nxZI2Sy9Dtr5xp9Jm9YqT&opi=89978449" class="btn-outline-brochure">VER BROCHURE</a>


          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner img-holder" style="--width: 400; --height: 720;">
            <img src="../backend/img/nosotros.jpg" width="400" height="720" loading="lazy" alt=""
              class="img-cover">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">¿POR QUÉ ELEGIRNOS?</p>

            <h2 class="h2 section-title">Tu Compañero de Entrenamiento</h2>

            <p class="section-text">
                Nuestro compromiso es acompañarte en cada repetición, en cada meta, con dedicación y energía.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                Tu progreso es nuestra prioridad, cuidamos cada detalle para que entrenes seguro, motivado y con resultados visibles.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                Conectamos personas con su mejor versión, impulsando un estilo de vida saludable y activo.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                    En cada sesión, te acompañamos con la confianza y profesionalismo que mereces.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                    Nuestra pasión por el fitness se refleja en cada entrenamiento, donde la superación es nuestro compromiso.
                </p>
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                Más que un gimnasio, somos una comunidad que te inspira a dar lo mejor de ti cada día.
                </p>
                </p>
              </li>

            </ul>

            <a href="#" class="btn">Leer más</a>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="Promociones" aria-label="service">
        <div class="container">

          <p class="section-subtitle">Promociones Exclusivas</p>


          <p class="section-text">
          En nuestro gimnasio, te motivamos desde el primer día con promociones diseñadas para que empieces tu transformación sin excusas. Contamos con planes accesibles, descuentos especiales y beneficios únicos para nuevos miembros, estudiantes y más. ¡Porque entrenar también puede ser económico y motivador!
          </p>

          <ul class="service-list grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="100" height="100" loading="lazy" alt="Truck">
                </div>

                <h3 class="h3 card-title">
                  <span class="span">01</span> Sin Matrícula
                </h3>

                <p class="card-text">
                Inscríbete este mes y olvídate del pago de matrícula. ¡Solo enfócate en entrenar y lograr tus metas!
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">VER DETALLES</span>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="100" height="100" loading="lazy" alt="Ship">
                </div>

                <h3 class="h3 card-title">
                  <span class="span">02</span> 2x1 en tu Primer Mes
                </h3>

                <p class="card-text">
                Entrena con un amigo y paguen solo uno en su primer mes. ¡Porque juntos es mejor!
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">VER DETALLES</span>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="100" height="100" loading="lazy" alt="Airplane">
                </div>

                <h3 class="h3 card-title">
                  <span class="span">03</span> Descuento Estudiantil
                </h3>

                <p class="card-text">
                Presenta tu carnet universitario o escolar y recibe tarifas especiales durante todo el año.
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">VER DETALLES</span>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="100" height="100" loading="lazy" alt="Train">
                </div>

                <h3 class="h3 card-title">
                  <span class="span">04</span> Happy Hour Fit
                </h3>

                <p class="card-text">
                Entrena en horarios seleccionados y obtén un 20% de descuento en tu mensualidad. Ideal para quienes aman entrenar en la mañana o tarde.
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">VER DETALLES</span>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="100" height="100" loading="lazy" alt="Trolley">
                </div>

                <h3 class="h3 card-title">
                  <span class="span">05</span> Invita y Gana
                </h3>

                <p class="card-text">
                Por cada amigo que se inscriba, obtén un mes gratis o descuentos acumulables. ¡Trae tu mancha y entrena sin límites!
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">VER DETALLES</span>
                </a>

              </div>
            </li>

            <li>

            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-label="feature" id="feature">
        <div class="container">

          <div class="title-wrapper">

            <div>
              <p class="section-subtitle">SERVICIOS</p>

              <h2 class="h2 section-title">Conectamos tus metas con soluciones fitness reales.</h2>

              <p class="section-text">
              Nos esforzamos por brindarte un servicio personalizado, seguro y motivador en cada entrenamiento. Tu bienestar está en buenas manos con nosotros, gracias a un equipo comprometido con tu progreso.
              </p>
            </div>

            <a href="#" class="btn">MÁS SERVICIOS</a>

          </div>

          <ul class="feature-list grid-list">

            <li>
              <div class="feature-card" style="--card-number: '01'">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="72" height="91" alt="">
                </div>

                <h3 class="h3 card-title">Entrenamiento Personalizado</h3>

                <p class="card-text">
                Diseñamos rutinas adaptadas a tus objetivos específicos: bajar de peso, tonificar, ganar masa muscular o mejorar tu salud. Nuestros entrenadores certificados te guiarán paso a paso para que avances con seguridad y eficiencia.
                </p>

                <a href="#" class="card-btn" aria-label="Read more">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="feature-card" style="--card-number: '02'">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="94" height="94" alt="">
                </div>

                <h3 class="h3 card-title">Clases Grupales</h3>

                <p class="card-text">
                Ofrecemos una variedad de clases dirigidas como funcional, spinning, zumba, yoga, HIIT y más. Disfruta de un ambiente dinámico y motivador que te impulsa a dar lo mejor de ti junto a otros.
                </p>

                <a href="#" class="card-btn" aria-label="Read more">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="feature-card" style="--card-number: '03'">

                <div class="card-icon">
                  <img src="../backend/img/promociones.png" width="93" height="93" alt="">
                </div>

                <h3 class="h3 card-title">Evaluación Física y Seguimiento</h3>

                <p class="card-text">
                Medimos tu estado físico inicial y realizamos seguimientos periódicos para ajustar tu entrenamiento. Esto te permite ver tu progreso real y mantenerte enfocado en tus metas.
                </p>

                <a href="#" class="card-btn" aria-label="Read more">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>
            

          </ul>

        </div>
      </section>


      <!-- 
        - #GALLERY
      -->
      <section class="wrap" id="gallery">
        <div class="section-subtitle">GALERÍA</div>
        <h2 class="h2 section-title">Explora nuestra galería de imágenes.</h2>
        <div class="gallery-container">
            <div class="galeria">
                <div class="imagen elemento1"><img src="../backend/img/gym1.webp" alt="Imagen 1"></div>
                <div class="imagen elemento2"><img src="../backend/img/gym2.jpg" alt="Imagen 2"></div>
                <div class="imagen elemento3"><img src="../backend/img/gym3.jpg" alt="Imagen 3"></div>
                <div class="imagen elemento3"><img src="../backend/img/gym4.jpg" alt="Imagen 3"></div>
            </div>
        </div>
        <a href="#" class="btn">VER MÁS</a>
    </section>
    


 <!-- 
 - #questions
-->
    
    <section class="questions container">
      <h2 class="subtitle">Preguntas frecuentes</h2>
      <p class="questions__paragraph">A continuación, encontrarás respuestas a algunas de las preguntas más frecuentes que nuestros clientes suelen hacer</p>
    
      <section class="questions__container">
        <article class="questions__padding">
          <div class="questions__answer">
            <h3 class="questions__title">¿Qué servicios específicos ofrece el gimnasio?
              <span class="questions__arrow">
                <img src="../backend/img/arrow.svg" class="questions__img">
              </span>
            </h3>
            <div class="questions__content">
              <p class="questions__show">Ofrecemos entrenamiento personalizado, clases grupales, evaluación física, asesoría nutricional, rutinas para principiantes y avanzados, acceso a zonas de cardio, pesas y funcional, además de promociones exclusivas y acompañamiento constante por parte de nuestros entrenadores.</p>
            </div>
          </div>
        </article>
    
        <article class="questions__padding">
          <div class="questions__answer">
            <h3 class="questions__title">¿Cómo aseguramos el progreso y el bienestar de nuestros miembros?
              <span class="questions__arrow">
                <img src="../backend/img/arrow.svg" class="questions__img">
              </span>
            </h3>
            <div class="questions__content">
              <p class="questions__show">Realizamos evaluaciones físicas periódicas, seguimiento de metas, entrenamientos guiados por profesionales certificados y planes ajustados a tus necesidades. Además, brindamos un ambiente seguro, limpio y motivador para que entrenes con total confianza.</p>
            </div>
          </div>
        </article>
    
        <article class="questions__padding">
          <div class="questions__answer">
            <h3 class="questions__title">¿Qué beneficios obtengo al ser parte del gimnasio?
              <span class="questions__arrow">
                <img src="../backend/img/arrow.svg" class="questions__img">
              </span>
            </h3>
            <div class="questions__content">
              <p class="questions__show">Al unirte, accedes a entrenamientos personalizados, clases grupales ilimitadas, evaluaciones físicas, seguimiento de tu progreso, asesoría nutricional y un ambiente motivador que te impulsa a alcanzar tus metas. ¡Además, siempre estamos lanzando promociones exclusivas para nuestros miembros!</p>
            </div>
          </div>
        </article>
      </section>
    
    </section>


    <section class="knowledge">
      <div class="knowledge__container container">
          <div class="knowledge__texts">
              <div class="knowledge__contents">
                  <h2 class="subtitle">Ubicación de nuestro Gym</h2>
                  <p class="knowledge__paragraph"></p>
                  <!-- Aquí he agregado la id 'map' -->
              </div>
              <iframe class="knowledge__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.8887682471204!2d-77.10381032585094!3d-11.843059138139553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d6a01ee030bb%3A0x514c6841ec5f00a9!2sOvalo%20de%20Zapallal!5e0!3m2!1ses-419!2spe!4v1687981986025!5m2!1ses-419!2spe" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
  </section>
      
      
      
      





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter">
        <div class="container">
      
          <figure class="newsletter-banner img-holder">
            <img src="../backend/img/contactanos.png" width="303" height="381" alt="banner del boletín"
              class="w-100">
          </figure>
      
          <div class="newsletter-content">
      
            <h2 class="h2 section-title">Contáctanos para una mejor experiencia</h2>
      
            <form action="" class="newsletter-form">
              <input type="email" name="email_address" placeholder="Ingresa tu correo electrónico" aria-label="correo electrónico"
                class="email-field">
      
              <button type="submit" class="newsletter-btn">Enviar mensaje</button>
            </form>
      
          </div>
      
        </div>
        
      </section>




  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">
      <div class="footer-top section">
        <div class="footer-brand">
          <img src="../backend/img/logo_gym.png" alt="SLD Logo">
          <p class="footer-text">
          El entrenamiento es la base de toda transformación. Constancia y esfuerzo marcan la diferencia.
          </p>
          <ul class="social-list">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Enlaces Rápidos</p>
          </li>
          <li>
            <a href="#" class="footer-link">INICIO</a>
          </li>
          <li>
            <a href="#" class="footer-link">NOSOTROS</a>
          </li>
          <li>
            <a href="#" class="footer-link">PROMOCIONES</a>
          </li>
          <li>
            <a href="#" class="footer-link">SERVICIOS</a>
          </li>
          <li>
            <a href="#" class="footer-link">GALERIA</a>
          </li>
          <li>
            <a href="#" class="footer-link">CONTACTANOS</a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Servicios</p>
          </li>
          <li>
            <a href="#" class="footer-link">Entrenamiento Personalizado</a>
          </li>
          <li>
            <a href="#" class="footer-link">Clases Grupales</a>
          </li>
          <li>
            <a href="#" class="footer-link">Evaluación Física y Seguimiento</a>
          </li>

        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Comunidad</p>
          </li>
          <li>
            <a href="#" class="footer-link">Entrenadores Certificados</a>
          </li>
          <li>
            <a href="#" class="footer-link">Historias de Transformación</a>
          </li>
          <li>
            <a href="#" class="footer-link">Mi Progreso</a>
          </li>
          <li>
            <a href="#" class="footer-link">Política de Privacidad</a>
          </li>
          <li>
            <a href="#" class="footer-link">Términos y Condiciones</a>
          </li>
        </ul>
      </div>
      

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2024 KrongGym. All Rights Reserved by <a href="https://github.com/Vikernes27666/KrongGym" class="copyright-link">Anonimo</a>
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="../backend/js/inicio.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>