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

  <body class="text-center" style="background-color: #164341;">


    <div class="container p-5">  
        <img class="m-4" src="images/logo_el_mallin_inv.png" alt="" width="150">
        <form class="form-signin" action="user_verify" method="post">
            <label for="username" class="sr-only">Usuario</label>
            <input type="text" id="usernameInput" name="username" class="form-control my-3" placeholder="Usuario" required="" autofocus="">
            <label for="passwordInput" class="sr-only">Password</label>
            <input type="password" id="passwordInput" name="password" class="form-control my-3" placeholder="Password" required="">
            <button class="btn btn-primary" type="submit">Entrar</button>
            <a class="btn btn-light" href="new_user">Registrarse</a>
        </form>

    </div>

{include file="src/views/templates/adminFooter.tpl"}