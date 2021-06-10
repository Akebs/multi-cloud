<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 13:46:54
         compiled from "./templates/message_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290670565dba277c94f5d3-26083054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a54c8c94fd72c89b3c7950913548b04dae296510' => 
    array (
      0 => './templates/message_template.tpl',
      1 => 1572630621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290670565dba277c94f5d3-26083054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dba277c982521_48410534',
  'variables' => 
  array (
    'message' => 0,
    'navindex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dba277c982521_48410534')) {function content_5dba277c982521_48410534($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>🎮🕹️👾</title>
    <link rel="icon" href="icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="refresh" content="3; url=index.php" />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <?php echo '<script'; ?>

      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
  </head>
  <body class="bg-dark">
    <!-- Top navigation bar -->
    <nav class="navbar sticky-top navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" width="115" height="32" alt="" />
      </a>
    </nav>

    <div class="card m-5">
      <div class="card-body">
        <div class="mx-auto">
          <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
        </div>
        <div class="mx-auto">
          <h6 class="text-center">
            You'll get redirected automagically within 3 seconds<br>If you don't, click <a href="<?php echo $_smarty_tpl->tpl_vars['navindex']->value;?>
">here<a>
          </h6>
        </div>
      </div>
    </div>

    <!-- Bottom bar -->
    <div
      class="d-flex justify-content-between align-items-center fixed-bottom small p-2 bg-light "
    >
      <div class="text-info">© 2019 Desenvolvimento de Aplicações Web</div>
      <div class="text-info">Desenvolvido por Guilherme Reis</div>
    </div>

    <!-- Bottom Spacing to prevent underlap with bottom fixed bar -->
    <div class="py-3"></div>
  </body>
</html>
<?php }} ?>
