<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon</title> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('coming_soon/images/icons/favicon.ico'); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('coming_soon/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('coming_soon/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('coming_soon/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('coming_soon/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('coming_soon/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('coming_soon/css/main.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('<?php echo base_url("coming_soon/images/bg01.jpg"); ?>');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('<?php echo base_url("coming_soon/images/bg02.jpg"); ?>');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('<?php echo base_url("coming_soon/images/bg03.jpg"); ?>');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('<?php echo base_url("coming_soon/images/bg04.jpg"); ?>');"></div>
	</div>

	<div class="flex-col-c-sb size1 overlay1">
		<!--  -->
		

		<!--  -->
		<div class="flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-120">
			<h3 class="l1-txt1 txt-center p-b-35 respon1">
				Coming Soon
			</h3>

			<h2 class="m1-txt3 txt-center">To Your Birthday</h2>

			<div class="flex-w flex-c cd100 respon2">
				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 days" id="days"></span>
					<span class="m1-txt2 p-r-20">Days</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-sm">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 hours" id="hours"></span>
					<span class="m1-txt2 p-r-20">Hr</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-lg">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 minutes" id="minutes"></span>
					<span class="m1-txt2 p-r-20">Min</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-sm">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 seconds" id="seconds"></span>
					<span class="m1-txt2 p-r-20">Sec</span>
				</div>
			</div>
			<br>
			<br>
			<h2 class="m1-txt4 txt-center">Alma Shobrina Syifa'ul Qolbi</h2>
		</div>

		<!--  -->
		
		
	</div>



	<script>
		var url = "<?php echo base_url('login'); ?>";
		// Set the date we're counting down to
		var countDownDate = new Date("Mar 30, 2020 23:59:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get todays date and time
			var now = new Date().getTime();
			
			// Find the distance between now an the count down date
			var distance = countDownDate - now;
			
			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			
			// Output the result in an element with id="demo"
			// document.getElementById("demo").innerHTML = days + "d " + hours + "h "
			// + minutes + "m " + seconds + "s ";

			document.getElementById("days").innerHTML = days;
			document.getElementById("hours").innerHTML = hours;
			document.getElementById("minutes").innerHTML = minutes;
			document.getElementById("seconds").innerHTML = seconds;
			
			// If the count down is over, write some text 
			if (distance < 0) {
				clearInterval(x);
				window.location.href = url;
			}
		}, 1000);
	</script>

<!--===============================================================================================-->	
	<script src="<?php echo base_url('coming_soon/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('coming_soon/vendor/bootstrap/js/popper.js'); ?>"></script>
	<script src="<?php echo base_url('coming_soon/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('coming_soon/vendor/select2/select2.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('coming_soon/vendor/countdowntime/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('coming_soon/vendor/countdowntime/moment-timezone.min.js'); ?>"></script>
	<script src="<?php echo base_url('coming_soon/vendor/countdowntime/moment-timezone-with-data.min.js'); ?>"></script>
	<script src="<?php echo base_url('coming_soon/vendor/countdowntime/countdowntime.js'); ?>"></script>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('coming_soon/vendor/tilt/tilt.jquery.min.js'); ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('coming_soon/js/main.js'); ?>"></script>

</body>
</html>