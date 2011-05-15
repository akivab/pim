var jQueryScriptOutputted = false;
function main(){
    var text =  "";
    text += "<p>Palmyra In Motion is a new location for fitness in Palmyra.</p>";
    text += "<p>Located on 112 Fayette right off Main, this facility is currently under development and will be opening in Summer 2011.</p>";
    text += "<p>This exciting new location will bring many great dance and exercise classes to Palmyra.</p>";
    text += "<p>Check out this website often for updates.</p>";
    $("#body-text").html(text);
    $("#image").html("<img src='dancers.jpg' />");
}


function directions(){
    var text = "<p>We're located at 112 Fayette Street in Palmyra, NY.</p>";
    text+="<p>Parking is available in several convenient locations (see the map to the right). There is a municipal parking lot off of Cuyler street (the blue block), as well as parking on main (in yellow and red).</p>";
    text += "<p>Feel free to look at the map in detail on <a target='_blank' href='http://maps.google.com/maps/ms?ie=UTF8&hq=&hnear=0x89d12adacf7a0461:0xeb8296142f8fc089,112+Fayette+St,+Palmyra,+NY+14522&gl=us&hl=en&t=h&msa=0&msid=211963942089136024299.0004a347b4d533a86cce5&ll=43.063166,-77.230067&spn=0.003135,0.004281&z=17&source=embed'>Google Maps</a></p>";
    $("#body-text").html(text);
    $("#image").html('<iframe width="400" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hq=&amp;hnear=0x89d12adacf7a0461:0xeb8296142f8fc089,112+Fayette+St,+Palmyra,+NY+14522&amp;gl=us&amp;hl=en&amp;t=h&amp;msa=0&amp;msid=211963942089136024299.0004a347b4d533a86cce5&amp;ll=43.063166,-77.230067&amp;spn=0.003135,0.004281&amp;z=17&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?ie=UTF8&amp;hq=&amp;hnear=0x89d12adacf7a0461:0xeb8296142f8fc089,112+Fayette+St,+Palmyra,+NY+14522&amp;gl=us&amp;hl=en&amp;t=h&amp;msa=0&amp;msid=211963942089136024299.0004a347b4d533a86cce5&amp;ll=43.063166,-77.230067&amp;spn=0.003135,0.004281&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">Palmyra In Motion</a> in a larger map</small>');
}

function instructors(){
    var text = "<p>We are currently seeking applications for new classes! Feel free to apply if you are interested in leading a dance class.</p>";

    $("#body-text").html(text);

    $("#image").html('<iframe src="https://spreadsheets.google.com/embeddedform?formkey=dFFPUGtQcUxoZWl5VDY3VTBLN1hFZVE6MQ" width="400" height="450" frameborder="0" marginheight="0" marginwidth="0" scroll="no">Loading...</iframe>');
}

function contact(){
    var text = "<p>For any inquiries, please contact us at:</p>";
	text += "<p>(315) 332 1088.</p>";
	text += "<p>Or, email us at:</p>";
	text += "<a href='mailto:contact@palmyrainmotion.com'>contact@palmyrainmotion.com</a>";
    $("#body-text").html(text);

    $("#image").html("<img width=400 height=400 src='contact.png' />");
}

function initJQuery() {
    //if the jQuery object isn't available
    if (typeof(jQuery) == 'undefined') {
        if (! jQueryScriptOutputted) {
            //only output the script once..
            jQueryScriptOutputted = true;
            
            //output the script (load it from google api)
            document.write("<scr" + "ipt type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></scr" + "ipt>");
        }
        setTimeout("initJQuery()", 50);
    } else {
	
        $(function() {
		var paths = window.location.href.split("/");
		var path=paths[paths.length-1];
		if(path=="directions"){
		    directions();
		}
		else if(path=="instructors"){
		    instructors();
		}
		else if(path=="contact"){
		    contact();
		}
		else{
		    main();
		}
		$("#head").click(function(){ 
			main(); 
		    });
		$("#directions").click(function(){
			directions(); 
		    });
		$("#contact").click(function(){
			contact(); 
		    });
		$("#instructors").click(function(){
			instructors(); 
		    });
		
	    });
    }
    
}
initJQuery();
