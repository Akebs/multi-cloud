<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-10-28 23:50:26
         compiled from "./templates/index_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15246873285da8781829efe1-88915113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87f372a2ed6a55eb9449a11f526dd07d7026a2a' => 
    array (
      0 => './templates/index_template.tpl',
      1 => 1572306643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15246873285da8781829efe1-88915113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5da878182da6e4_36279347',
  'variables' => 
  array (
    'microposts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5da878182da6e4_36279347')) {function content_5da878182da6e4_36279347($_smarty_tpl) {?><!DOCTYPE html>
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
<body class="bg-dark" onclick="window.location.href='https://youtu.be/dQw4w9WgXcQ'">
  <!-- Top navigation bar -->
  <nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <img src="logo.png" width="115" height="32" alt="">
    </a>
    <div class="justify-content-end">
      <a class="btn btn-secondary" href="login_template.html" role="navbar">Log in</a>
      <a class="btn btn-primary" href="register.php?error=0" role="navbar">Sign in</a>
    </div>
  </nav>

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
    <a class="text-info" href="https://youtu.be/dQw4w9WgXcQ">Desenvolvido por Guilherme Reis</a>
  </div>

  <!-- Posts -->
  <div class="container-fluid">

  <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['microposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <div class="row">      
      <div class="col"></div>
      <div class="col-6 my-3 p-2 bg-light rounded-lg">
        <div class="mx-3 mt-1">
          <p class="text-left">@<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
 posted:</p>
          <p class="mx-4 text-center text-justify lead mx-auto"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
          <p class="text-sm-left small">posted <?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
 | updated <?php echo $_smarty_tpl->tpl_vars['post']->value['updated_at'];?>
</p>
        </div>
      </div>
      <div class="col"></div>
    </div>
    <?php } ?>

  <!-- Bottom Spacing to prevent underlap with bottom fixed bar -->
  <div class="py-3"></div>
</body>
</html>
<?php }} ?>
