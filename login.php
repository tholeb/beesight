<?php include("config.php"); ?>

<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php include('assets/resources/meta/head.php') ?>
      <title><?= $GLOBAL['title'] ?> | Connexion</title>
    </head>

    <body>
      <div class="container">
        <div class="row">
          <div class="col s12 m9 l6 offset-l3 offset-m1">
            <div class="card white z-depth-1" style="border:1px solid ;border-color:#ffc107;">
              <div class="card-content white-text">
                <span class="card-title black-text">Se connecter</span>
                <div class="row">
                  <form class="col s12" action="<?php echo htmlspecialchars('assets/resources/forms/login_query.php'); ?>" method="post">
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="icon_email" type="email" class="validate" name="email">
                        <label for="icon_email">Email</label>
                        <span class="helper-text" data-error="Veuillez renseigner un email valide" data-success="Email valide"></span>
                      </div>
                      <div class="input-field col s12">
                        <i class="material-icons prefix">more</i>
                        <input id="icon_pswd" type="password" class="validate" name="password">
                        <label for="icon_pswd">Mot de passe</label>
                        <span class="helper-text" data-error="Veuillez mettre un mot de passe d'au moins 8 caractères" data-success="right"></span>
                      </div>
                      <div class="input-field col s12">
                        <i class="material-icons prefix">more</i>
                        <input id="icon_pswvalidate" type="password" class="validate" name="password_conf">
                        <label for="icon_pswvalidate">Valider votre mot de passe</label>
                        <span class="helper-text" data-error="les mots de passes ne sont pas identiques" data-success="right"></span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-action">
                <button href="#" class="btn amber" type="submit" name="submit"> Valider</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="page-footer amber">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Qui sommes nous ?</h5>
              <p class="grey-text text-lighten-4">Nous sommes un groupe de 4 élèves en STI2D SIN au lycée Chevrollier, à Angers. BeeSight est notre projet de fin d'année (2019-2020) pour le BAC.</p>
              <br><iframe src="https://ghbtns.com/github-btn.html?user=tholeb&repo=tlb_beesight&type=watch&count=true&size=large"height="30px" style="border-style:none;"></iframe>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2019-2020 Copyright <a href="https://github.com/tholeb/tlb_beesight" class="black-text">BeeSight's members
         </a>
          <a class="grey-text text-lighten-4 right" href="about-us">About us</a>
          </div>
        </div>
      </footer>
      <script type="text/javascript">
      function CheckPassword(inputtxt)
      {
        var passw=  /^[A-Za-z]\w{7,14}$/;
        if(inputtxt.value.match(passw))
      {
        return true;
      }
      else
      {
        alert('Wrong...!');
        return false;
      }
      }
      </script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" charset="utf-8"></script>
      <script src='https://code.highcharts.com/highcharts.js'></script>
      <script src='https://code.highcharts.com/modules/exporting.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="assets/js/init.js" charset="utf-8"></script>
      <script src="assets/js/main.js" charset="utf-8"></script>
      <script src="assets/js/charts.js" charset="utf-8"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
      <script src="assets/js/datatables.js" charset="utf-8"></script>
    </body>
  </html>
