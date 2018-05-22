
<div class="filtros"> 
<form method="POST" action="<?= $helper->url('leasing','filter');?>">
	<div>
          <input type="submit" name="aplicar" value="Aplicar">
    </div>
    <br>
	<h4 style="margin-left: 15px;"> Combustible</h4>
	<div class="filtro_combustible">
		<label class="container_filtros">Diesel
			<input type="checkbox" name="combustible[]" value="Diesel">
			<span class="checkmark"></span>
		</label>
		<label class="container_filtros">Gasolina
		  <input type="checkbox" name="combustible[]" value="Gasolina">
		  <span class="checkmark"></span>
		</label>
		<label class="container_filtros">Eléctrico
		  <input type="checkbox" name="combustible[]" value="Electrico">
		  <span class="checkmark"></span>
		</label>
	</div>
	<h4 style="margin-left: 15px;">Color</h4>
	<div class="filtro_color">
		<ul>
			<li class="azul">
				<a href="     " title="azul">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			<li class="rojo">
				<a href="     " title="rojo">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			<li class="verde">
				<a href="     " title="verde">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			<li class="marron">
				<a href="     " title="marron">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			<li class="rosa">
				<a href="     " title="rosa">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			<li class="negro">
				<a href="     " title="negro">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			<li class="gris">
				<a href="     " title="gris">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			<li class="blanco">
				<a href="     " title="blanco">
					<i class="icon-check checked"></i>
					<em></em>
				</a>
			</li>
			
			<label class="amarillo">Amarillo
				<input type="checkbox" name="color[]" value="Amarillo" class="amarillo">
				<span class="checkmark"></span>
			</label>
				
			

		</ul>
	</div>
	<h4 style="margin-left: 15px;">Marca</h4>
	<div class="filtro_marca_contendor">
		<!-- <div class="filtro_marca_buscador">
			<input type="text" id="FilterSearchBrand"/>
			<i class="icon-search"></i>
			<i class="icon-remove-sign"></i>
			<i class="icon-spinner"></i>
		</div> -->
		<div class="filtro_marca">
			<label class="container_filtros">Audi
				<input type="checkbox" name="marca[]" value="Audi" >
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">BMW
				<input type="checkbox" name="marca[]" value="Bmw">
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">Citroen
				<input type="checkbox" name="marca[]" value="Citroen">
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">Ferrari
				<input type="checkbox" name="marca[]" value="Ferrari" >
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">Fiat
				<input type="checkbox" name="marca[]" value="Fiat">
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">Ford
				<input type="checkbox" name="marca[]" value="Ford">
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">Seat
				<input type="checkbox" name="marca[]" value="Seat">
				<span class="checkmark"></span>
			</label>	
			<label class="container_filtros">Suzuki
				<input type="checkbox" name="marca[]" value="Suzuki">
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">Toyota
				<input type="checkbox" name="marca[]" value="Toyota">
				<span class="checkmark"></span>
			</label>
			<label class="container_filtros">Volkswagen
				<input type="checkbox" name="marca[]" value="Volkswagen">
				<span class="checkmark"></span>
			</label>
		</div>
	</div>
	<h4 style="margin-left: 15px;"> Cambio</h4>
	<div class="filtro_cambio">
		<label class="container_filtros">Manual
			<input type="checkbox" name="cambio[]" value="Manual">
			<span class="checkmark"></span>
		</label>
		<label class="container_filtros">Automático
			<input type="checkbox" name="cambio[]" value="Automatico">
			<span class="checkmark"></span>
		</label>
	</div>
	</form>
</div>
