    @include('provider/head')  
       @include('provider/navBar')
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                    <div class="card">
                        <div class="row card-content">
                            <div class="col s3 m3 icon red">
                                <i class="material-icons white-text">close</i>
                            </div>
                            <div class="col s19">
                                <span class="card-title">3 pedidos</span>
                                <p>Sin empacar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="row card-content">
                            <div class="col s3 m3 icon blue">
                                <i class="material-icons white-text">done</i>
                            </div>
                            <div class="col s19">
                                <span class="card-title">10 pedidos</span>
                                <p>Listos para envío</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card">
                        <div class="row card-content">
                            <div class="col s3 m3 icon green">
                                <i class="material-icons white-text">send</i>
                            </div>
                            <div class="col s19">
                                <span class="card-title">7 pedidos</span>
                                <p>Enviados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container row">
            <section class="col m6 s12">
                <div class="row">
                    <div class="col s4 date green white-text">
                        <h6>2018</h4>
                        <h3>Domingo</h2>
                        <h4>Mayo 6</h3>
                        <div class="divider"></div>
                        <h5>3 pedidos para hoy</h3>
                    </div>
                    <div class="col s8 green lighten-5">
                        <div class="row">
                            <div class="col s12 month-change">
                                <span><a href=""><i class="material-icons">chevron_left</i></a></span>
                                <p>Mayo 2018</p>
                                <span><a href=""><i class="material-icons">chevron_right</i></a></span>
                            </div>
                            <section class="col s12 calendar-body">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>D</th>
                                                <th>L</th>
                                                <th>M</th>
                                                <th>M</th>
                                                <th>J</th>
                                                <th>V</th>
                                                <th>S</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>7</td>
                                                <td><div class="relative">8<div class="dot red"></div></div></td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td><div class="relative">12<div class="dot red"></div></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="relative">13<div class="dot red"></div></div></td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>16</td>
                                                <td><div class="relative">17<div class="dot red"></div></div></td>
                                                <td>18</td>
                                                <td>19</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>21</td>
                                                <td><div class="relative">22<div class="dot red"></div></div></td>
                                                <td>23</td>
                                                <td><div class="relative">24<div class="dot red"></div></div></td>
                                                <td>25</td>
                                                <td>26</td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>28</td>
                                                <td><div class="relative">29<div class="dot red"></div></div></td>
                                                <td>30</td>
                                                <td>31</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col m6 s12 orders">
                <div class="red white-text orders-header">
                    <h1>Pedidos sin empacar</h1>
                </div>
                <section class="row">
                    <article class="col s12">
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103651, para: 04/06/2018</div>
                                <div class="collapsible-body">
                                    <div class="bill-wrapper">
                                        <p><strong>Banano</strong></p>
                                        <p>3kg</p>
                                        <p>$5.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Pera</strong></p>
                                        <p>3kg</p>
                                        <p>$5.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Moras</strong></p>
                                        <p>5kg</p>
                                        <p>$6.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p></p>
                                        <p><strong>TOTAL:</strong></p>                                        
                                        <p><strong>$16.000</strong></p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p></p>
                                        <p><strong>Dirección:</strong></p>                                        
                                        <p>Calle Falsa 123</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                <div class="collapsible-body">
                                    <div class="bill-wrapper">
                                        <p><strong>Banano</strong></p>
                                        <p>3kg</p>
                                        <p>$5.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Pera</strong></p>
                                        <p>3kg</p>
                                        <p>$5.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Moras</strong></p>
                                        <p>5kg</p>
                                        <p>$6.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Papaya</strong></p>
                                        <p>5</p>
                                        <p>$10.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p></p>
                                        <p><strong>TOTAL:</strong></p>                                        
                                        <p><strong>$26.000</strong></p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p></p>
                                        <p><strong>Dirección:</strong></p>                                        
                                        <p>Calle Falsa 123</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103896, para: 07/06/2018</div>
                                <div class="collapsible-body">
                                    <div class="bill-wrapper">
                                        <p><strong>Banano</strong></p>
                                        <p>3kg</p>
                                        <p>$5.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Pera</strong></p>
                                        <p>3kg</p>
                                        <p>$5.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Moras</strong></p>
                                        <p>5kg</p>
                                        <p>$6.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Papaya</strong></p>
                                        <p>5</p>
                                        <p>$10.000</p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p><strong>Mandarina</strong></p>
                                        <p>5kg</p>
                                        <p>$8.000</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="bill-wrapper">
                                        <p></p>
                                        <p><strong>TOTAL:</strong></p>                                        
                                        <p><strong>$34.000</strong></p>
                                    </div>
                                    <div class="bill-wrapper">
                                        <p></p>
                                        <p><strong>Dirección:</strong></p>                                        
                                        <p>Calle Falsa 123</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                </section>
            </section>
        </div>
        <div class="container row">
            <section class="col m6 s12 orders">
                <div class="blue white-text orders-header">
                    <h1>Pedidos listos para envío</h1>
                </div>
                <section class="row">
                        <article class="col s12">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103651, para: 04/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$16.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103896, para: 07/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Mandarina</strong></p>
                                            <p>5kg</p>
                                            <p>$8.000</p>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$34.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </article>
                    </section>
                </section>
            </section>
            <section class="col m6 s12 orders">
                <div class="green white-text orders-header">
                    <h1>Pedidos enviados</h1>
                </div>
                <section class="row">
                        <article class="col s12">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103651, para: 04/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$16.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103896, para: 07/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Mandarina</strong></p>
                                            <p>5kg</p>
                                            <p>$8.000</p>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$34.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103651, para: 04/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$16.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 1036558, para: 06/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$26.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103896, para: 07/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Papaya</strong></p>
                                            <p>5</p>
                                            <p>$10.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Mandarina</strong></p>
                                            <p>5kg</p>
                                            <p>$8.000</p>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$34.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">account_circle</i>Pedido: 103651, para: 04/06/2018</div>
                                    <div class="collapsible-body">
                                        <div class="bill-wrapper">
                                            <p><strong>Banano</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Pera</strong></p>
                                            <p>3kg</p>
                                            <p>$5.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p><strong>Moras</strong></p>
                                            <p>5kg</p>
                                            <p>$6.000</p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>TOTAL:</strong></p>                                        
                                            <p><strong>$16.000</strong></p>
                                        </div>
                                        <div class="bill-wrapper">
                                            <p></p>
                                            <p><strong>Dirección:</strong></p>                                        
                                            <p>Calle Falsa 123</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </article>
                    </section>
                </section>
            </section>
        </div>
        <footer class="page-footer green">
            <div class="container">
                <p class="center-align">&copy; 2018 FrutyVer</p>
            </div>
        </footer>
        <script src="../materialize/js/materialize.min.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>