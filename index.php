<?php include("config.php"); ?>

<?php
  $value = rand(10,100);
	$date = date('Y/m/d h:i:s');
	 {
	   $query = $bdd->prepare("INSERT INTO temperature (Timestamp,value) VALUES (:date,:value)");
     $query->bindParam(':date', $date);
	   $query->bindParam(':value', $value);
	   $query->execute();
	 }
 ?>

<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php include('assets/resources/meta/head.php') ?>
      <title><?= $GLOBAL['title'] ?> | Accueil</title>
    </head>

    <body>
      <div class="parallax-container">
        <div class="parallax"><img src="assets/img/background/hive.png"></div>
        <img src="assets/img/logo/naturalhive.png" alt="wallpaper" class="right">
        <img src="assets/img/logo/bee.png" alt="bee" class="bee">
      </div>
      <ul id='diagrams' class='dropdown-content'>
        <li><a href="#!" class="amber-text"><i class="fas fa-balance-scale material-Icons left amber-text"></i>Masse</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="#!" class="amber-text"><i class="fas fa-thermometer-half material-Icons left amber-text"></i>Température</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper amber">
          <ul class="left hide-on-med-and-down">
            <li><a href="sass.html"><i class="material-icons left">home</i> Accueil</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
          <a href="#!" class="brand-logo hide-on-large-only show-on-medium-and-down">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class='dropdown-trigger' href='#' data-target='diagrams'><i class="material-icons left">insert_chart</i> Graphiques<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="login" class="modal-trigger"><i class="fas fa-sign-in-alt material-icons left"></i> Se connecter</a></li>
            <li><a href="login" class="modal-trigger"><i class="fas fa-sign-in-alt material-icons left"></i> S'enregistrer</a></li>
            <li><a href="login" class="modal-trigger"><i class="material-icons left">account_circle</i> Mon compte</a></li>
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
        <?php
          $sql = "SELECT * FROM temperature ORDER BY id ASC";
          $result = $bdd->query($sql);
          $temperatures = array();
          $dates = array();
          while ($row = $result->fetch()) {
          	$temperatures[] = $row['value'];
            $dates[] = $row['Timestamp'];
          }
        ?>
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
                <a class="waves-effect waves-light btn amber btn-small" href=""><i class="material-icons left">data_usage</i> Accéder</a>
                <a href="" class="white-text"><span class="new badge amber white-text" data-badge-caption="lignes dans le bdd"> </span></a>
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
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" charset="utf-8"></script>
      <script src='https://code.highcharts.com/highcharts.js'></script>
      <script src='https://code.highcharts.com/modules/exporting.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="assets/js/init.js" charset="utf-8"></script>
      <script src="assets/js/main.js" charset="utf-8"></script>
      <!-- <script src="assets/js/charts.js" charset="utf-8"></script> -->
      <script type="text/javascript">
      Highcharts.chart('basic-area', {
          chart: {
              type: 'area'
          },
          title: {
              text: 'Température de la ruche'
          },
          subtitle: {
              text: 'affichage des température de la ruche en fonction du temps'
          },
          xAxis: {
              allowDecimals: true,
              labels: {
                  formatter: function () {
                      return this.value; // clean, unformatted number for year
                  }
              }
          },
          yAxis: {
              title: {
                  text: 'Température de la ruche'
              },
              labels: {
                  formatter: function () {
                      return this.value + '°C';
                  }
              }
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.y:,.0f}°C </b><br/>le {point.x}'
          },
          plotOptions: {
              area: {
                  pointStart: 1940,
                  marker: {
                      enabled: false,
                      symbol: 'circle',
                      radius: 2,
                      states: {
                          hover: {
                              enabled: true
                          }
                      }
                  }
              }
          },
          series: [{
          	name: 'Température interne',
          	data: [<?php echo join($temperatures, ', '); ?>]
          }]
      });


      </script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
      <script src="assets/js/datatables.js" charset="utf-8"></script>
    </body>
  </html>
