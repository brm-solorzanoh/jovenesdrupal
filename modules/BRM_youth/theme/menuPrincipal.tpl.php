<?php global $base_url; ?>
<section class="container-fluid container-menu">
      <div class="row">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!--boton responsive-->
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target="#menu" aria-expanded="false" class="navbar-toggle collapsed"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <!--/-boton responsive-->
            <!--Menu-->
            <div id="menu" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
              	<?php
              		foreach ($variables['menu'] as $key => $value) { ?>
              			<li><a href="<?php print $base_url.'/'.$key; ?>"><?php print $value['title']; ?></a></li>
              		<?php
              		}
              	?>
              </ul>
            </div>
            <!--/-Menu-->
          </div>
        </nav>
      </div>
    </section>