@include('client/head')
<body>
	@include('client/navBar')
	<div class="row lista-productos">
		<div class="col l2 s12">
			<ul class="collapsible" data-collapsible = "accordion">
		    <li>
		      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Frutas</div>
		      <div class="collapsible-body">
						<ul>
							<li><label><input type="checkbox" /><span>Manzana</span></label></li>
							<li><label><input type="checkbox" /><span>Pera</span></label></li>
							<li><label><input type="checkbox" /><span>Fresas</span></label></li>
							<li><label><input type="checkbox" /><span>Banano</span></label></li>
							<li><label><input type="checkbox" /><span>Mango</span></label></li>
							<li><label><input type="checkbox" /><span>Mandarina</span></label></li>
							<li><label><input type="checkbox" /><span>Guayaba</span></label></li>
							<li><label><input type="checkbox" /><span>Piña</span></label></li>
							<li><label><input type="checkbox" /><span>Papaya</span></label></li>
						</ul>
					</div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Verduras y hortalizas</div>
		      <div class="collapsible-body">
						<ul>
							<li><label><input type="checkbox" /><span>Ajo</span></label></li>
							<li><label><input type="checkbox" /><span>Apio</span></label></li>
							<li><label><input type="checkbox" /><span>Cebolla</span></label></li>
							<li><label><input type="checkbox" /><span>Espinaca</span></label></li>
							<li><label><input type="checkbox" /><span>Lechuga</span></label></li>
							<li><label><input type="checkbox" /><span>Repollo</span></label></li>
							<li><label><input type="checkbox" /><span>Remolacha</span></label></li>
							<li><label><input type="checkbox" /><span>Tomate</span></label></li>
							<li><label><input type="checkbox" /><span>Zanahoria</span></label></li>
						</ul>
					</div>
		    </li>
				<li>
		      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Otros</div>
		      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
  		</ul>
		</div>
		<div class="col l10">
			<div class="row">
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/naranja.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Naranja</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/platano.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Platano</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/pera.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Pera</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/naranja.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Naranja</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/naranja.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Naranja</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/naranja.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Naranja</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/naranja.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Naranja</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s6">
					<div class="card">
						<div class="card-image">
							<img src="img/naranja.jpg">
							<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Naranja</span>
							<p>$2100 el kilo</p>
							<div class="row">
								<div class="col l4 s7">
									<span>Cantidad: </span>
								</div>
								<div class="col s5">
									<input id="cantidad" type="number">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="page-footer green">
			<div class="container">
					<p class="center-align">&copy; 2018 FrutyVer</p>
			</div>
	</footer>
	@include('client/scripts')
</body>
</html>
