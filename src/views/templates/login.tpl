{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">  

    <form class="form-signin" action="user_verify" method="post">
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