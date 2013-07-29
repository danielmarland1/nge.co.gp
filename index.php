
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="VBJzpO_Vv60agBJ-3XQrVO5ls0sG401p-l8GRMYyajk">
    <title>Neon Genesis Evangelion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Neon Genesis Evangelion">
    <meta name="author" content="@danielmarland1">

    <!-- Le styles -->
    <link href="http://nge.co.gp/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://nge.co.gp/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
      opacity: .8;
      -moz-opacity: 0.8; /* Make it look a little transparent */
      -moz-transition-duration: 0.5s;
    }
    .navbar-wrapper:hover {
     opacity: .95;
     -moz-opacity: 0.95; /* Make it look a little transparent */
     -moz-transition-duration: 0.5s;
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
      width: 100%;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      min-height: 500px;
    }

    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: auto;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      /*text-shadow: 0 1px 1px rgba(0,0,0,.4);*/
      text-shadow: 1px 1px 2px black, 0 0 1em #000000, 0 0 0.2em #000000;
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        min-height: 500px;
      }
      .carousel img {
        min-width: 100%;
        height: auto;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
        width: 120%;
      }
      .carousel .container {

      }
      .carousel .item {
        min-height: 300px;
      }
      .carousel img {
        margin-top: 70px;
        min-width: 100%;
        height: auto;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 70px;
      }
      .carousel-caption h1 {
        font-size: 18px;
      }
      .carousel-caption .lead,
      .carousel-caption {
        font-size: 12px;
      }
      
      .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://twitter.github.io/bootstrap/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://lh3.googleusercontent.com/-U6HZL8kYfas/UfakmD7ff2I/AAAAAAAAI1w/6Q1jMu9zK0k/s144-no/favicon_144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://lh4.googleusercontent.com/-_rvFYWY3r4A/UfakmH_LbiI/AAAAAAAAI10/fClxIkS4a2I/s114-no/favicon_114.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://lh4.googleusercontent.com/-cSFhp29MnZ4/UfaknEd8IHI/AAAAAAAAI2E/Y7yMdLQjjSc/s72-no/favicon_72.png">
                    <link rel="apple-touch-icon-precomposed" href="http://lh3.googleusercontent.com/-YZ-X4bow5Aw/UfakmDiobUI/AAAAAAAAI2A/nPlQoMZ8yOk/s57-no/favicon_57.png">
                                   <link rel="shortcut icon" href="http://nge.co.gp/favicon.ico">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Neon Genesis Evangelion</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#" itemprop="url">Startseite</a></li>
                <li><a href="#wasistnge" itemprop="url">Was ist NGE?</a></li>
                <li><a href="#worumgehtesinnge" itemprop="url">Inhalt</a></li>
                <li><a href="#wasistroe" itemprop="url">Rebuild?</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mehr <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://youtube.com/danielmarland1" itemprop="url">YouTube</a></li>
                    <li><a href="http://gplus.to/danielmarland1" itemprop="url">Google+</a></li>
                    <li><a href="http://twitter.com/danielmarland1" itemprop="url">Twitter</a></li>
                    <li><a href="http://rutube.ru/video/person/285172/" itemprop="url">RuTube</a></li>
                    <li><a href="http://www.myvideo.de/Community/Mitglieder/Profil?searchMember=12943505" itemprop="url">MyVideo</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Ãœber diese Seite</li>
                    <li><a href="mailto:brightandblueforever@gmail.com?subject=nge.co.gp" itemprop="url">Kontakt</a></li>
                    <!-- <li><a href="http://nge.co.gp/faq">FAQ</a></li> -->
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://lh6.googleusercontent.com/-iRaVDjTUEdc/Ue_kXmmfAGI/AAAAAAAAI0E/r1nbUHcPvn0/s678-no/Unbenannt.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Neo Pokémon Evangelion</h1>
              <p class="lead">Das ist keine verschollene Staffel der Animeserie um den süßen Pikachu und seine lalustigen Kollegen, sondern eine Parodie auf Neon Genesis Evangelion.</p>
              <a class="btn btn-large btn-primary" href="http://www.fullmetalpantsu.de/neo-pokemon-evangelion/">Jetzt ansehen</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://lh6.googleusercontent.com/-UYuwlHgkr6w/UX_Ck9zchII/AAAAAAAAGSg/AtHucrWB_w0/d/eva_333_logo_black_on_blue.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Rebuild of Evangelion 3.33 in Japan auf DVD/Blu-Ray</h1>
              <p class="lead">Seit dem 24. April 2013 ist "Rebuild of Evangelion 3.0: You can (not) redo" jetzt nun auch auf DVD und Blu-Ray erhältlich, zumindest in Japan.</p>
              <a class="btn btn-large btn-primary" href="http://www.amazon.co.jp/%E3%83%B1%E3%83%B4%E3%82%A1%E3%83%B3%E3%82%B2%E3%83%AA%E3%83%B2%E3%83%B3%E6%96%B0%E5%8A%87%E5%A0%B4%E7%89%88-EVANGELION-REDO-%E5%88%9D%E5%9B%9E%E9%99%90%E5%AE%9A%E7%89%88-%E3%82%AA%E3%83%AA%E3%82%B8%E3%83%8A%E3%83%AB%E3%83%BB%E3%82%B5%E3%82%A6%E3%83%B3%E3%83%89%E3%83%88%E3%83%A9%E3%83%83%E3%82%AF%E4%BB%98%E3%81%8D/dp/B00BHO7M5O/ref=sr_1_2?ie=UTF8&qid=1367266982&sr=8-2&keywords=evangelion" itemprop="url">Jetzt bestellen</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://lh6.googleusercontent.com/-RhVzkC_NJrI/UX_FPJmUDyI/AAAAAAAAGTI/6wBTGPmesNE/d/eva_30_poster_shinji_kaworu.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Neuer Trailer für Rebuild of Evangelion 3.0</h1>
              <p style="text-shadow: 1px 1px 2px black, 0 0 1em #000000, 0 0 0.2em #000000;" class="lead">Ein neuer Trailer ist aufgetaucht, der jede Menge neue Szenen zeigt und mehr als nur ein Spoiler ist. In Deutschland soll Evangelion 3.0 im Herbst 2013 veröffentlicht werden.</p>
              <a class="btn btn-large btn-primary" href="http://plus.google.com/photos/115555053516393935449/albums/5843115620804877665/5843115619211269570" itemprop="url">Jetzt ansehen</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://lh3.googleusercontent.com/-VnWEQtSft68/UX_VJ5qxIoI/AAAAAAAAGTw/trvcUHMZqLA/d/eva_30_screenshot_wunder_explosion.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Rebuild of Evangelion 3.0 Preview</h1>
              <p class="lead">Die ersten 6 Minuten des Films wurden veröffentlicht.</p>
              <a class="btn btn-large btn-primary" href="http://www.myvideo.de/watch/9045431/Rebuild_of_Evangelion_3_0_You_can_not_redo_Vorschau" itemprop="url">Jetzt ansehen</a>
            </div>
          </div>
        </div>
        </div><!--
        <div class="item">
          <img src="../assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>-->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <!--<img class="img-circle" data-src="holder.js/140x140">-->
          <h2>Der Stream</h2>
          <p>Schau dir jetzt direkt alle Folgen an!</p>
          <p><a class="btn" href="http://nge.co.gp/youtube/?c=1" itemprop="url">Stream &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <!--<img class="img-circle" data-src="holder.js/140x140">-->
          <h2>Die Community</h2>
          <p>Du suchst Gleichgesinnte? Dann trete jetzt der deutschprachigen Community auf Google+ bei!</p>
          <p><a class="btn" href="https://plus.google.com/communities/102326362184433137469" itemprop="url">Community &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <!--<img class="img-circle" data-src="holder.js/140x140">-->
          <h2>Das Wiki</h2>
          <p>Du suchst mehr Informationen? Dann besuche das NGE Wiki. Wenn du willst kannst du sogar Artikel beisteuern!</p>
          <p><a class="btn" href="http://nge-wiki.de/" itemprop="url">Wiki &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div itemscope itemtype="http://schema.org/Movie" id="wasistnge" class="featurette">
        <img class="featurette-image pull-right" src="http://lh4.googleusercontent.com/-bZXgizJydDk/UfanL_pWiLI/AAAAAAAAI3M/bm52C4849-k/w400-h146-no/evangelion_logo.jpg">
        <h2 class="featurette-heading">Was ist <span class="muted" itemprop="name"><i>Neon Genesis Evangelion</i></span> ?</h2>
        <p class="lead" itemprop="description">Neon Genesis Evangelion (jap. &#26032;&#19990;&#32000;&#12456;&#12532;&#12449;&#12531;&#12466;&#12522;&#12458;&#12531; <i>Shin Seiki Evangerion</i>, auch kurz NGE oder EVA) ist eine international erfolgreiche Anime-Fernsehserie aus dem Jahr 1995. Sie bildet die Grundlage für mehrere später erschienene Filme, Mangas und Videospiele und gilt als eine der bedeutendsten Anime-Produktionen. Das Werk nimmt Bezug auf viele ältere Filme, Serien und Bücher und hatte großen Einfluss auf nachfolgende Produktionen. NGE erschloss dem Medium Anime in Japan und international ein neues Publikum.</p>
      </div>

      <hr class="featurette-divider">

      <div id="worumgehtesinnge" class="featurette">
        <img class="featurette-image pull-left" src="http://lh5.googleusercontent.com/-n4zvPrudnLM/UfanMPhQTqI/AAAAAAAAI3Q/Jhg_wMiTQmo/s200-no/nerv_logo.gif">
        <h2 class="featurette-heading">Und worum geht es genau in <span class="muted"><i>Neon Genesis Evangelion</i></span> ?</h2>
        <p class="lead">Die Serie handelt vom Kampf gegen Engel genannte Kreaturen unbekannter Herkunft, die die Menschheit angreifen. Ihnen werden von Jugendlichen gesteuerte Kampfmaschinen entgegengesetzt, die <i>Evangelions</i>. Mit fortschreitender Handlung werden zunehmend auch die psychischen Probleme der Charaktere thematisiert. Der Anime ist in die Genres Science-Fiction, Action und Mecha einzuordnen und enthält verschiedene Elemente aus Philosophie und Psychologie.</p>
      </div>

      <hr class="featurette-divider">

      <div id="wasistroe" class="featurette">
        <img class="featurette-image pull-right" src="http://lh3.googleusercontent.com/-zdD1p8UDB6s/UfanMow-jfI/AAAAAAAAI3Y/DrZU3nR9X1I/w640-h306-no/roe30_chars.png">
        <h2 class="featurette-heading">Was ist mit <span class="muted"><i>Rebuild of Evangelion (Evangelion 1.0, usw.)</i></span> ?</h2>
        <p class="lead">Bei Rebuild of Evangelion handelt es sich um eine Neuverfilmung der Fernsehserie in Form von vier Filmen, die unter der Leitung von Hideaki Anno produziert werden. Dabei wird die bereits etablierte Serie außen vor gehalten und die Handlung zum Großteil neu interpretiert und verändert. Dazu zählt auch die Einführung neuer Charaktere oder der vermehrte Einsatz von Computergrafik, der 1995 in dieser Form noch nicht möglich war. Laut Hideaki Anno ist „Evangelion alt, aber seitdem gab es keinen neueren Anime.“ Er will Evangelion einem neuen Publikum nahe bringen und eine neue Sicht auf die Welt hervorrufen. Die Drehbücher der Filme schrieb Anno selbst; bei der Regiearbeit assistierten ihm Kazuya Tsurumaki und Masayuki, sowie für den dritten Teil zusätzlich noch Mahiro Maeda.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#"><b>^</b></a></p>
        <p>&copy; 2013 <a href="http://gplus.to/danielmarland1">Daniel Marland</a> &middot; Neon Genesis Evangelion, EVA, Project-E, sowie alle anderen Marken und Warenzeichen sind Eigentum von GAINAX, studio khara und/oder deren jeweils rechtmäßigen Inhabern &middot; <a href="mailto:brightandblueforever@gmail.com?subject=nge.co.gp">Kontakt</a> <!-- &middot; <a href="http://nge.co.gp/faq">FAQ</a> --> </p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://nge.co.gp/bootstrap/assets/js/jquery.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-popover.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-button.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-collapse.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-carousel.js"></script>
    <script src="http://nge.co.gp/bootstrap/assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="http://nge.co.gp/bootstrap/assets/js/holder/holder.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-41198117-1', 'co.gp');
    ga('send', 'pageview');

    </script>
   <!-- This ad is way too intrusive! -->
  </body>
</html>
