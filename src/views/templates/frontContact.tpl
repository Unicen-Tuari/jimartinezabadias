{include file="src/views/templates/frontHeader.tpl"}

    <div class="main">

        <section  class="section">

            <h2 class="section-main-title">
                Reservas y contacto
            </h2>

            <div class="section-body">
                <p class="important">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime!
                </p>

                <div class="form-section">
                    <form action="#">
                        <div class="form-item">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value=""/>
                        </div>
                        <div class="form-item">
                            <label for="phone">Telefono</label>
                            <input type="number" name="phone" value=""/>
                        </div>
                        <div class="form-item">
                            <label for="date">Fecha</label>
                            <input id="date-input" type="date" name="date"/>
                        </div>
                        <div class="form-item">
                            <label for="message">Mensaje</label>
                            <textarea name="message"  rows="7" placeholder="Su mansaje aqui..."></textarea>
                        </div>
                        <div class="form-item">
                            <input class="btn form-btn" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>

            </div>

        </section>

    </div>

    <script src="js/contact.js"></script>

{include file="src/views/templates/frontFooter.tpl"}