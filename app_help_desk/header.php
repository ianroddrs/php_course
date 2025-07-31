    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <?php if(isset($_SESSION['autenticado']) && $_SESSION['autenticado']){?>
            <li class="nav-item">
            <a href="logoff.php" class="nav-link">SAIR</a>
            </li>
        <?php } ?>
      </ul>
    </nav>