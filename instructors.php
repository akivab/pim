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
	      <p>Our current instructors are:</p>
	      <div id="instructors">
		<a target="_blank" href="https://www.facebook.com/profile.php?id=1402701845">
		  <img src="/images/heidi.jpg">
		  <div class="instructor-text">
                    <h3>Heidi Muller</h3>
                    <p>Teaching Zumba&reg;, Turbokick&reg;, and Yoga on Mondays, Tuesdays, Wednesdays, and Thursdays, as well as Zumba&reg; on Saturdays with Jennifer Refici!</p>
		  </div>
		</a>
		<a target="_blank" href="https://www.facebook.com/profile.php?id=1409804050">
		  <img src="/images/jen.jpg">
		  <div class="instructor-text">
                    <h3>Jennifer Refici</h3>
                    <p>Hey Everyone! I will be teaching Zumba&reg; on Wednesdays and Fridays from 5-6.</p>
		  </div>
		</a>
		<a href="https://www.facebook.com/profile.php?id=677173242">
		  <img src="/images/carol.jpg">
		  <div class="instructor-text">
                    <h3>Carol Fague</h3>
                    <p>Teaching Zumba&reg; on Tuesdays from 4-5pm!</p>
		  </div>
		</a>
	      </div>
	    </div>
	  </div>
	</div>
      </div>
