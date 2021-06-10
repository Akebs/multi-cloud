<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-04 17:29:04
         compiled from "./templates/index_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21195931435dba1f42340569-91365472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deac33a7ca096cb8ad65c75b49c2bb4348060ab3' => 
    array (
      0 => './templates/index_template.tpl',
      1 => 1572888585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21195931435dba1f42340569-91365472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dba1f423b0ff3_43730084',
  'variables' => 
  array (
    'navindex' => 0,
    'username' => 0,
    'navdaw' => 0,
    'navpost' => 0,
    'navlogout' => 0,
    'navlogin' => 0,
    'navregister' => 0,
    'naveaster' => 0,
    'microposts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dba1f423b0ff3_43730084')) {function content_5dba1f423b0ff3_43730084($_smarty_tpl) {?><!DOCTYPE html>
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
    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['navindex']->value;?>
">
      <img src="logo.png" width="115" height="32" alt="">
    </a>
    <div class="justify-content-end">
      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!='') {?>
        <a class="text-info" href="<?php echo $_smarty_tpl->tpl_vars['navdaw']->value;?>
">Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
! </a>
        <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['navpost']->value;?>
" role="navbar">Post</a>
        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['navlogout']->value;?>
" role="navbar">Logout</a>
      <?php }?>
      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='') {?>
        <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['navlogin']->value;?>
" role="navbar">Log in</a>
        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['navregister']->value;?>
" role="navbar">Sign in</a>
      <?php }?>
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
    <a class="text-info" href="<?php echo $_smarty_tpl->tpl_vars['navdaw']->value;?>
">© 2019 Desenvolvimento de Aplicações Web</a>
    <a class="text-info" href="<?php echo $_smarty_tpl->tpl_vars['naveaster']->value;?>
">Desenvolvido por Guilherme Reis</a>
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
          <p class="mx-4 lead"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
          <?php if ($_SESSION['id']==$_smarty_tpl->tpl_vars['post']->value['user_id']) {?>
            <a class="text-sm-left small" href="blog.php?micropost_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">edit</a>
          <?php }?>
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
