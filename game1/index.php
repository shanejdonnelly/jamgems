<?php 
  include('../includes/functions.php'); 
  do_header('Silly Math Game', '');
  
  include('../includes/nav.php');
?>

    <link rel="stylesheet" href="styles/58bac417.main.css">
          <!--

          GAME

          -->
          <div id="game" class="game container">

            <canvas id="board" width="800" height="600">
            This browser can not run this game (canvas support missing).
            </canvas>
            <div id="single_question">
              <input type="text"/>
            </div>
            <div id="house"><!-- content appended in script  --></div>
            <div id="troll"><!-- content appended in script  --></div>
            <div id="score"></div>
            <div id="timer"><p>0</p></div>
          </div><!-- #game -->
          <!--

          MAIN MENU

          -->
          <div id="main_menu" class="container">
            <div class="span3">&nbsp;</div>
            <div class="span5" id="main_menu_content">
              <h1>Math Town</h1>
              <div id="pick_player">
                <h2>Who's Playing?</h1>
                <ul id="player_list">

                </ul>
                <ul>
                  <li class="btn btn-warning" id="new_player">New Player</li>
                </ul>
              </div>
              <div id="pick_game">
                <h2>Pick one...</h2>
                <ul id="game_mode">
                  <li class="btn btn-success" id="play_mult_mode">Multiplication</li>
                  <li class="btn btn-success" id="play_add_mode">Addition</li>
                  <li class="btn btn-warning" id="change_user">Change Player</li>
                </ul>          
              </div>
              <!--

              JOIN 
              -->        
              <div id="join">
                <h1 class="" style="text-align:center;">New Player</h1>
                <form id="join_form" class="" style="margin-left:30px;"> 
                  <input style="float:left;" class="" type="text" placeholder="Name">
                  <div class="char girl1"></div>
                  <div class="char girl2"></div>
                  <div class="char boy1"></div>
                  <div class="char boy2"></div>
                  <button type="submit" class="btn btn-success" style="float:left;clear:left;">Let's Play!</button>
                </form>
              </div><!-- #join -->

            </div>
            <div class="span3">&nbsp;</div>
          </div><!-- #main_menu -->
        </div>
        <img src="images/838d78c0.town.png" id="town_image" class="image_load" />
        <img src="images/db4316c0.vehicles.png" id="vehicles_image" class="image_load" />
        <img src="images/f317236e.char.gif" id="characters_image" class="image_load" />
        <audio src="audio/coins.mp3" id="coins_sound" />
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


        <script>window.jQuery || document.write('<script src="scripts/vendor/8bc61845.jquery.min.js"><\/script>')</script>



          <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
          <script>
            /*
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
              g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
              s.parentNode.insertBefore(g,s)}(document,'script'));
            */
          </script>


          <script src="scripts/2098b2d1.plugins.js"></script>



        </body>
      </html>
