
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>Invite Generated</title>
		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/blog.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="bootstrap/css/screen.css" media="screen, print" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/print.css" media="print" />
		<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
	</head>
	<body>
	<div class="bg print">
	</div>
		<div class="blog-masthead">
			<div class="container">
				<nav class="blog-nav">
					<a class="blog-nav-item active" href="#">Home</a>
				</nav>
			</div>
		</div>
		<div class="container">
			<center>
				<div class="blog-header">
					<h1 class="blog-title"><?php echo $_REQUEST['title']; ?></h1>
					<p class="lead blog-description"><i>A cordial invitation</i></p>
				</div>
				<div class="row">
					<div class="blog-post">
						<p>Hi! This is <?php echo $_REQUEST['blogname']; ?></p><br>
						<p><?php echo $_REQUEST['text1']; ?></p><br>
						<p><?php echo $_REQUEST['text2']; ?></p><br>
						<h2>Venue</h2>
						<p><?php echo $_REQUEST['text3']; ?></p><br>
						<h2>Time and Date</h2>
						<p><?php echo $_REQUEST['time']; ?></p><br>
						<h2>P.S.</h2>
						<p><?php echo $_REQUEST['text4']; ?></p>
					</div><!-- /.blog-post -->
					<!-- /.blog-main -->
				</div><!-- /.row -->
			</center>
		</div><!-- /.container -->
		<footer class="blog-footer">
			<p>Your presence shall be awaited.</p>
		</footer>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
