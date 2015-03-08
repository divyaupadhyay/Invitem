
<?php    
if(isset($_POST['SubmitButton'])){
$src = $_POST['optradio'];
$dst = $_POST['name'];
copy($src, $dst."php");

}    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Blogway Choose Template</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/gallery.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Choose a Template</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <form  name="blog" method="post" action="yo.php">
       
           <div class="col-md-4">
            </div>
             <div class="col-md-4">
<h2><center>Create your Invitation!</center></h2>
        <br>
        <label for="name" class="sr-only">Enter your name</label>
        <input type="text" id="blogname" name="blogname" class="form-control" placeholder="Enter your Name" required autofocus>
</div>

         <div class="col-md-4">
            </div>
       
  <div class="row">
      <br><br>
       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h1 class="page-header">Choose a Template from Gallery for your invitation</h1>
<br>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="img/blog.png" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><input type="radio" name="optradio" value="blog.php">Blue</label></h4>
              <span class="text-muted">Blue Header and plain style</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="img/blog2.png" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><input type="radio" name="optradio" value="blog2.php">Black</label></h4>
              <span class="text-muted">Black background</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="img/blog3.png" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><input type="radio" name="optradio" value="blog3.php">Grey</label></h4>
              <span class="text-muted">Simple grey template</span>
            </div>
         
          </div>
          </div>
           </div>
            <div class="col-md-4">
            </div>
             <div class="col-md-4">
<center><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Create</button></center>
</div>
 <div class="col-md-4">
  </div>
      </form>       
        
        
     
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrapt/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

          
  </body>
</html>


