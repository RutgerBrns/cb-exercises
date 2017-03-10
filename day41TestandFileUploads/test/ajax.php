<!DOCTYPE html>
<html>
<head>
	<title>Lists</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<h3>all tasks</h3>
<ul id="all_tasks">
  <li class="task done">Wake up</li>
  <li class="task done">Get up</li>
  <li class="task">Have breakfast</li>
  <li class="task done">Go to school</li>
  <li class="task done">Start test</li>
  <li class="task">Finish test</li>
</ul>

<br>

<h3>done tasks</h3>
<ul id="done_tasks">
</ul>

</body>
</html>

<script type="text/javascript">

/* var xhttp;
if (window.XMLHttpRequest) {
	xhttp = new XMLHttpRequest();
} else {
    	// code for IE6, IE5
xhttp = new ActiveXObject("Microsoft.XMLHTTP");
} */

$(document).ready(function(){

	$('#all_tasks li.done').appendTo('#done_tasks').html();

});

</script>


