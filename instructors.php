      <!-- start of directions -->
      <div class="main-top">
        <div class="body">
	  <div class="detailed-text">
	    <h1>Instructors</h1>
	    <div id="instructor-info">
	      <script>
		var applied = false;
		function apply(){
		     if(applied){ return; }
		     applied = true;
		     var txt2="<iframe src=\"https://spreadsheets.google.com/a/palmyrainmotion.com/spreadsheet/viewform?hl=en_US&formkey=dDFFby1uemd3UkJBX0tMQkI2c25wSmc6MQ#gid=0\" width=\"630\" height=\"550\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading...</iframe>";
		     var txt1 = document.getElementById('instructor-info').innerHTML;
		     var txt3 = "<a style='float: left; clear: both;' href='javascript: next_instructors();'><img style='width:30px; height: 30px;' src='/images/More.png' /></a>";
		     document.getElementById('instructor-info').innerHTML=txt2+txt1;
		     var div = document.getElementsByClassName("main-top")[0].className = "instructor-top";
		}
	      </script>
	      <p><a href="javascript: apply()">Apply to instruct.</a></p>
	      <p><div id="alert">
		  Leah got her certification in gentle yoga this past February. Classes in gentle yoga and group exercise will be added over time. Please check the schedule on ongoing basis.
		</div></p>
			
	      <p>Our current instructors are:</p>
	      <div id="instructors">
		<a href>
		  <img src="/images/leah.jpg">
		  <div class="instructor-text">
		   <h3>Leah Bamberger</h3>
		   <p>Leah received her Zumba license this past October after years of attending Zumba classes across Rochester. She recently got her license in gentle yoga as well, and is trained in CPR.</p>
		  </div>
		</a>
		<!--
		<a href>
		  <img src="/images/hailee.jpg">
		  <div class="instructor-text">
                    <h3>Hailee Winston</h3>
                    <p>Hailee loves to teach Zumba.  Hailee lives in Palmyra, and is currently a senior at  Pal-Mac High School.</p>
		  </div>
		</a>
		-->
	      </div>
	    </div>
	  </div>
	</div>
      </div>
