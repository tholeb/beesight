<?php include("config.php"); ?>

<!DOCTYPE html>
  <html lang="fr">
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link type="text/css" rel="stylesheet" href="assets/css/style.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" type="image/png" href="<?= $wURL; ?>assets/img/logo/bee.png">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <script src="https://kit.fontawesome.com/37a49bd997.js" crossorigin="anonymous"></script>
      <title><?= $GLOBAL['title'] ?> | Accueil</title>
    </head>

    <body>
      <div class="parallax-container">
        <div class="parallax"><img src="assets/img/background/hive.png"></div>
        <div class="container">
          <img src="assets/img/logo/hive.png" alt="" style="padding-top:70%:">
        </div>
      </div>
      <ul id='diagrams' class='dropdown-content'>
        <li><a href="#!" class="amber-text"><i class="fas fa-balance-scale material-Icons left amber-text"></i>Masse</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="#!" class="amber-text"><i class="fas fa-thermometer-half material-Icons left amber-text"></i>Température</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper amber">
          <ul class="left hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
          <a href="#!" class="brand-logo hide-on-large-only show-on-medium-and-down">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class='dropdown-trigger' href='#' data-target='diagrams'>Graphiques<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="login" class="modal-trigger"><i class="material-icons right">account_circle</i> Mon compte</a></li>

          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <div class="container">
        <div id="basic-area" class="card-panel"></div>
      </div>

      <div class="container">
        <div class="row">
          <!-- Database -->
          <div id="man" class="col s12 m12 l12 show-on-large hide-on-med-and-down">
            <div class="card material-table">
              <div class="table-header">
                <span class="table-title">Valeurs de masse</span>
                <div class="actions">
                  <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                </div>
              </div>
              <div class="show-on-large hide-on-med-and-down">
                <table class="datatable_database">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <p class="hide-on-large-only show-on-medium-and-down black-text center">Désolé l'affichage via un appareil téléphone ou tablette est impossible</p>
              <div class="card-action">
                <a class="waves-effect waves-light btn amber-text btn-small" href="<?= $wURL ?>government/bcso/database"><i class="material-icons left">data_usage</i> Accéder</a>
                <a href="<?= $wURL ?>government/bcso/database" class="white-text"><span class="new badge amber-text white-text" data-badge-caption="lignes dans le bdd"> </span></a>
              </div>
            </div>
          </div>
          <!-- End Database -->
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <footer class="page-footer amber">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Footer Content</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
          © 2014 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>
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
