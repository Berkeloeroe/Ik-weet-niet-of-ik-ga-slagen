<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="container">
  <a class="navbar-brand" href="index.php"><img src="../media/ph.png" width="50" height="30" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categories.php">Schepen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Gegevens</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['username'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../includes/logout.php">Uitloggen</a>
        </div>
      </li>
    </ul>
    </div>
  </div>
</nav>
