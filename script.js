var jQueryScriptOutputted = false;
function loadpage(path){
    try{
	$(".body").load(path+".html");
    }
    except (err){
	$(".body").load("main.html");
    }
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
		loadpage(path);
	    });
    }
    
}
initJQuery();
