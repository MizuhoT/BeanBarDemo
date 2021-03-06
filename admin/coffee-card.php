<!DOCTYPE html>
<html>
<title>Coffee Name</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="shortcut icon" href="../web-images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../web-images/favicon.ico" type="image/x-icon">

<style>
	#back {
			height:3in;
			width:5in;
			margin:.5in;
			padding-top:.125in;
			background-image: url("../web-images/coffee-card-background.jpeg");
   			background-color: #cccccc;
		  }

	#card {
			margin: auto;
		 	padding:.25in;
			height:2.75in;
			width:4.75in;
			border:4px solid brown;
			border-radius: 5px;
		  }

	#name {
			margin-top: 0;
			text-align:center;
			font-family: 'Pacifico', cursive;
			font-size: 36px
		  }

	#farm {
			text-align: center;
			margin-bottom: 0;
		  }



	#caff {
			margin-top:0;
			text-align: center;
			font-size: 18px;
		  }

   	#desc {
			text-align: center;
			font-size:18px;
		  }
</style>

<body>
	<div id="back">
		<div id="card">
			<h4 id="name"><?= $_GET['c_name'] ?></h4>

			<h4 id="farm"><em><?= $_GET['farm_name'] ?></em></h4>

			<p id="caff">Caffeine: <?= $_GET['caff'] ?><p>

			<p id="desc"><?= $_GET['desc'] ?><p>
		</div>
	</div>
</body>

</html>
