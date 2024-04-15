<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Signup - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- bootstrap.min.css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- estilos css -->
  <link rel="stylesheet" href="../assets/css/styleLogin.css" />
</head>

<body>

  <?php 
    if (isset($message)) {
      foreach($message as $message){
        echo ' 
        <div class="message">
          <span>'.$message.'</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
      }
    }
  ?>

  <main class="container">
    <section id="formHolder">
      <div class="row">
        <!-- Brand Box -->
        <div class="col-sm-6 brand">
          <div class="heading">
            <h2>Picture Store</h2>
            <p>El cliente tiene la razón</p>
          </div>
          <div class="success-msg">
            <p>¡Excelente! Eres uno de nuestros miembros ahora</p>
            <a href="#" class="profile">Tu perfil</a>
          </div>
        </div>
        <!-- Form Box -->
        <div class="col-sm-6 form">
          <!-- Signup Form -->
          <div class="signup form-peice">
            <form class="signup-form" action="#" method="post" data-form>
              <div class="form-group">
                <input type="text" name="username" id="name" class="name" placeholder="Nombre completo" />
                <span class="error"></span>
              </div>
              <div class="form-group">
                <input type="email" name="emailAdress" id="email" class="email" placeholder="Correo electrónico"
                  style="background-image: none" />
                <span class="error"></span>
              </div>
              <div class="form-group">
                <input type="text" name="phone" id="phone" placeholder="Número de teléfono - Optional" />
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="pass" data-password
                  placeholder="Contraseña" />
                <span class="error"></span>
              </div>
              <div class="form-group">
                <input type="password" name="passwordCon" id="passwordCon" class="passConfirm"
                  placeholder="Confirmar contraseña" />
                <span class="error"></span>
              </div>
              <div class="CTA">
                <input type="submit" value="Regístrate ahora" id="submit" />
                <a href="#" class="switch" data-target="login" id="login">Tengo una cuenta</a>
              </div>
            </form>
          </div>
          <!-- End Signup Form -->
        </div>
      </div>
    </section>
  </main>

  <script src="./assets//js//scriptLogin.js"></script>
</body>

</html>