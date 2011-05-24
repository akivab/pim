<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/dance-studio-new/css/reset.css" />
    <link rel="stylesheet" href="/dance-studio-new/css/style.css" />
  </head>
  <body>
    <div class="header">
      <div class="body">
	<a href="/dance-studio-new"><div id="logo">palmyra<br />in motion</div></a>
	<!-- start of menu -->
	<div class="menu">
	  <ul>

	    <?php
	       $words = array( "contact", "directions", "instructors", "schedules","home");
	       for($i=0; $i<count($words); $i++){
	          $j = $words[$i];
		  echo "<li><a href='/dance-studio-new?p=$j'";
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

	<a target="_blank" href="https://www.facebook.com/pages/Palmyra-In-Motion/210715818959695"><img src='/dance-studio-new/images/Facebook.png' /></a>
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<a href="http://twitter.com/share" target="_blank"><img src='/dance-studio-new/images/Twitter.png' /></a>
      </div>
    </div>
  </body>
</html>
