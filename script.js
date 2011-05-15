var jQueryScriptOutputted = false;
function directions(){
    $(".body").load("directions.html");
}

function instructors(){
    $(".body").load("instructors.html");
}

function main(){
    $(".body").load("main.html");
}

function contact(){
    $(".body").load("contact.html");
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
