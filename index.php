<?php
  include 'components/connect.php';

  session_start();
  
  if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
  }else {
    $user_id = '';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css//style.css" />
  <script defer src="./assets/js/main.js"></script>
  <title>Pictures Store</title>
</head>

<body class="light-theme dark-theme">
  <?php include 'components/user_header.php'; ?>
</body>

</html>