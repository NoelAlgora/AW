<nav>
	<ul>
		<li><a href="<?= $helper->url('user','index');?>">INICIO</a></li>
		<li><a href="<?= $helper->url('alquiler','rentCarView');?>">ALQUILER</a></li>
		<li><a href="<?= $helper->url('leasing','leasingCarView');?>">RENTING</a></li>
		<li><a href="<?= $helper->url('noticia','index');?>">NOTICIAS (provisional)</a></li>
		<li><a href="<?= $helper->url('user','perfil');?>">MI PERFIL</a></li>
		<li><a href="<?= $helper->url('site','contact');?>">CONTACTO</a></li>
		<?php if($helper->isAdmin()): ?>
		<li><a href="<?= $helper->url('noticia','CrearNoticia');?>">CREA_NOTICIAS (provisional)</a></li>
		<li><a href="<?= $helper->url('alquiler','admin');?>">ADMIN ALQUILER (provisional)</a></li>
		<?php endif; ?>
	</ul>
</nav> 
