<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="FrontEnd/images/Ellipse 1.png" alt="imgLogo" /></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" aria-current="page" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="about.php">About</a>
        <a class="nav-item nav-link" href="Contact.php">contact</a>
        <?php if (isset($_SESSION['user'])) : ?>
          <a class="nav-item nav-link" href="profileUser.php">Profile</a>
          <a class="nav-item nav-link btn btn-sign-in" href="logout.php">Log Out</a>
        <?php else : ?>
          <a class="nav-item nav-link btn btn-sign-in" href="login.php">Sign In</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>