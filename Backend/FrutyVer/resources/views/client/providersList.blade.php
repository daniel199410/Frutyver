@include('client/head')
  <body>
    @include('client/navBar')
    <div class="row container">
      <div class="col l3 s12">
        <ul class="collapsible" data-collapsible = "accordion">
  		    <li class="active">
  		      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Cartagena</div>
  		      <div class="collapsible-body">
  						<ul>
  							<li><label><input class="with-gap" type="radio" name="group-1" checked /><span>Central de abasto mayorista</span></label></li>
                <li><label><input class="with-gap" type="radio" name="group-1" /><span>Central de abasto minorista</span></label></li>
  						</ul>
  					</div>
  		    </li>
  		    <li>
  		      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Barranquilla</div>
  		      <div class="collapsible-body">
  						<ul>
  							<li><label><input class="with-gap" type="radio" name="group-1" /><span>Mayorista</span></label></li>
  							<li><label><input class="with-gap" type="radio" name="group-1" /><span>Minorista</span></label></li>
  						</ul>
  					</div>
  		    </li>
    		</ul>
      </div>
      <div class="col l9">
        <div class="row">
          <div class="col l12">
            <div class="row barra">
              <div class="col l4 s8">
                <input id="search" type="text" placeholder="Buscar local" value="">
              </div>
              <div class="col">
                <a href="#"><i class="material-icons">search</i></a>
              </div>
            </div>
          </div>
          @foreach($providers as $provider)      
            <div class="col l4 s6 m6">
              <div class="card">
                <div class="card-image">
                  <img src="img/local.jpg">
                </div>
                <div class="card-action">
                  <a class="waves-effect waves-light btn" href="productList">Local {{ $provider->id }}</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/Sidenav.js"></script>
  	<script type="text/javascript" src="js/Collapsible.js"></script>
    <footer class="page-footer green">
        <div class="container">
            <p class="center-align">&copy; 2018 FrutyVer</p>
        </div>
    </footer>
    @include('client/scripts')
  </body>
</html>
