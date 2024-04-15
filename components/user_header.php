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

<!-- Header-->
<header>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="header-inner d-flex justify-content-between align-items-center">
        <a class="navbar-brand flex-shrink-0" href="#"><img src="../assets//img//logo.png" alt="logo-image"
            class="img-fluid" />Pictures
          Store</a>
        <div class="header-content d-flex align-items-center justify-content-end">
          <form class="d-flex justify-content-end align-items-center">
            <div class="search-icon">
              <i class="fa fa-search" aria-hidden="true"></i>
              <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" />
            </div>
            <label class="switch flex-shrink-0 mb-0">
              <input id="checkbox" type="checkbox" />
              <span class="slider round"></span>
            </label>
          </form>
          <a herf="#" class="profile"><img src="Front-End/assets/img/perfil2.jpg" alt="user-image" />Pedro Luis</a>
        </div>
      </div>
      <button class="hamburger-icon">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </nav>
  </div>
</header>