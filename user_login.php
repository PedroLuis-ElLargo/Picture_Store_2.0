<?php
  include 'components/connect.php';

  session_start();
  
  if (isset($_SESSION['usuario_id'])) {
    $user_id = $_SESSION['usuario_id'];
  }else {
    $user_id = '';
  }

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $pass = sha1($_POST['pass']);
  $pass = filter_var($pass, FILTER_SANITIZE_STRING);

  $select_user = $connection->prepare("SELECT * FROM `usuario` WHERE nombre = ? AND clave = ?");
  $select_user->execute([$name, $pass]);
  
  if ($select_user->rowCount() > 0) {
    $fetch_user_id = $select_user->fetch(PDO::FETCH_ASSOC);
    $_SESSION['usuario_id'] = $fetch_user_id['usuario_id'];
    header('location:index.php');
  }else{
    $message[] = '¡Nombre de usuario o contraseña incorrecta!';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Signup - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- bootstrap.min.css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
          <!-- Login Form -->
          <div class="login form-peice switched">
            <form class="login-form" action="#" method="post" data-form>
              <div class="form-group">
                <input type="text" name="name" class="box" placeholder="Ingrese su nombre de usuario" maxlength="20"
                  required oninput="this.value = this.value.replace(/\s/g, '')">
              </div>
              <div class="form-group">
                <input type="password" name="pass" required placeholder="Ingresa tu contraseña" maxlength="20"
                  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
              </div>
              <div class="CTA">
                <input type="submit" name="submit" value="Acceder" />
                <a href="user_register.php" class="switch" data-target="signup" id="signup">Soy nuevo</a>
              </div>
            </form>
          </div>
          <!-- End Login Form -->
        </div>
      </div>
    </section>
  </main>
</body>

</html>