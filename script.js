var jQueryScriptOutputted = false;
function loadpage(p){
    if(p){
	href = p.attr("href");
    }
    else{
	href = window.location.href;
    }
    var paths = href.split("/");
    var path=paths[paths.length-1];
		
    if(path!=""){
	$(".body").load(path+".html");
    }
    else{
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
		loadpage();
		$("a").click(function(){loadpage($(this))});
	    });
    }
    
}
initJQuery();
