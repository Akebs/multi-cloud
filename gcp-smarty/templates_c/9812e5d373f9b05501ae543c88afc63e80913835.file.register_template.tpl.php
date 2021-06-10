<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-10-30 13:23:34
         compiled from "./templates/register_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17642840845db88be61fadc5-57870772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9812e5d373f9b05501ae543c88afc63e80913835' => 
    array (
      0 => './templates/register_template.tpl',
      1 => 1572441848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17642840845db88be61fadc5-57870772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5db88be6244b73_41641966',
  'variables' => 
  array (
    'navindex' => 0,
    'navlogin' => 0,
    'navregister' => 0,
    'error' => 0,
    'errorMessage' => 0,
    'action_url' => 0,
    'username' => 0,
    'email' => 0,
    'navdaw' => 0,
    'naveaster' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5db88be6244b73_41641966')) {function content_5db88be6244b73_41641966($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>🎮Register🕹️👾</title>
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
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['navindex']->value;?>
">
                <img src="logo.png" width="115" height="32" alt="">
            </a>
            <div class="justify-content-end">
                <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['navlogin']->value;?>
" role="navbar">Log in</a>
                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['navregister']->value;?>
" role="navbar">Sign in</a>
            </div>
        </nav>

        <div class="card m-5">
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0) {?>
                <div class="bg-warning py-1 px-2"><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</div>
            <?php }?>
            <div class="card-body">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
">
                <div class="form-group row">
                    <label for="usernameInput">Username</label>
                    <input type="text" class="form-control" id="usernameInput" name="usernameInputBox" minlength="2" placeholder="😎 COOL name goes here!" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" required>
                </div>
                <div class="form-group row">
                    <label for="emailInput" class="">E-mail</label>
                    <input type="email" class="form-control" id="emailInput" name="emailInputBox" minlength="5" placeholder="your@email.com" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" required>
                </div>
                <div class="form-group row">
                    <label for="passInput">Password</label>
                    <input type="password" class="form-control" id="passInput" name="passwordInputBox" minlength="4" placeholder="" required>
                    <!-- "🤫 shhhh" -->
                </div>
                <div class="form-group row">
                    <label for="passInputConfirm">Password again</label>
                    <input type="password" class="form-control" id="passConfirmation" name="passwordConfirmationBox" minlength="4" placeholder="" required>
                    <!--"it's a secret"-->
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="d-flex justify-content-between align-items-center fixed-bottom small p-2 bg-light ">
            <a class="text-info" href="<?php echo $_smarty_tpl->tpl_vars['navdaw']->value;?>
">© 2019 Desenvolvimento de Aplicações Web</a>
            <a class="text-info" href="<?php echo $_smarty_tpl->tpl_vars['naveaster']->value;?>
">Desenvolvido por Guilherme Reis</a>
        </div>

        <!-- Bottom Spacing to prevent underlap with bottom fixed bar -->
        <div class="py-3"></div>
    </body>
</html>
<?php }} ?>
