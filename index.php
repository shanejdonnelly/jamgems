<?php 
  include('includes/functions.php'); 
  do_header('Home', '');
  
  include('includes/nav.php');
?>


    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <!--
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>
      -->
      
        <div class="row" id="plugin_wrap">
          <div class="slice span1" ></div>
          <div class="slice span1" ></div>
          <div class="slice span1" ></div>
          <div class="slice span1" ></div>
          <div class="slice span1" ></div>
          <div class="slice span1" ></div>
          <div class="slice span1" ></div>
          <div class="slice span1" ></div>       
          <div class="slice span1" ></div>       
          <div class="slice span1" ></div>       
          <div class="slice span1" ></div>       
          <div class="slice span1" ></div>  
        </div>
        <div class="row">
          <p id="watch_again" class="span12">again?</p>
        </div>
      
      <!-- Example row of columns -->
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
          <p><a class="btn" href="#">Portfolio &raquo;</a></p>
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
