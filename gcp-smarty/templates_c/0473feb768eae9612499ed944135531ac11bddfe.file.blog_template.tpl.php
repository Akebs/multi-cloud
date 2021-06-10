<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-02 18:21:55
         compiled from "./templates/blog_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7462341015dba2739706a84-00619745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0473feb768eae9612499ed944135531ac11bddfe' => 
    array (
      0 => './templates/blog_template.tpl',
      1 => 1572718949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7462341015dba2739706a84-00619745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dba2739728892_48691899',
  'variables' => 
  array (
    'navpost' => 0,
    'navlogout' => 0,
    'action_url' => 0,
    'blog' => 0,
    'navindex' => 0,
    'navdaw' => 0,
    'naveaster' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dba2739728892_48691899')) {function content_5dba2739728892_48691899($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>🎮🕹️👾</title>
    <link rel="icon" href="icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
      <div class="justify-content-end">
        <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['navpost']->value;?>
" role="navbar">Post</a>
        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['navlogout']->value;?>
" role="navbar">Logout</a>
      </div>
    </nav>

    <div class="card my-5 mx-auto col-11 col-md-5">
      <div class="card-body">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
">
          <div class="form-group">
            <label for="blogInput" class="">Feeling inspired?</label>
            <textarea
              class="form-control"
              id="blogInput"
              name="blogInputBox"
              placeholder="Roses are red..."
              rows="4"
              maxlength="280"
              required
            ><?php echo $_smarty_tpl->tpl_vars['blog']->value;?>
</textarea>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['navindex']->value;?>
">Cancel</a>
            <button type="submit" class="btn btn-primary">Post</button>
          </div>
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
</html><?php }} ?>
