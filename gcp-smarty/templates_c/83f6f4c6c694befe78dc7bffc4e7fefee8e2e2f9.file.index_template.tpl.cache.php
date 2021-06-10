<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-10-16 15:41:35
         compiled from "./templates/index_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16600581295da72c1f9f3bd4-38483523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83f6f4c6c694befe78dc7bffc4e7fefee8e2e2f9' => 
    array (
      0 => './templates/index_template.tpl',
      1 => 1571163847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16600581295da72c1f9f3bd4-38483523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'author' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5da72c1fa19620_74855155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da72c1fa19620_74855155')) {function content_5da72c1fa19620_74855155($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <title>🎮Homepage🕹️👾</title>
  <link rel="icon" href="icon.png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>

</head>
<body class="bg-dark">
  <!-- Top navigation bar -->
  <nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="index_template.html">
      <img src="logo.png" width="115" height="32" alt="">
    </a>
    <div class="justify-content-end">
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#loginModal">Log in</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Sign in</button>
    </div>
  </nav>

  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerTitleModalLabel">Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">

              <div class="mb-3">
                <label for="usernameInput">Username</label>
                <input type="text" class="form-control" id="usernameInput" name="usernameInputBox" placeholder="😎 COOL name goes here!" required>
              </div>
              <div class="mb-3">
                <label for="emailInput" class="">E-mail</label>
                <input type="email" class="form-control" id="emailInput" name="emailInputBox" placeholder="your@email.com" required>
              </div>
              <div class="mb-3">
                <label for="passInput">Password</label>
                <input type="password" class="form-control" id="passInput" name="passwordInputBox" minlength="4" placeholder="🤫 shhhh" required>
              </div>
              <div class="mb-3">
                <label for="passInputConfirm">Confirm password</label>
                <input type="password" class="form-control" id="passConfirmation" name="passwordConfirmationBox" minlength="4" placeholder="it's a secret" required>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginTitleModalLabel">Log in</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">

              <div class="mb-3">
                <label for="emailInput" class="">E-mail</label>
                <input type="email" class="form-control" id="emailInput" name="emailInputBox" placeholder="your@email.com" required>
              </div>
              <div class="mb-3">
                <label for="passInput">Password</label>
                <input type="password" class="form-control" id="passInput" name="passwordInputBox" minlength="4" placeholder="Hope you remember" required>
              </div>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" type="submit" class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom bar -->
  <div class="d-flex justify-content-between align-items-center fixed-bottom small p-2 bg-light ">
    <div class="text-info">© 2019 Desenvolvimento de Aplicações Web</div>
    <div class="text-info"><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</div>
  </div>

  <!-- Posts -->
  <div class="mx-5">
    <div class="card my-3 p-2 bg-light rounded-lg">
      <div class="mx-3 mt-1">
        <p class="text-left">@Muhammad_Waseem posted:</p>
        <p class="mx-4 text-center text-justify lead mx-auto">Give a man a program, frustrate him for a day. Teach a man to program, frustrate him for a lifetime.</p>
        <p class="text-sm-left small">posted 2019-10-1 18:21 | posted 2019-10-1 18:21</p>
      </div>
    </div>

    <div class="card my-3 p-2 bg-light rounded-lg">
      <div class="mx-3 mt-1">
        <p class="text-left">@BestWaifu posted:</p>
        <p class="mx-4 text-center text-justify lead mx-auto">UwU</p>
        <p class="text-sm-left small">posted 2019-10-1 18:14 | posted 2019-10-1 18:14</p>
      </div>
    </div>

    <div class="card my-3 p-2 bg-light rounded-lg">
      <div class="mx-3 mt-1">
        <p class="text-left">@Linus_Torvalds posted:</p>
        <p class="mx-4 text-center text-justify lead mx-auto">Talk is cheap. Show me the code.</p>
        <p class="text-sm-left small">posted 2019-10-1 18:10 | posted 2019-10-1 18:10</p>
      </div>
    </div>

    <div class="card my-3 p-2 bg-light rounded-lg">
      <div class="mx-3 mt-1">
        <p class="text-left">@Andreia posted:</p>
        <p class="mx-4 text-center text-justify lead mx-auto">The extraordinary is in what we do, not in what we are!</p>
        <p class="text-sm-left small">posted 2019-10-1 18:06 | posted 2019-10-1 18:06</p>
      </div>
    </div>

    <div class="card my-3 p-2 bg-light rounded-lg">
      <div class="mx-3 mt-1">
        <p class="text-left">@Fetusberry posted:</p>
        <p class="mx-4 text-center text-justify lead mx-auto">You cheated not only the game, but yourself. You didn't grow. You didn't improve. You took a shortcut and gained nothing. You experienced a hollow victory. Nothing was risked and nothing was gained. It's sad that you don't know the difference.</p>
        <p class="text-sm-left small">posted 2019-5-5 11:09 | updated 2019-5-5 11:09</p>
      </div>
    </div>

    <div class="card my-3 p-2 bg-light rounded-lg">
      <div class="mx-3 mt-1">
        <p class="text-left">@Guilherme posted:</p>
        <p class="mx-4 text-center text-justify lead mx-auto">First message on this forum!</p>
        <p class="text-sm-left small">posted 2019-9-21 23:14 | updated 2019-9-21 23:14</p>
      </div>
    </div>
  </div>

  <!-- Bottom Spacing to prevent underlap with bottom fixed bar -->
  <div class="py-3"></div>
</body>
</html>
<?php }} ?>
