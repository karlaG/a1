<?php require('quoteGenerator.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Karla Guardado</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='index_style.css' rel='stylesheet'>
</head>

<body>
	<div>
		<h1>KARLA GUARDADO:</h1>

		<img src='images/me.jpg' alt='Karla Guardado'>

		<p>
			Hello, my name is Karla Guardado and welcome to my page. I am currently a
			Data Specialist at the Harvard-Smithsonian Center for Astrophycis. I am part
			of the Director's Office, where we manage some of the intricaces of running
			the Chandra X-ray Observatory. Before that, I was an undergrad at MIT.
			I am here to learn the art of creating dynamic web applications. I have
			some prior experience doing so, but I'd like to learn for myself how to
			create and use all components of the process from sratch.
		</p>

		<h2>Quote of the day:</h2>

		<blockquote>
			<?php echo $quotes[2]; ?>
		</blockquote>
	</div>

</body>
</html>
