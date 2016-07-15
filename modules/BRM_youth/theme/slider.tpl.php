<section class="container-fluid u-no-border slider-ppal">
    <div id="carrusel-ppal" data-ride="carousel" class="carousel slide">
      <!--wrapper -->
      <div role="listbox" class="carousel-inner">
        <!--item-->
        <?php
        	$cont = 0;
         	foreach ($variables['data'] as $key => $value) { ?>         
		        <?php if($cont == 0){?>
		        	<div class="item active">
		        <?php }else{ ?>
		        	<div class="item">
		        <?php } ?>
		          <div class="carousel-caption">
		            <h3><?php print $value->title; ?></h3>
		            <p>
		              <?php print $value->body['und'][0]['summary']; ?></p>
		            <div class="button-container amarillo"><a href="#" role="button" class="btn btn-slider azul-oscuro">Empieza Ya</a><a href="#">Conoce más cursos</a></div>
		          </div>
		        </div>
        <?php
        	$cont++;}
        ?>
      </div>
      <!--Controls--><a href="#carrusel-ppal" role="button" data-slide="prev" class="left carousel-control"><span aria-hidden="true" class="icon icon-circle-left"></span><span class="sr-only">Prev</span></a><a href="#carrusel-ppal" role="button" data-slide="next" class="right carousel-control"><span aria-hidden="true" class="icon icon-circle-right"></span><span class="sr-only">Next</span></a>
    </div>
  </section>
  <!--/-Slider PPAl-->