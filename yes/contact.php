<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "medewerkers/includes/functions.php"; ?>

<div class="hero-image-contact">
      <div class="hero-text">
        <h1 class="display-5 fw-bold lh-1 mb-3">Contact</h1>
      </div>
    </div>
  
    
    <div class="container">
              <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                <?php contact(); ?>
                <form action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Naam</label>
                    <input type="text" name="naam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Naam">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mailadres</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefoonnummer</label>
                    <input type="tel" name="telefoon" class="form-control" id="exampleInputPassword1" placeholder="06 8912631">
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlTextarea1">Bericht</label>
                  <textarea class="form-control" name="bericht" id="exampleFormControlTextarea1" placeholder="Voorbeeld: ik kwam er achter dat ik een kleine piemel had" rows="3"></textarea>
                </div>
                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="verzend" value="Verzend ">
                </div>
                </form>  

                </div>
                <div class="col-lg-6">
                  <h1 class="display-5 fw-bold lh-1 mb-3">Neem contact op</h1>
                  <p class="lead">Vul dit formulier in en wij nemen zo spoedig mogelijk contact met je op.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6">
                  <h1 class="display-5 fw-bold lh-1 mb-3">Locatie</h1>
                  <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Amsterdam Bijlmer</li>
                    <li class="list-group-item">Maandag - Vrijdag - 12:00-18:00</li>
                    <li class="list-group-item">E-mail: jemoeder@talnet.nl</li>
                    <li class="list-group-item">Telefoon: 0611420690</li>
                  </ol>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                  <img src="media/globe.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
              </div>
            </div>
<!-- footer  -->
<?php include "includes/footer.php" ?>