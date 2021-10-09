<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taller1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-4">

          <h3 class="text-center text-white">PRIMER FORMULARIO</h3>

          <form action="index.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="digita tu nombre" name="nombre">
              <button type="submit" class="btn btn-primary w-100" name="boton">Enviar</button>
            </div>

            <div class="mb-3">
              <label class="form-label">Contraseña</label>
              <input type="password" class="form-control" placeholder="digite su contraseña" name="contraseña">
              <button type="submit" class="btn btn-success w-100" name="boton1">Success</button>
            </div>
            <div class="mb-3">
              <label class="form-label">Correo Electronico</label>
              <input type="email" class="form-control" placeholder="digite su email" name="email">
              <button type="submit" class="btn btn-info w-100" name="boton2">Info</button>
              <div id="emailHelp" class="form-text">Por favor digite su correo personal.</div>

            </div>

          </form>
        </div>
        <?php
        if (isset($_POST["boton"])) {
          $nombreUsuario = $_POST["nombre"];
          echo ("Buenas noches " . $nombreUsuario);
        }

        if (isset($_POST["boton1"])) {
          $contraseñaUsuario = $_POST["contraseña"];
          echo ("Buenas tardes hemos verificado su contraseña " . $contraseñaUsuario);
        }

        if (isset($_POST["boton2"])) {
          $emailUsuario = $_POST["email"];
          echo ("Buenas tardes hemos verificado su email " . $emailUsuario);
        }
        ?>
      </div>
    </div>
    </div>

  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>