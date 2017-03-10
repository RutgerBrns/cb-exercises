<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

</body>
</html>


<script type="text/javascript">

var xhttp;
if (window.XMLHttpRequest) {
	xhttp = new XMLHttpRequest();
} else {
    	// code for IE6, IE5
xhttp = new ActiveXObject("Microsoft.XMLHTTP");
} 

$(document).ready(function(){

	$.ajax({
	    “url” : "http://classes.codingbootcamp.cz/assets/classes/tests/4/response.php",
	    “type” : “post”,
	    “data” : {
			“a” : “value”
	    }
	})
	.done(function(data) {
	    var parsed = JSON.parse(data);
        console.log(parsed.result);  
	})
	.fail(function(jqXHR, textStatus) {
	    alert( "error" );
	})
	.always(function() {
	    alert( "complete" );
	});

});

</script>