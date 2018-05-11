@include('client/head')
  <body>
    @include('client/navBar')
    <div class="container">
      <h3>Pedidos</h3>
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header">
            <i class="material-icons">filter_drama</i>
            <span>
              <strong>Pedido: </strong>12345,
              <strong>Estado: </strong>Pendiente,
              <strong>Local: </strong>201
            </span>
          </div>
          <div class="collapsible-body">
            <table class="striped">
              <thead>
                <tr>
                  <th>Articulo</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Manzana</th>
                  <th>3</th>
                  <th>$3.000</th>
                </tr>
                <tr>
                  <th>Platano</th>
                  <th>5</th>
                  <th>$2.500</th>
                </tr>
                <tr>
                  <th></th>
                  <th>Total</th>
                  <th>$5.500</th>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">filter_drama</i>
            <span>
              <strong>Pedido: </strong>12355,
              <strong>Estado: </strong>Pendiente,
              <strong>Local: </strong>202
            </span>
          </div>
          <div class="collapsible-body">
            <table class="striped">
              <thead>
                <tr>
                  <th>Articulo</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Mandarina</th>
                  <th>3kg</th>
                  <th>$5.000</th>
                </tr>
                <tr>
                  <th>Banano</th>
                  <th>20</th>
                  <th>$7.000</th>
                </tr>
                <tr>
                  <th>Papaya</th>
                  <th>5</th>
                  <th>$10.000</th>
                </tr>
                <tr>
                  <th></th>
                  <th>Total</th>
                  <th>$13.000</th>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">filter_drama</i>
            <span>
              <strong>Pedido: </strong>105456,
              <strong>Estado: </strong>Finalizado,
              <strong>Local: </strong>201
            </span>
          </div>
          <div class="collapsible-body">
            <table class="striped">
              <thead>
                <tr>
                  <th>Articulo</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Mandarina</th>
                  <th>3kg</th>
                  <th>$5.000</th>
                </tr>
                <tr>
                  <th>Banano</th>
                  <th>20</th>
                  <th>$7.000</th>
                </tr>
                <tr>
                  <th>Papaya</th>
                  <th>5</th>
                  <th>$10.000</th>
                </tr>
                <tr>
                  <th></th>
                  <th>Total</th>
                  <th>$13.000</th>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">filter_drama</i>
            <span>
              <strong>Pedido: </strong>104546,
              <strong>Estado: </strong>Finalizado,
              <strong>Local: </strong>201
            </span>
          </div>
          <div class="collapsible-body">
            <table class="striped">
              <thead>
                <tr>
                  <th>Articulo</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Mandarina</th>
                  <th>3kg</th>
                  <th>$5.000</th>
                </tr>
                <tr>
                  <th>Banano</th>
                  <th>20</th>
                  <th>$7.000</th>
                </tr>
                <tr>
                  <th>Papaya</th>
                  <th>5</th>
                  <th>$10.000</th>
                </tr>
                <tr>
                  <th></th>
                  <th>Total</th>
                  <th>$13.000</th>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>
    <footer class="page-footer green">
        <div class="container">
            <p class="center-align">&copy; 2018 FrutyVer</p>
        </div>
    </footer>
    @include('client/scripts')
  </body>
</html>
