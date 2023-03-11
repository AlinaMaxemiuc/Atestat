<!doctype html>
<html lang="ro">
		<!---- Header|This part will not be shown in the browser ---->
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/styles.css" >
	
	<title>Atestat| San Francisco</title>
</head>
		<!---- End of Header ---->
		<!---- The content of the Webpage ---->
<body>
		<!---- Sidescroller Image Banner ---->
	<?php include 'cont/Header.html';?>
		<!---- Top Menu ---->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">San Francisco</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="btn btn-light" href="Index.php" role="button">Acasa</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-light" href="Galerie.php" role="button">Galerie</a>
					</li>
					<li class="nav-item active">
						<a class="btn btn-light" href="Istorie.php" role="button">Despre</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-light" href="Contact.php" role="button">Contact</a>
					</li>
					
				</ul>
		  </div>
	</nav>
		<!---- End of Menu ---->
		<!---- Continut ---->
	<div class="content">
		<?php include 'cont/History.html' ; ?>
	</div>
		<?php include 'cont/footer.html' ; ?>
	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
