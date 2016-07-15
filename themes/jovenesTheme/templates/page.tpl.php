<header>
    <section class="container-fluid">
      <!--Form login-->
      <div class="login-wrapper">
        <div class="row">
          <div class="col-lg-12">
            
          </div>
        </div>
      </div>
      <!--/-Form login-->
      <div class="row">
        <!--Logo-->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <?php if ($site_logo): ?>
            <h1 class="logo">
              <?php print $site_logo; ?>
            </h1>
          <?php endif; ?>
        </div>
        <div class="col-lg-2 col-md-2 hidden-xs">       
          <p class="pais">Colombia</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
          
        </div>
        <!--/-Logo-->
      </div>
    </section>
    <?php print render($page['menu_bar']); ?>
  </header>
  <!--Slider PPAl-->
  <?php print render($page['leaderboard']); ?>
  <!-- !Main Content -->
            <?php if ($content = render($page['content'])): ?>
              <div id="content" class="region">
                <?php print $content; ?>
              </div>
            <?php endif; ?>
  <!--Footer-->
  <footer class="container-fluid">
    <div class="peel hidden-xs"></div>
    <div class="row hidden-sm hidden-xs">
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Acerca de la Iniciativa por los Jóvenes</h3>
        <ul>
          <li>Manifiesto</li>
          <li>Infografía de los ejes</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Empléate</h3>
        <ul>
          <li>Historias colaboradores Nestlé&reg;</li>
          <li>Vacantes Nestlé&reg; (Taleo)</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Entrénate</h3>
        <ul>
          <li>Convocatorias Becarios</li>
          <li>Testimonios</li>
          <li>Yocuta</li>
          <li>SENA</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Oriéntate</h3>
        <ul>
          <li>Voluntariado</li>
          <li>Descripción de Cursos E-Learning</li>
          <li>Simposios</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Más Oportunidades</h3>
        <ul>
          <li>Vacantes Cadena de Valor</li>
          <li>Testimonios</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Cursos E-Learning</h3>
        <ul>
          <li>Proyecto de vida y orientación vocacional</li>
          <li>Búsqueda laboral y hojas de vida ganadoras</li>
          <li>Entrevistas de trabajo exitosas</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
        <p class="text-center">
          <a href="#">Políticas de privacidad </a>  |  <a href="#"> Ver información corporativa</a>   |  <a href="#"> Política de tratamiento de datos personales</a>
          
        </p>
        <p class="text-center">
          NESTLÉ&reg; Colombia 2016 - Todos los derechos reservados
          
          
        </p>
      </div>
    </div>
  </footer>
  <!--/-Footer-->
  <script>
    
    if ( $(window).width() <= 780 ){
    
      $('.slider-destacado').bxSlider({
        minSlides: 1,
        slideWidth: 338,
        slideMargin: 10,
        moveSlides: 1,
        pager:false,
        mode: 'vertical',
        nextText: '',
          prevText: ''
      });
    
      }else{
      $('.slider-destacado').bxSlider({
        minSlides: 3,
        maxSlides: 3,
        slideWidth: 338,
        slideMargin: 10,
        moveSlides: 1,
        pager:false,
        nextText: '',
        prevText: ''
      });
      };
  </script>