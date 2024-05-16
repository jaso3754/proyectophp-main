<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-image: url('img/imagenfondo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            max-width: 300px;
            background-color: black;
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card h1 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        .card input[type="text"],
        .card input[type="password"],
        .card input[type="email"],
        .card button {
            background-color: transparent;
            color: white;
            border: 1px solid white;
            margin-bottom: 10px;
            padding: 8px 12px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .card input[type="text"]::placeholder,
        .card input[type="password"]::placeholder,
        .card input[type="email"]::placeholder {
            color: white;
        }

        .card button {
            cursor: pointer;
        }

        .card button:hover {
            background-color: #343a40;
        }

        .alert {
            background-color: #212529;
            color: white;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h1>Registro de Usuario</h1>
      <?php
        $mensaje_error = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST["user"] ?? "";
            $pass = $_POST["pass"] ?? "";
            $confirm_pass = $_POST["confirm_pass"] ?? "";
            $email = $_POST["email"] ?? "";

          if ($pass !== $confirm_pass) {
            $mensaje_error = "Las contraseñas no coinciden";
          } else {
            // Conectar a la base de datos
            if(isset($_POST["registro"])){
              include_once("./conexion.php");
              $sql = "INSERT  INTO usuarios (nombre, correo, contrasena) VALUES ('".$_POST["user"]."', '".$_POST["email"]."', '".$_POST["pass"]."')";
              $conn->query($sql);
    
              echo '
                <script>
                  Swal.fire({
                      title: "Felicitaciones",
                      text: "Tu usuario ha sido registrado",
                      icon: "success",
                      showCancelButton: true,
                      confirmButtonColor: "#3085d6",
                      cancelButtonColor: "#d33",
                      confirmButtonText: "Ir a inicio",
                      cancelButtonText: "Cerrar"
                  }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = "index.php"; 
                      }
                  });
                </script>
              ';        
            }
          }
        }
      ?>
      <?php 
        if (!empty($mensaje_error)) : ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $mensaje_error; ?>
          </div>
      <?php endif; ?>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="form-group">
          <label for="user">Usuario:</label>
          <input type="text" id="user" name="user" class="form-control">
        </div>

        <div class="form-group">
          <label for="pass">Contraseña:</label>
          <input type="password" id="pass" name="pass" class="form-control">
        </div>

        <div class="form-group">
          <label for="confirm_pass">Confirmar Contraseña:</label>
          <input type="password" id="confirm_pass" name="confirm_pass" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" class="form-control">
        </div>
        <a href="index.php"><button  class=" btn-primary" type="submit" name="registro" id="registro" >registro</button></a>
      
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </div>
</body>
</html> 
