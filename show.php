<!DOCTYPE html>
<html>
<head>
	<title>Timer Example</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<h1>Timer Example</h1>
	<p>Click the button to start the timer:</p>
	<button id="startBtn">Start Timer</button>
	<p id="timer"></p>

	<script>
		var startTime;
		var interval;

		$("#startBtn").click(function() {
			startTime = Date.now();
			interval = setInterval(updateTimer, 1000);
		});

		function updateTimer() {
			var elapsedTime = Math.floor((Date.now() - startTime) / 1000);
			var hours = Math.floor(elapsedTime / 3600);
			var minutes = Math.floor((elapsedTime - (hours * 3600)) / 60);
			var seconds = elapsedTime - (hours * 3600) - (minutes * 60);
			$("#timer").text(hours + ":" + minutes + ":" + seconds);
		}
	</script>
</body>
</html>