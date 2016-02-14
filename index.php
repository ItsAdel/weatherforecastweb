
<!doctype html>
<html>
<head>
	<title>First Webpage</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<style>

	html, body {
		height: 100%;
	}

	.container {
		background-image: url("pink-sky.jpeg");
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center;
		padding-top: 150px;
	}

	.center {
		text-align: center;
	}

	p {
		padding-top: 15px;
		padding-bottom: 15px;
	}

	button {
		margin-top: 20px;
	}

	.alert {
		margin-top: 20px;
		display: none;
	}

	</style>

</head>

<body>

	<div class="container">
		
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3 center">
				
				<h1 class="center">Weather forecast</h1>
				<p class="lead center">Type in the name of a city to find the weather forecast!</p>

				<form>

					<div class="form-group">
							
						<input type="text" class="form-control" placeholder="Paris, London, etc..." name="city" id="city" />

					</div>

					<button id="findMyWeather" class="btn btn-success btn-lg">Find the weather</button>

				</form>

				<div id="success" class="alert alert-success">Success</div>
				<div id="fail" class="alert alert-danger">Could not find the data for that city. Please try another city.</div>
				<div id="noCity" class="alert alert-danger">Please enter a city</div>

			</div>

		</div>

	</div>

	<script>

		$("#findMyWeather").click(function(event) {

			event.preventDefault();

			$(".alert").hide();

			if ($("#city").val()!="") {

				$.get("scraper.php?city="+$("#city").val(), function(data) {

					if (data=="") {

						$("#fail").fadeIn(700);

					} else {

						$("#success").html(data).fadeIn(700);

					}

				});

			} else {

				$("#noCity").fadeIn(700);
				

			}

		});

	</script>

</body>
 
</html>