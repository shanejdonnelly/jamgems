<?php 
  include('includes/functions.php'); 
  do_header('Home', '');
  
  include('includes/nav.php');
?>


    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      
      <div class="row" style="margin-top:30px; margin-bottom:30px; ">
       <div class="span6"> 
        <h1 style="font-size:60px; line-height:70px;">Hello, world!</h1>
        <p style="font-size:18px; line-height:24px;">My name is Shane. I make stuff.</p>
        <p><a id="watch_again" class="btn btn-primary btn-large">Watch that again?</a></p>
        </div>
        <div class="span6 hero_message">
          <h1>Kind of cool, huh?</h1>
          <h1>Try rolling over it.</h1>
        </div>
      </div>
      
      
        <div class="row" id="plugin_wrap">
          <div class="slice" ></div>
          <div class="slice" ></div>
          <div class="slice" ></div>
          <div class="slice" ></div>
          <div class="slice" ></div>
          <div class="slice" ></div>
          <div class="slice" ></div>
          <div class="slice" ></div>       
          <div class="slice" ></div>       
          <div class="slice" ></div>       
          <div class="slice" ></div>       
          <div class="slice" ></div>  
        </div>
      
      <!-- Example row of columns -->
      <!--
      <div class="row">
        <div class="span4">
          <h2>About Me</h2>
          <div id="recent_post"></div>
           <p></p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Work</h2>
          <p>Take a look at the sites I've built:</p>
          <p><a class="btn" href="portfolio.php">Portfolio &raquo;</a></p>
          <p>Coding projects in varying states of disrepair:</p>
          <p><a target="_blank" class="btn" href="https://github.com/shanejdonnelly">Github &raquo;</a></p>
          <p>My resume:</p>
          <p><a target="_blank" class="btn" href="http://www.linkedin.com/in/shanejdonnelly">LinkedIn &raquo;</a></p>
        </div>
        <div class="span4">
          <h2 id="bar">Contact</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>

      </div><!-- .row -->
      
    </div> <!-- /container -->

<?php include('includes/footer.php'); ?>
