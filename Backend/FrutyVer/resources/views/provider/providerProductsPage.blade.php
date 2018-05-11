    @include('provider/head')  
        @include('provider/navBar')
        <!--main content-->
        <div class="row container">
            <aside class="aside col m3 hide-on-small-only">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">
                            Promociones
                            <span class="new badge green" data-badge-caption="">4</span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            Frutas
                            <span class="new badge green" data-badge-caption="">10</span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            Verduras
                            <span class="new badge green" data-badge-caption="">30</span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                                <li><a href="">Lorem ipsum</a></li>
                            </ul>
                        </div>
                    </li>                   
                </ul>
            </aside>
            <section class="col m9">
                <div class="row">
                    <div class="col card m8 s12 offset-m2 add-field-card">
                        <div class="input-field add-field col s11">
                            <input type="text" placeholder="Agregar un producto" id="productName">
                            <div class="add-field-collapsible" id="quantityFieldWrapper">
                                <input type="text" placeholder="Cantidad">
                                <div>
                                    <a href="" class="waves-effect waves-green btn-flat right"><strong>CREAR</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <article class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <img src="img/naranja.jpg">
                                        <span class="card-title">Naranjas</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p><strong>$5.000</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <img src="img/pera.jpg">
                                        <span class="card-title">Pera</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p><strong>$4.000</strong></p>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </article>
                    <article class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <img src="img/platano.jpg">
                                        <span class="card-title">Plátanos</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p><strong>$2.000</strong></p>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </article>
                </div>                   
                <div class="row">
                    <article class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <img src="img/manzana.jpg">
                                        <span class="card-title">Manzana</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p><strong>$6.000</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <img src="img/Mandarina.jpg">
                                        <span class="card-title">Mandarina</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p><strong>$6.000</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <img src="img/Melocoton.jpg">
                                        <span class="card-title">Melocotón</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p><strong>$6.000</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row">
                    <article class="col m4 s12">
                        <div class="row">
                            <div class="col s12">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <img src="img/calabacin.jpg">
                                        <span class="card-title">Calabacín</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p><strong>$4.000</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
        <footer class="page-footer green">
            <div class="container">
                <p class="center-align">&copy; 2018 FrutyVer</p>
            </div>
        </footer>
        <script src="materialize/js/materialize.min.js"></script>
        <script src="js/init.js"></script>
        <script src="js/addProductEvents.js"></script>
    </body>
</html>