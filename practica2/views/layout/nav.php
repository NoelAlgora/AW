<nav>
   <ul>
	  <li><a href="<?= $helper->url('user','index');?>">INICIO</a></li>
	  <li><a href="<?= $helper->url('site','rentCarView');?>">ALQUILER</a></li>
	  <li><a href="<?= $helper->url('site','leasingCarView');?>">RENTING</a></li>
		<li><a href="<?= $helper->url('noticia','noticias');?>">NOTICIAS (provisional)</a></li>
		<li><a href="<?= $helper->url('noticia','CrearNoticia');?>">CREA_NOTICIAS (provisional)</a></li>
	  <li><a href="<?= $helper->url('user','perfil');?>">MI PERFIL</a></li>
	  <li><a href="<?= $helper->url('user','contacto');?>">CONTACTO</a></li>
	</ul>
</nav>
