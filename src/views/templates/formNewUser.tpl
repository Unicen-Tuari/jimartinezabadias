{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col-8">
            <h5>Registrarse</h5>
        </div>
    </div>

    <div class="row">
        <div class="col">
            
            <form action="add_user" method="post">
                
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Nombre" required>
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                </div>
                
                <div class="form-group py-1">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                    <a class="btn btn-secondary" href="">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

</div>


{include file="src/views/templates/adminFooter.tpl"}