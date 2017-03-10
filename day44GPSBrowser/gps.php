<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>GPS Locations</h1>
<script type="text/javascript">
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(location) {
        console.log(location);
    }, function(error) {
        console.error(error);
    });
}

</script>

</body>
</html>

