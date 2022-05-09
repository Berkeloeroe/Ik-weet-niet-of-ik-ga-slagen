<?php include "includes/header.php"; ?>
<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

<div class="container" id="test">
  <div class="row">
    <!-- kolom L -->
    <div class="col">
     </div>
         <!-- kolom L -->

        <div class="col-6">
            <h1 class="text-center">Inloggen klant</h1>
            <form action="includes/loginklant.php" method="post">

            <div class="form-group">
            <label for="naam">Gebruikersnaam</label>
            <input type="text" name="naam" class="form-control" placeholder="gebruikersnaam">
            </div>

            <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" name="wachtwoord" class="form-control" placeholder="wachtwoord">
            </div>

            <div class="form-group">
            <input type="submit" name="logink" id="btn-login" class="btn btn-primary  btn-lg btn-block" value="Login">
            <a class="btn btn-primary  btn-lg btn-block" href="registration.php">Nog geen account?</a>
            </div>
            </form>
      </div>
          <!-- kolom R -->
    <div class="col">
          <!-- kolom R -->

  </div>
</div>
</div>

<!-- https://mdbootstrap.com/docs/standard/navigation/footer/ -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted" id="footer">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Amogus inc.
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="index.php" class="text-reset">Home</a>
          </p>
          <p>
            <a href="contact.php" class="text-reset">Contact</a>
          </p>
          <p>
            <a href="loginform-klant.php" class="text-reset">Klant</a>
          </p>
          <p>
            <a href="loginform-medewerker.php" class="text-reset">Medewerker</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Amsterdam bijlmer</p>
          <p><i class="fas fa-home me-3"></i> Maandag - Vrijdag</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            jemoeder@talnet.nl
          </p>
          <p><i class="fas fa-phone me-3"></i> + 06 114 206 90</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(230, 230, 230);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Randi.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>