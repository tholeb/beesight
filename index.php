<?php
  include("config.php");
  $jsonurl = "http://api.openweathermap.org/data/2.5/weather?id=3037656&APPID=b9dc5aaa05d9ceb94fb09596e819565d";
  $json = file_get_contents($jsonurl);

  // OpenWeatherMap
  $weather = json_decode($json);
  $kelvin = $weather->main->temp;
  $celcius = $kelvin - 273.15;


  $valueTemp = rand(-10,30);
  $valueWeight = rand(15,35);
  $valueActivities = "0";
  $date = date('Y/m/d');
  $time = date('h:i:s');
  $query = $bdd->prepare("INSERT INTO mesures (date,time,temperature,weight,activities,actual_temp) VALUES (:date,:time,:value,:weight,:activities,:actual_temp)");
  $query->bindParam(':date', $date);
  $query->bindParam(':time', $time);
  $query->bindParam(':value', $valueTemp);
  $query->bindParam(':weight', $valueWeight);
  $query->bindParam(':activities', $valueActivities);
  $query->bindParam(':actual_temp', $celcius);
  $query->execute();
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
      <nav class="amber z-depth-1 navindex" style="z-index:10!important;">
        <div class="nav-wrapper">
          <ul class="left hide-on-med-and-down">
            <li><a href="<?= $wURL; ?>"><i class="material-icons left">home</i> Accueil</a></li>
            <li><a href="#charts"><i class="material-icons left">show_chart</i> Graphiques</a></li>
            <li><a href="#table"><i class="material-icons left">table_chart</i> Tableau de bord</a></li>
            <li><a href="#about"><i class="material-icons left">group</i> À propos</a></li>
          </ul>
          <a href="#!" class="brand-logo hide-on-large-only show-on-medium-and-down">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class='dropdown-trigger' href='#' data-target='diagrams'><i class="material-icons left">insert_chart</i> Graphiques<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="login" class="modal-trigger"><i class="material-icons cetner">account_circle</i></a></li>
          </ul>
        </div>
        <div id="scroll-line" class="amber">
            <div class="scroll-line"></div>
        </div>
    </nav>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <div class="section">
          <div class="container">
              <div class="row">
                  <div class="col s12 center">
                      <img src="assets/img/logo/bee.png" style="width:30%;" class="center animate fadeInLeftBig">
                      <br>
                  </div>
                  <h3 class="black-text center animate fadeInLeftBig">BEESIGHT </h3>
                  <h4 class="black-text center animate fadeInLeftBig">Keep your hives on sight </h4>
                  <div class="container">
                      <div class="row">
                          <div class="container">
                              <div class="row">
                                  <div class="divider"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row animate fadeInRightBig">
                      <div class="col s12 m6 l6 xl4">
                          <div class="icon-block">
                              <h2 class="center amber-text"><i class="material-icons medium fas fa-chart-line"></i></h2>
                              <h5 class="center amber-text">Graphiques</h5>
                              <p class="light black-text center">text</p>
                          </div>
                      </div>
                      <div class="col s12 m6 l6 xl4">
                          <div class="icon-block">
                              <h2 class="center amber-text"><i class="material-icons medium fas fa-archive"></i></h2>
                              <h5 class="center amber-text">Inoffensif</h5>
                              <p class="light black-text center">text</p>
                          </div>
                      </div>
                      <div class="col s12 m12 l12 xl4">
                          <div class="icon-block">
                              <h2 class="center amber-text"><i class="material-icons medium fas fa-tools"></i></h2>
                              <h5 class="center amber-text">Facile d'utilisation</h5>
                              <p class="light black-text center">text</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id="charts">
        <div class="container">
          <?php $nbdd = $bdd->query('SELECT count(*) FROM mesures')->fetchColumn(); ?>
          <?php
            $sql = "SELECT *,DATE_FORMAT(time,'%Hh%i') as time FROM `mesures` ORDER BY id DESC LIMIT 50";
            $result = $bdd->query($sql);
            $temp = array();
            $tempext = array();
            $timestamp = array();
            while ($row = $result->fetch()) {
            	$temp[] = $row['temperature'];
              $tempext[] = $row['actual_temp'];
              $timestamp[] = $row['time'];
            }
            $tempRange = array_values($timestamp);
            //print $tempRange[0];
            $temp0 = "'".$tempRange[0]."'";
            //print $tempRange[count($array_values) - 1];
          ?>
          <div class="row">
            <div id="basic-area" class="card-panel col s12 m12 l12"></div><!-- <iframe src="http://api.openweathermap.org/data/2.5/weather?id=3037656&mode=html&APPID=b9dc5aaa05d9ceb94fb09596e819565d" class="col m2 l2 hide-" style="border:none"></iframe> -->
          </div>
        </div>
      </div>

      <div id="table">
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
                        <th>Date et heure</th>
                        <th>Température</th>
                        <th>Masse</th>
                        <th>Activités</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sql = "SELECT *,DATE_FORMAT(date,'%d/%m/%Y') as date FROM `mesures` LIMIT 500";
                      $reponse = $bdd->query($sql);
                      while ($data = $reponse->fetch()) {
                        ?>
                        <tr>
                          <td><?= $data['date']." ".$data['time'] ?></td>
                          <td><?= $data['temperature'] ?>°C</td>
                          <td><?= $data['weight'] ?>kg</td>
                          <td><?= $data['activities'] ?>kg</td>
                        </tr>
                      <?php } $reponse->closeCursor(); ?>
                    </tbody>
                  </table>
                </div>
                <p class="hide-on-large-only show-on-medium-and-down black-text center">Désolé l'affichage via un appareil téléphone ou tablette est impossible</p>
                <div class="card-action">
                  <a class="waves-effect waves-light btn amber btn-small" href=""><i class="material-icons left">data_usage</i> Accéder</a>
                  <a href="" class="white-text"><span class="new badge amber white-text" data-badge-caption="lignes dans le bdd"> <?= $nbdd ?></span></a>
                </div>
              </div>
            </div>
            <!-- End Database -->
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
          <a class="grey-text text-lighten-4 right" href="https://github.com/tholeb/tlb_beesight/blob/master/LICENSE">MIT Licence</a>
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
            type: 'spline'
          },
          title: {
              text: 'Graphique de la température'
          },
          subtitle: {
              text: 'Température interne de la ruche en fonction de la température extérieure'
          },
          yAxis: {
              title: {
                  text: 'Température (°C)'
              }
          },
          xAxis: {
            title: {
              text: 'Heure (h:m)'
            },
            categories: [<?php echo "'".implode( "', '", $timestamp)."'"; ?>]
          },
          legend: {
              layout: 'vertical',
              align: 'center',
              verticalAlign: 'bottom'
          },
          plotOptions: {
              series: {
                  label: {
                      connectorAllowed: false
                  },
                  marker: {
                    enabled: false
                },
              }
          },
           series: [{
             name: 'Température interne',
             data: [<?php echo join($temp, ', '); ?>]
           },
           {
             name: 'Température extérieure',
             data: [<?php echo join($tempext, ', '); ?>]
           }],
          responsive: {
              rules: [{
                  condition: {
                      maxWidth: 500
                  },
                  chartOptions: {
                      legend: {
                          layout: 'horizontal',
                          align: 'center',
                          verticalAlign: 'bottom'
                      }
                  }
              }]
          }
        });
      </script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
      <script src="assets/js/datatables.js" charset="utf-8"></script>
    </body>
  </html>
