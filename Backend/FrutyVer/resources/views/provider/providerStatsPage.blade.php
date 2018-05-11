    @include('provider/head')  
        @include('provider/navBar')
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                    <div class="card">
                        <div class="row card-content">
                            <div class="col s3 m3 icon green">
                                <i class="material-icons white-text">attach_money</i>
                            </div>
                            <div class="col s9">
                                <span class="card-title">$100.000.000</span>
                                <p>en ganancias</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="row card-content">
                            <div class="col s3 m3 icon red">
                                <i class="material-icons white-text">money_off</i>
                            </div>
                            <div class="col s9">
                                <span class="card-title">$80.000.000</span>
                                <p>En costos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="row card-content">
                            <div class="col s3 m3 icon blue">
                                <i class="material-icons white-text">shopping_basket</i>
                            </div>
                            <div class="col s9">
                                <span class="card-title">5.000</span>
                                <p>Ventas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m8">
                    <div class="row">
                        <div class="col s12">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="col s12">
                            <canvas id="yearChart"></canvas>
                        </div>
                    </div>             
                </div>
                <aside class="col s12 m4">
                    <div class="row">
                        <div class="col s6">
                            <div class="card">
                                <div class="row card-content">
                                    <div class="col s19">
                                        <p>Visitantes</p>
                                        <span class="card-title"><strong>12.589+</strong></span>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="card">
                                <div class="row card-content">
                                    <div class="col s19">
                                        <p>Compradores</p>
                                        <span class="card-title"><strong>5.589+</strong></span>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="card">
                                <div class="row card-content">
                                    <div class="col s3 m3 icon img-container">
                                        <img src="img/manzana.jpg" alt="">
                                    </div>
                                    <div class="col s19">
                                        <span class="card-title">Manzana</span>
                                        <p>Producto más vendido</p>
                                        <p><strong>5.000 unidades</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="card">
                                <div class="row card-content">
                                    <div class="col s3 m3 icon img-container">
                                        <img src="img/calabacin.jpg" alt="">
                                    </div>
                                    <div class="col s19">
                                        <span class="card-title">Calabacín</span>
                                        <p>Producto menos vendido</p>
                                        <p><strong>3 unidades</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="row resume-table-container">
                <div class="col s12 m6 resume-table">
                    <h2>Ventas mensuales</h2>
                    <table>
                        <thead>
                            <tr>
                                <th class="center-align">Producto</th>
                                <th class="center-align">Unidades vendidas</th>
                                <th class="center-align">Ganancia total</th>
                            </tr>
                        </thead>               
                        <tbody>
                            <tr>
                                <td class="center-align">Manzana</td>
                                <td class="center-align">2000</td>
                                <td class="center-align">$50.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Mandarina</td>
                                <td class="center-align">1000</td>
                                <td class="center-align">$40.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Naranja</td>
                                <td class="center-align">800</td>
                                <td class="center-align">$30.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Pera</td>
                                <td class="center-align">600</td>
                                <td class="center-align">$20.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Plátano</td>
                                <td class="center-align">400</td>
                                <td class="center-align">$10.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Calababcín</td>
                                <td class="center-align">200</td>
                                <td class="center-align">$5.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 m6 resume-table">
                    <h2>Ventas totales</h2>
                    <table>
                        <thead>
                            <tr>
                                <th class="center-align">Producto</th>
                                <th class="center-align">Unidades vendidas</th>
                                <th class="center-align">Ganancia total</th>
                            </tr>
                        </thead>               
                        <tbody>
                            <tr>
                                <td class="center-align">Manzana</td>
                                <td class="center-align">20.000</td>
                                <td class="center-align">$500.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Mandarina</td>
                                <td class="center-align">10.000</td>
                                <td class="center-align">$400.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Naranja</td>
                                <td class="center-align">8.000</td>
                                <td class="center-align">$300.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Pera</td>
                                <td class="center-align">6.000</td>
                                <td class="center-align">$200.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Plátano</td>
                                <td class="center-align">4.000</td>
                                <td class="center-align">$100.000</td>
                            </tr>
                            <tr>
                                <td class="center-align">Calababcín</td>
                                <td class="center-align">2.000</td>
                                <td class="center-align">$50.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
        <footer class="page-footer green">
            <div class="container">
                <p class="center-align">&copy; 2018 FrutyVer</p>
            </div>
        </footer>
        <script src="../materialize/js/materialize.min.js"></script>
        <script src="js/init.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/chart.js"></script>
    </body>
</html>