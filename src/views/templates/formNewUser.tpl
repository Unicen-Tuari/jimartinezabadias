<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Admin - El Mallin</title>
    <base href="{BASE_URL}">
  </head>

  <body style="background-color: #f5f5f5;">

<div class="container p-5">
    
    <div class="row py-3 justify-content-between">
        <div class="col-8">
            <h5>Registrarse</h5>
        </div>
    </div>

    <div class="row">
        <div class="col">
            
            <form action="add_user" method="post">
                
                <div class="form-group">
                    <label for="inputUsername">Usuario</label>
                    <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Nombre de Usuario" required>
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                </div>
                
                <div class="form-group py-1">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                    <a class="btn btn-secondary" href="admin">Cancelar</a>
                </div>

            </form>

        </div>
    </div>

</div>

{include file="src/views/templates/adminFooter.tpl"}