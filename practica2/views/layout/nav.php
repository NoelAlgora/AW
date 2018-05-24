<div class="top-bar">
	<div class="nav-bar">
		<div class="navi-logo">
		<a href="<?= $helper->url('user','index');?>"><img class="img_logo" src="img/logo.png"></a>
	</div>
	<div class="navi-items-div">
		<ul class="navi-items">
				<li class="navi-menu-item">
			<div class="dropdown">
			  <button class="dropbtn">MENU</button>
			  <div class="dropdown-content">
			    <a href="<?= $helper->url('site','index');?>">INICIO</a>
				<a href="<?= $helper->url('alquiler','rentCarView');?>">ALQUILER</a>
  				<a href="<?= $helper->url('leasing','leasingCarView');?>">RENTING</a>
				<a href="<?= $helper->url('noticia','noticias');?>">NOTICIAS</a>
				<a href="<?= $helper->url('site','contact');?>">CONTACTO</a>
			  </div>
			</div>
		</li>
		<li class="navi-menu-item">
			<div class="dropdown">
			<?php if($helper->isUserLogged()): ?>
		        <button class="dropbtn"> <?php echo $helper->getLoggedUser()['username'] ?>
		        </button>
				  <div class="dropdown-content">
					  <a href="<?= $helper->url('user','perfil');?>">MI PERFIL</a>
		 			  <a href="<?= $helper->url('user','logout');?>">LOG OUT</a>
			  	  </div>
		    <?php else: ?>
		    	<button id="myBtn" class="dropbtn">LOG IN</button>
		    <?php endif; ?>
		    </div>
		</li>
	
		<?php if($helper->isAdmin()): ?>
		<li class="navi-menu-item">
			<div class="dropdown">
			  <button class="dropbtn">ADMIN</button>
			  <div class="dropdown-content">
				<a href="<?= $helper->url('noticia','CrearNoticia');?>">CREA NOTICIAS</a>
				<a href="<?= $helper->url('alquiler','crear_vehiculo');?>">CREAR VEHICULO ALQUILER</a>
				<a href="<?= $helper->url('leasing','crear_vehiculo');?>">CREAR VEHICULO LEASING</a>
			  </div>
			</div>
		</li>
		<?php endif; ?>
	</ul></div>
	</div>
	
	
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
		            <label class="font_log" for="nombre">Contraseña *</label>
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


