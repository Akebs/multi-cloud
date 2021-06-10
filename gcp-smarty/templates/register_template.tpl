<!DOCTYPE html>
<html lang="en">
    <head>
        <title>🎮Register🕹️👾</title>
        <link rel="icon" href="icon.png">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body class="bg-dark">
        <!-- Top navigation bar -->
        <nav class="navbar sticky-top navbar-light bg-light">
            <a class="navbar-brand" href="{$navindex}">
                <img src="logo.png" width="115" height="32" alt="">
            </a>
            <div class="justify-content-end">
                <a class="btn btn-secondary" href="{$navlogin}" role="navbar">Log in</a>
                <a class="btn btn-primary" href="{$navregister}" role="navbar">Sign in</a>
            </div>
        </nav>

        <div class="card m-5">
            {if {$error} neq 0}
                <div class="bg-warning py-1 px-2">{$errorMessage}</div>
            {/if}
            <div class="card-body">
            <form method="post" action="{$action_url}">
                <div class="form-group row">
                    <label for="usernameInput">Username</label>
                    <input type="text" class="form-control" id="usernameInput" name="usernameInputBox" minlength="2" placeholder="😎 COOL name goes here!" value="{$username}" maxlength="20" required>
                </div>
                <div class="form-group row">
                    <label for="emailInput" class="">E-mail</label>
                    <input type="email" class="form-control" id="emailInput" name="emailInputBox" minlength="5" placeholder="your@email.com" value="{$email}" maxlength="64" required>
                </div>
                <div class="form-group row">
                    <label for="passInput">Password</label>
                    <input type="password" class="form-control" id="passInput" name="passwordInputBox" minlength="4" maxlength="64" required>
                    <!-- "🤫 shhhh" -->
                </div>
                <div class="form-group row">
                    <label for="passInputConfirm">Password again</label>
                    <input type="password" class="form-control" id="passConfirmation" name="passwordConfirmationBox" minlength="4" maxlength="64" required>
                    <!--"it's a secret"-->
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="d-flex justify-content-between align-items-center fixed-bottom small p-2 bg-light ">
            <a class="text-info" href="{$navdaw}">© 2019 Desenvolvimento de Aplicações Web</a>
            <a class="text-info" href="{$naveaster}">Desenvolvido por Guilherme Reis</a>
        </div>

        <!-- Bottom Spacing to prevent underlap with bottom fixed bar -->
        <div class="py-3"></div>
    </body>
</html>
