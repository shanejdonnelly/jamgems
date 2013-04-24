<?php 
  include('includes/functions.php'); 
  do_header('Portfolio', '');
  
  include('includes/nav.php');
?>

    <div class="container">
      
      <!-- Portfolio -->
      
      <!-- Timberland Lookbook -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://lookbook.timberland.com/2013/fall/tree/pr" title="Visit Timberland Lookbook" target="_blank"><img src="images/tbl_lookbook_400.jpg" alt="Timberland Lookbook" /></a>
        </div>
        <div class="span2">
          <h3 class="code">Code Samples</h3>
          <p class="button_wrap"><a class="btn " target="_blank" href="https://github.com/shanejdonnelly/portfolio/tree/master/timberland_lookbook">JS &raquo;</a></p>
</div>
        <div class="span5">
          <h2>Timberland Lookbook<sup>&reg;</sup></h2>
          <hr>
          <h3>Technologies:</h3>
          <div class="row">
            <p class="span1">Javascript</p>
            <p class="span1">XML</p>
            <p class="span1">jQuery</p>
          </div><!-- .row -->
          <div class="row">
            <p class="span1">HTML5</p>
            <p class="span1">CSS3</p>

          </div><!-- .row --> 
          <h3>About:</h3>      
          <p>
            One of the biggest challenges with this site - for the front end - was dealing with the 75+ large images that lived on the 
            main page. The <a href="http://www.appelsiini.net/projects/lazyload" title="Lazyload jQuery plugin" >Lazyload jQuery plugin</a> fit the bill perfectly. It uses data tags to 
            house the actual image src and a placeholder image until the image is near the viewport.
          </p>
          <p>
            I didn't use a javascript framework for this site, instead relying 
            on a few namespace chunks and jQuery plugins where appropriate to keep the code lean and organized. I also worked closely with the back end developer on this project to integrate the front end code with a custom PHP framework.</p> 
        </div>
      </div><!-- .row -->

      <hr>

      <!-- Timberland PRO -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://timberlandpro.com" title="Visit Timberland PRO" target="_blank"><img src="images/tblPro_400.jpg" alt="Timberland PRO" /></a>
        </div>
        <div class="span2">
          <h3 class="code">Code Samples</h3>
          <p class="button_wrap"><a class="btn" target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_pro/pro_util.js">JS &raquo;</a></p>
          <p class="button_wrap"><a class="btn" target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_pro/script.js">JS &raquo;</a></p>
        </div>
        <div class="span5">
          <h2>Timberland<sup>&reg;</sup> PRO</h2>
          <hr>
          <h3>Technologies Used:</h3>
          <div class="row">
            <p class="span1">HTML5</p>
            <p class="span1">CSS3</p>
            <p class="span1">jQuery</p>
          </div><!-- .row -->
          <div class="row">
            <p class="span1">AJAX</p>
            <p class="span1">Sammy.js</p>

          </div><!-- .row -->     
          <h3>About:</h3>        
          <p>
            Timberland PRO was envisioned as a completely AJAX site - with no full page loads after the initial page. 
            This was in large part due to the accordion that houses the bulk of the site content.
          </p>
          <p>
            This was my first use of a javascript framework in a production site. Sammy.js was a lightweight solution that 
            enabled me to easily create custom routes to manage state.  
          </p>  
        </div>
      </div><!-- .row -->            

      <hr>

      <!-- Timberland BootCo -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://timberlandbootcompany.com" title="Visit Timberland Boot Company" target="_blank"><img src="images/tbl_bootco_400.png" alt="Timberland Boot Company" /></a>
        </div>
        <div class="span2">
          <h3 class="code">Code Samples</h3>
          <p class="button_wrap"><a class="btn " target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_bootco/functions.php">PHP &raquo;</a></p>
          <p class="button_wrap"><a class="btn " target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_bootco/template.php">PHP &raquo;</a></p>
          <p class="button_wrap"><a class="btn " target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_bootco/lang_en.xml">XML &raquo;</a></p>
          <p class="button_wrap"><a class="btn " target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_bootco/plugins.js">JS &raquo;</a></p>
      

        </div>
        <div class="span5">
          <h2>Timberland Boot Company<sup>&reg;</sup></h2>
          <hr>
          <h3>Technologies:</h3>
          <div class="row">
            <p class="span1">PHP</p>
            <p class="span1">XML</p>
            <p class="span1">jQuery</p>
          </div><!-- .row -->
          <div class="row">
            <p class="span1">HTML5</p>
            <p class="span1">CSS3</p>

          </div><!-- .row --> 
          <h3>About:</h3>      
          <p>
            A fairly simple site in many respects, Timberland Boot Company still presented some challenges. Chief among these was 
            the fact that the site needed to be multi-lingual. In this instance, the solution was to use xml files to house translations. 
            The xml was parsed in the PHP and output based on the user's language setting.
          </p>   
          <p>
            To allow for the layouts of the various pages to change easily, I coded a number of PHP functions to output modular chunks 
            of html. I also coded a few custom jQuery scripts. 
          </p>
        </div>
      </div><!-- .row -->

      <hr>

      <!-- Timberland Tech -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://technology.timberland.com" title="Visit Timberland Technology Guide" target="_blank"><img src="images/tblTech_400.jpg" alt="Timberland Technology Guide" /></a>
        </div>
        <div class="span2">
          <h3 class="code">Code Samples</h3>
          <p class="button_wrap"><a class="btn" target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_tech/script.js">JS &raquo;</a></p>
          <p class="button_wrap"><a class="btn" target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_tech/functions.php">PHP &raquo;</a></p>
          <p class="button_wrap"><a class="btn" target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/timberland_tech/template.php">PHP &raquo;</a></p>
        </div>
        <div class="span5">
          <h2>Timberland<sup>&reg;</sup> Technology Guide</h2>
          <hr>
          <h3>Technologies Used:</h3>
          <div class="row">
            <p class="span1">AJAX</p>
            <p class="span1">Wordpress</p>          
            <p class="span1">PHP</p>
          </div><!-- .row -->
          <div class="row">
            <p class="span1">jQuery</p>
            <p class="span1">HTML5</p>
            <p class="span1">CSS3</p>
          </div><!-- .row -->     
          <h3>About:</h3>        
          <p>
            My favorite part of this site was using the Wordpress JSON API plugin. This enabled me to leave the Wordpress backend 
            as is, but call in the posts dynamically and without a full page reload. Awesome!
          </p>
          <p>
            As opposed to the xml files of Timberland Boot Company, this site utilizes a multi-lingual Wordpress plugin to manage 
            languages. 
          </p>   
        </div>
      </div><!-- .row -->


      <hr>

      <!-- Koch Brothers -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://www.kochbrothers.democracyforamerica.com/" title="Visit Koch Brothers Movie Night" target="_blank"><img src="images/koch_400.jpg" alt="Koch Brothers Movie Night" /></a>
        </div>
        <div class="span2">
          <h3 class="code">&nbsp;</h3>

        </div>
        <div class="span5">
          <h2>Koch Brothers Movie Night</h2>
          <hr>
          <h3>Technologies Used:</h3>
          <div class="row">
            <p class="span1">SASS</p>
            <p class="span1">Bootstrap</p>
            <p class="span1">Git</p>
          </div><!-- .row -->
          <div class="row">
            <p class="span1">Rails</p>
            <p class="span1">jQuery</p>
            <p class="span1">HTML5</p>
          </div><!-- .row -->
          <h3>About:</h3>        
          <p>
            This was my first use of SASS, Ruby on Rails, Bootstrap and Git - oh my! Built in a very short timeframe with a pair of 
            Rails ninjas (who handled the heavy lifting in that department), it was a lot of fun.
          </p>   
          <p>
            I handled all of the front end development and also came up with the simple design. Unfortunately, it was a short lived 
            project and I wasn't able to hang on to any code samples.
          </p>
        </div>
      </div><!-- .row -->

      <hr>      
      <!-- Loon Echo -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://www.loonecholandtrust.org/" title="Visit Loon Echo Land Trust" target="_blank"><img src="images/loon_400.jpg" alt="Loon Echo Land Trust" /></a>
        </div>
        <div class="span2">
          <h3 class="code">Code Samples</h3>
          <p class="button_wrap"><a class="btn" target="_blank" href="https://github.com/shanejdonnelly/portfolio/blob/master/loon_echo/style.css">CSS &raquo;</a></p>
        </div>
        <div class="span5">
          <h2>Loon Echo Land Trust</h2>
          <hr>
          <h3>Technologies Used:</h3>
          <div class="row">
            <p class="span1">HTML5</p>
            <p class="span1">CSS3</p>
            <p class="span1">PHP</p>
          </div>
          <div class="row">
            <p class="span1">Wordpress</p>
            <p class="span1">jQuery</p>
          </div><!-- .row -->
          <h3>About:</h3>        
          <p>
            One of the requirements for this site was to minimize the use of images. This was quite a challenge given the 
            design of the site, but I enjoyed utilizing CSS to create some neat shapes and effects. I also created a few custom 
            jQuery scripts for the site.
          </p>   
          <p>
            The site also involved creating multiple Wordpress templates, sidebars and widgets.  
          </p>
        </div>
      </div><!-- .row -->
   <hr>

   <!--
      <p class="button_wrap" style="float:right;"><a class="btn btn-large btn-primary" href="portfolio2.php">More &raquo;</a></p>
    -->

<?php include('includes/footer.php'); ?>
