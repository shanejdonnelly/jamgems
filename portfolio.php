<?php 
  include('includes/functions.php'); 
  do_header('Portfolio', '');
  
  include('includes/nav.php');
?>

    <div class="container">
      
      <!-- Portfolio -->
      <!-- SG -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="https://supremegolf.com" title="Visit Supreme Golf" target="_blank"><img src="images/sg-desktop-tall.png" alt="Supreme Golf"/></a>
<br><br>
          <!--a class="portfolio_image" href="https://supremegolf.com" title="Visit Supreme Golf" target="_blank"><img src="images/sg-mobile.png" alt="Supreme Golf"/></a-->
        </div>
        <div class="span1">&nbsp; </div>

        <div class="span6">
          <h2>Supreme Golf</h2>
          <a href="https://github.com/shanejdonnelly/portfolio/tree/master/supreme_golf" target="_blank" title="Supreme Golf Code Samples">View code samples</a>
          <a href="https://supremegolf.com" class="live-site-link" target="_blank" title="Visit Supreme Golf">View live site</a>
          <hr>
          <h3>Technologies:</h3>
          <div class="row">
            <p class="span1">React</p>
           <p class="span1">SASS</p>  
            <p class="span1">Rails</p>
          </div><!-- .row -->
          <div class="row">
            <p class="span1">jQuery</p>
           <p class="span1">Git</p>  
            <p class="span1">HAML</p>
          </div><!-- .row -->

          <h3>About:</h3>      
<p>
At Supreme Golf, I had a great deal of freedom to shape the front end technologies we used, and truly owned the front end code. The biggest project I worked on at Supreme Golf was a site re-design. As part of this project I re-coded the site css in a more modular fashion, established a living styleguide and made the site responsive. Another noteworthy project I completed for Supreme Golf was a single page application using React and Backbone that was powered by the Supreme Golf API.  
</p>
    <ul>
      <li>Responsible for making the web application fully responsive as part of v2 rebuild</li>
      <li>Established a CSS styleguide</li>
      <li>Recoded site CSS from the ground up, using SMACSS and BEM principles</li> 
      <li>Created a SPA microsite using React and Backbone, with data from the SG API</li>
      <li>Established and regularly contributed to a company Wiki</li> 
      <li>Worked daily with RAILS templates and helpers</li> 
    </ul> 


        </div>
      </div><!-- .row -->

      <hr>


      <!-- Bootco Tablet site -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://www.timberlandbootcompany.com/fall14" title="Visit Timberland's Bootco iPad site" target="_blank"><img src="images/ipad_bootco_400.jpg" alt="Timberland Bootco"/></a>
        </div>
        <div class="span1">&nbsp; </div>

        <div class="span6">
          <h2>Timberland iPad Bootco</h2>
          <a href="https://github.com/shanejdonnelly/portfolio/tree/master/timberland_ipad_bootco " target="_blank" title="Code Samples">View code samples</a>
          <a href="http://timberlandbootcompany.com/fall14" class="live-site-link" target="_blank" title="Visit Timberland iPad Bootco">View live site</a>
          <hr>
          <h3>Technologies:</h3>
          <div class="row">
            <p class="span1">Javascript</p>
           <p class="span1">HTML5</p>  
            <p class="span1">jQuery</p>
          </div><!-- .row -->
          <div class="row">
         
            <p class="span1">CSS3</p>

          </div><!-- .row --> 
          <h3>About:</h3>      
          <p>
		This is an iPad only sales tool that I built for Timberland. It was a rush project and very simple at it's core, so it is just a flat HTML site. Unlike most other 
Timberland sites, it doesn't require multiple language support and did not need to be built on a framework. </p>
<p>
One of the more interesting pieces was coding the overlay elements that display the shoes and bags in more detail. I was very impressed with the <a href="http://www.idangero.us/sliders/swiper/api.php" title="iDangerous slider">iDangerous slider</a>. It was easy to work with and very full featured. 
</p>
        </div>
      </div><!-- .row -->

      <hr>

      <!-- Timberland Pro Seeding -->
      <div class="row portfolio">
        <div class="span4">
          <a class="portfolio_image" href="http://loyalty.timberlandpro.com" title="Visit Timberland Pro Seeding" target="_blank"><img src="images/pro_seeding_400.jpg" alt="Timberland Pro Seeding" /></a>
        </div>
        <div class="span1">&nbsp; </div>
        <div class="span6">
          <h2>Timberland Pro Seeding</h2>
          <a href="https://github.com/shanejdonnelly/portfolio/tree/master/timberland_proseeding" target="_blank" title="Code Samples">View code samples</a>
          <hr>
          <h3>Technologies:</h3>
          <div class="row">
            <p class="span1">Javascript</p>
            <p class="span1">Backbone.js</p>
            <p class="span1">jQuery</p>
          </div><!-- .row -->
          <div class="row">
            <p class="span1">HTML5</p>
            <p class="span1">CSS3</p>
            <p class="span1">XML</p>


          </div><!-- .row --> 
          <!--h3>About:</h3>      
          <p>
            One of the biggest challenges with this site - for the front end - was dealing with the 75+ large images that lived on the 
            main page. The <a href="http://www.appelsiini.net/projects/lazyload" title="Lazyload jQuery plugin" >Lazyload jQuery plugin</a> fit the bill perfectly. It uses data tags to 
            house the actual image src and a placeholder image until the image is near the viewport.
          </p>
          <p>
            I didn't use a javascript framework for this site, instead relying 
            on a few namespace chunks and jQuery plugins where appropriate to keep the code lean and organized. I also worked closely with the back end developer on this project to integrate the front end code with a custom PHP framework.</p --> 
        </div>
      </div><!-- .row -->

      <hr>

      
      <!-- Timberland Lookbook -->
      <div class="row portfolio">
        <div class="span4">
          <img src="images/tbl_lookbook_400.jpg" alt="Timberland Lookbook" />
        </div>
        <div class="span1">&nbsp; </div>

        <div class="span6">
          <h2>Timberland Lookbook<sup>&reg;</sup></h2>
          <a href="https://github.com/shanejdonnelly/portfolio/tree/master/timberland_lookbook" target="_blank" title="Code Samples">View code samples</a>
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
        <div class="span1">&nbsp; </div>

        <div class="span6">
          <h2>Timberland<sup>&reg;</sup> PRO</h2>
          <a href="https://github.com/shanejdonnelly/portfolio/tree/master/timberland_pro" target="_blank" title="Code Samples">View code samples</a>
          <a href="http://timberlandpro.com" class="live-site-link" target="_blank" title="Visit Timberland PRO">View live site</a>
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
          <img src="images/tbl_bootco_400.png" alt="Timberland Boot Company" />
        </div>
        <div class="span1">&nbsp; </div>

        <div class="span6">
          <h2>Timberland Boot Company<sup>&reg;</sup></h2>
          <a href="https://github.com/shanejdonnelly/portfolio/tree/master/timberland_bootco" target="_blank" title="Code Samples">View code samples</a>

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
        <div class="span1">&nbsp; </div>
        <div class="span6">
          <h2>Timberland<sup>&reg;</sup> Technology Guide</h2>
          <a href="https://github.com/shanejdonnelly/portfolio/tree/master/timberland_tech" target="_blank" title="Code Samples">View code samples</a>
          <a href="http://technology.timberland.com" class="live-site-link" target="_blank" title="Visit Timberland Tech">View live site</a>
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
          <img src="images/koch_400.jpg" alt="Koch Brothers Movie Night" />
        </div>
        <div class="span1">&nbsp; </div>
        <div class="span6">
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
            <p class="span1">Design</p>
          </div><!-- .row -->
          <h3>About:</h3>        
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
        <div class="span1">&nbsp; </div>
        <div class="span6">
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
