{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">  
    
    {* <form action="user_login" method="post">

    <div class="container">
        <label for="username"><b>Nombre de Usuario</b></label>
        <input type="text" placeholder="Usuario" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required>

        <button type="submit">Login</button>
    </div>

    </form> *}

<form class="form-signin" action="user_verify" method="post">
    {* <img class="mb-4" src="images/ma" alt="" width="72" height="72"> *}
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="username" class="sr-only">Username</label>
    <input type="text" id="usernameInput" name="username" class="form-control my-3" placeholder="Username" required="" autofocus="">
    <label for="passwordInput" class="sr-only">Password</label>
    <input type="password" id="passwordInput" name="password" class="form-control my-3" placeholder="Password" required="">
    <button class="btn btn-primary" type="submit">Log in</button>
    <a href="new_user">Registrarse</a>
</form>

</div>

{include file="src/views/templates/adminFooter.tpl"}