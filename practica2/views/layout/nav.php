<div class="top-bar">
	<ul class="navi-items">
		<li class="navi-logo-item">
			<a href="<?= $helper->url('user','index');?>"><img src="img/logo.png"></a>
		</li>
		<li class="navi-login-item">
			<?php
		      if ( $helper->isUserLogged() ){
		        echo "<div class='dropdown'>
						  <button class='dropbtn'>".$helper->getLoggedUser()['username']."</button>
						  <div class='dropdown-content'>
							  <a href='".$helper->url('user','perfil')."'>MI PERFIL</a>
				 			  <a href='".$helper->url('user','logout')."'>LOG OUT</a>
					  	  </div>
					  </div>";
		      }
		      else { echo "<div class='dropdown'>
		      				<a id='myBtn' class='dropbtn'>LOG IN</a>
		      			   </div>";
		      		}
		    ?>
		</li>
		<li class="navi-menu-item">
			<div class="dropdown">
			  <button class="dropbtn">MENU</button>
			  <div class="dropdown-content">
			    <a href="<?= $helper->url('user','index');?>">INICIO</a>
				<a href="<?= $helper->url('alquiler','rentCarView');?>">ALQUILER</a>
  				<a href="<?= $helper->url('leasing','leasingCarView');?>">RENTING</a>
				<a href="<?= $helper->url('noticia','noticias');?>">NOTICIAS (provisional)</a>
				<a href="<?= $helper->url('noticia','CrearNoticia');?>">CREA_NOTICIAS (provisional)</a>
				<a href="<?= $helper->url('site','contact');?>">CONTACTO</a>
			  </div>
			</div>
		</li>
	</ul>
</div>
<?php if(!$helper->isUserLogged()): ?>
	<div id="myModal" class="modal">
		<div class="modal-content">
			  <span class="close">&times;</span>
		      <p class="font_log"> Log in </p>
		      <form class="login_box" method="post" action="<?= $helper->url('user','login');?>" method="post">
		        <div class="row">
		          <div class="col-25">
		            <label class="font_log" for="nombre">Nombre *</label>
		          </div>
		          <div class="col-75">
		            <input type="text" id="nombre" name="username" placeholder="Nombre de usuario" required>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-25">
		            <label class="font_log" for="nombre">Nombre *</label>
		          </div>
		          <div class="col-75">
		            <input type="text" id="nombre" name="password" placeholder="Contraseña" required>
		          </div>
		        </div>
		        <div class="row">
		          <input type="submit" value="Entrar">
		        </div>
		        <p class="font_log">Aun no te has registrado?<a href="<?= $helper->url('user','register');?>"> Registrarme!</a></p>
		      </form>
		</div>
	</div>
	<script src="./js/modal-login.js"></script>
<?php endif; ?>


