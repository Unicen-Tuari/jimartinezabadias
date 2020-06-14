{include file="src/views/templates/frontHeader.tpl"}

    <div class="main">

        <section class="section">
            
            <a href="menu.html">
                <img class="splash" src="images/algunos_platos.jpg" alt="Platos y cerveza">
            </a>

            <div class="section-body">
                <a href="menu.html">
                    <h2>
                        Cocina de montaña
                    </h2>
                </a>

                <p>
                    Confiamos en productores locales para ofrecer una cocina auténtica y comprometida con la región.
                </p>
            
                <a class="btn" href="menu.html">Menú</a>
            </div>
            

        </section>

        <section class="section">
            <h2>Plato del día</h2>
            <div class="section-body">
                <img id="img-plato-dia" src="" alt="">
                <h4 id="nombre-plato-dia">
                    <!-- Filled by main.js -->
                </h4>
                <p id="descripcion-plato-dia">
                    <!-- Filled by main.js -->
                </p>
            </div>
        </section>

        <section class="section">
            <a href="eventos.html">
                <img class="splash" src="images/noches_de_tango.jpg" class="section-image--rounded" alt="">
                <div class="section-body">
                    <a href="eventos.html">
                        <h2>
                            Eventos memorables
                        </h2>
                    </a>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, ipsam vel.
                    </p>
                    <a class="btn" href="eventos.html">Eventos</a>
                </div>
            </a>
        </section>

        <section id="horarios" class="section">
            <h2>
                Horarios
            </h2>
            <div class="section-body">

                <ul style="text-align: left;">
                    <li>Alumuerzo: de 12:30 a 15:30hs</li>
                    <li>Happy Hour: de 18 a 20hs</li>
                    <li>Cena: hasta las 01 am</li>
                </ul>

            </div>
        </section>

        <section class="section">

            <h2>
                Contacto
            </h2>

            <div class="section-body">

                <p>
                    Teléfono: 294 446-1026
                </p>
                <p>
                    Whatsapp: 549294 461-6099
                </p>
                <a class="btn" href="contacto.html">Reservar</a>

            </div>

        </section>

        <section id="como-llegar" class="section">
            <img class="splash" src="images/vista_mallin.jpeg" class="section-image--rounded" alt="">
            <h2>
                Ubicación
            </h2>
            
            <div class="section-body">
                <p>Av. Bustillo KM 11600, Bariloche.</p>
            </div>
            
        </section>

    </div>

{include file="src/views/templates/frontFooter.tpl"}