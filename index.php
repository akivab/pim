<!doctype html>
<html>
  <head>
    <title>Palmyra in Motion</title>
    <meta name="description" content="A fitness center for Palmyra, coming Summer 2011." />
    <meta name="keywords" content="fitness, palmyra, rochester, zumba, ballet, dancing, dance studio" />
    <link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <div class="header">
      <div class="body">
	<a href="/"><div id="logo">palmyra<br />in motion</div></a>
	<!-- start of menu -->
	<div class="menu">
	  <ul>

	    <?php
	       $words = array( "contact", "about", "directions", "instructors", "schedules","home");
	       for($i=0; $i<count($words); $i++){
	          $j = $words[$i];
		  echo "<li><a href='?p=$j'";
		  if($_GET["p"] == $j){ 
		    echo "class='selected'";
	          }
                  echo ">$j</a></li>";
	       }
            ?>
	  </ul>
	</div>
      </div>
    </div>
    <!-- end of menu -->
    <?php
       if(in_array($_GET["p"], $words)){
         require_once($_GET["p"].".php");
       }
       else{
         require_once("home.php");
      }
   ?>
    <div class="footer">
      <div class="body">
	<div>Palmyra in Motion &copy 2011</div>
	<div>112 Fayette St, Palmyra NY</div>
	<div>contact@palmyrainmotion.com</div>

	<a target="_blank" href="https://www.facebook.com/pages/Palmyra-In-Motion/210715818959695"><img src='/images/Facebook.png' /></a>
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<a href="http://twitter.com/#!/palmyrainmotion" target="_blank"><img src='/images/Twitter.png' /></a>
      </div>
    </div>
    <script type="text/javascript"> 
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23367828-1']);
      _gaq.push(['_trackPageview']);
      
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
</html>
