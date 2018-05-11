@include('client/head')
  <body>
    @include('client/navBar')
    <div class="row container">
      <h3>Carrito de compras</h3>
      <div class="col l4">
        <div class="card blue-grey lighten-3">
          <div class="card-content black-text">
            <span class="card-title">Resumen del pedido</span>
            <div class="row">
              <div class="col s12">
                <span>Enviar a:</span>
              </div>
              <div class="col s12 col-2">
                <p>
                  Carlos Andres Peña
                  <br>
                  Calle 45 #44-45
                  <br>
                  Cartagena, Colombia
                </p>
              </div>
            </div>
            <div class="row clearfix">
              <span class="left">Fecha de entrega: </span>
              <span class="right"><input type="date" id="fecha"></span>
            </div>
            <div class="row clearfix">
              <span class="left">Total del pedido:</span>
              <span class="right">$20.000 Cop</span>
            </div>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn" href="#">Realizar el pedido</a>
          </div>
        </div>
      </div>
      <div class="col l8">
        <div class="row">
          <div class="col s12 m7">
            <div class="card horizontal">
              <div class="card-image">
                <img src="img/pera.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <span class="card-title">Pera</span>
                  <ul>
                    <li><strong>Cantidad: </strong><input id="cantidad" value="3" type="number"></li>
                    <li><h5><strong>$ 9000</strong></h5></li>
                  </ul>
                </div>
                <div class="card-action">
                  <a href="#">Elimimar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m7">
            <div class="card horizontal">
              <div class="card-image">
                <img src="img/pera.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <span class="card-title">Pera</span>
                  <ul>
                    <li><strong>Cantidad: </strong><input id="cantidad" value="3" type="number"></li>
                    <li><h5><strong>$ 9000</strong></h5></li>
                  </ul>
                </div>
                <div class="card-action">
                  <a href="#">Elimimar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m7">
            <div class="card horizontal">
              <div class="card-image">
                <img src="img/pera.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <span class="card-title">Pera</span>
                  <ul>
                    <li><strong>Cantidad: </strong><input id="cantidad" value="3" type="number"></li>
                    <li><h5><strong>$ 9000</strong></h5></li>
                  </ul>
                </div>
                <div class="card-action">
                  <a href="#">Elimimar</a>
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
