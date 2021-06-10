<!DOCTYPE html>
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
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="bg-dark">
    <!-- Top navigation bar -->
    <nav class="navbar sticky-top navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" width="115" height="32" alt="" />
      </a>
      <div class="justify-content-end">
        <a class="btn btn-secondary" href="{$navpost}" role="navbar">Post</a>
        <a class="btn btn-primary" href="{$navlogout}" role="navbar">Logout</a>
      </div>
    </nav>

    <div class="card my-5 mx-auto col-11 col-md-5">
      <div class="card-body">
        <form method="post" action="{$action_url}">
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
            >{$blog}</textarea>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-secondary" href="{$navindex}">Cancel</a>
            <button type="submit" class="btn btn-primary">Post</button>
          </div>
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