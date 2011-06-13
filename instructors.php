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
		<a href="?p=instructors">
		  <img src="/images/Man1.png">
		  <div class="instructor-text">
                    <h3>Sam Dance-Instructor</h3>
                    <p>Zumba dance instructor of many years, fan of music, likes to dance a lot, etc</p>
		    <span>www.sam-dance-instructor.com</span>
		  </div>
		</a>
		<a href="?p=instructors">
		  <img src="/images/Woman.png">
		  <div class="instructor-text">
                    <h3>Nancy Ballerina</h3>
                    <p>Ballerina, professional. I like to dance! Come join me in my tutu while I spin and dance.</p>
		    <span>www.nancy-ballet.com</span>
		  </div>
		</a>
		<a href="?p=instructors">
		  <img src="/images/Man2.png">
		  <div class="instructor-text">
                    <h3>Hungry Jake</h3>
                    <p>My name is Hungry Jake, OK, OK. I'm not a dance instructor. But I enjoy burritos! Please join my burrito eating class.</p>
		    <span>www.hungry-jake.com</span>
		  </div>
		</a>
	      </div>
	    </div>
	  </div>
	</div>
      </div>
