<!DOCTYPE html>
<html lang="en">
<head>
  <title>🎮Homepage🕹️👾</title>
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
      {if {$username} != ''}
        <a class="text-info" href="{$navdaw}">Welcome {$username}! </a>
        <a class="btn btn-secondary" href="{$navpost}" role="navbar">Post</a>
        <a class="btn btn-primary" href="{$navlogout}" role="navbar">Logout</a>
      {/if}
      {if {$username} == ''}
        <a class="btn btn-secondary" href="{$navlogin}" role="navbar">Log in</a>
        <a class="btn btn-primary" href="{$navregister}" role="navbar">Sign in</a>
      {/if}
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
    <a class="text-info" href="{$navdaw}">© 2019 Desenvolvimento de Aplicações Web</a>
    <a class="text-info" href="{$naveaster}">Desenvolvido por Guilherme Reis</a>
  </div>

  <!-- Posts -->
  <div class="container-fluid">

  {foreach item=post from=$microposts}
    <div class="row">      
      <div class="col"></div>
      <div class="col-6 my-3 p-2 bg-light rounded-lg">
        <div class="mx-3 mt-1">
          <p class="text-left">@{$post.name} posted:</p>
          <p class="mx-4 lead">{$post.content}</p>
          {if $smarty.session.id == $post.user_id}
            <a class="text-sm-left small" href="blog.php?micropost_id={$post.id}">edit</a>
          {/if}
          <p class="text-sm-left small">posted {$post.created_at} | updated {$post.updated_at}</p>
        </div>
      </div>
      <div class="col"></div>
    </div>
    {/foreach}

  <!-- Bottom Spacing to prevent underlap with bottom fixed bar -->
  <div class="py-3"></div>
</body>
</html>
