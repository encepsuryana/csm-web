<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>404 Page Not Found!</title>
	<link href="https://fonts.googleapis.com/css?family=Francois+One|Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		::selection { background-color: #58A7DD; color: white; }
		::-moz-selection { background-color: #58A7DD; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#container {
			margin: 10px;
		}

		.not-found p {
		}
	</style>
</head>
<body>
	<div id="container" style="background-image: url(https://www.gstatic.com/bfe/images/verification/banner_background.svg); background-size: cover;">
		<div class="not-found">
			<div class="col-md-12">
				<div class="col-md-12" style="margin-top: 100px; text-align: center;">
					<img src="https://icon-library.net/images/found-icon/found-icon-20.jpg"></img>
				</div>
				<div class="col-md-12" style="margin-top: 20px; text-align: center;">
					<h1><strong>:(</strong></h1>
					<h2><strong><?php echo $heading; ?>!</strong></h2>
					<p><i><?php echo $message; ?></i></p>
				</div>
			</div>
		</div>

	</div>
</body>
</html>