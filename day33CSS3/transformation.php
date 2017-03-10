<!DOCTYPE html>
<html>
<head>
	<title>CSS Transformation</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


	<script type="text/javascript">
	$(function() {	

		$('.start').click(function() {
			$('.box').fadeout(6000);
		});

	});
		</script>	


</head>
<body>

	<button class="start" id="start">Start Transition</button>

	<div class="box" id="box">

		<p>this is the content of the box.</p>	

	</div>

	<div class="box2" id="box2">

		<p>this is the content of the box.</p>	

	</div>

</body>
</html>


<style type="text/css">
	
.box {
	width: 140px;
	height: 140px;
	border: 1px solid blue;
	padding: 5px;
	background-color: rgba(0, 0, 230, 0.3);
}

.box2 {
	width: 140px;
	height: 140px;
	border: 1px solid red;
	padding: 5px;
	background-color: rgba(230, 0, 0, 0.3);
}

#box {
	/* change the position of the element with id 'box' */
	transform: translate(200px, 100px) rotate(45deg) rotateX(23deg);
}

#box2 {
	/* change the position of the element with id 'box' */
	transform: translate(150px, 50px);
}

</style>