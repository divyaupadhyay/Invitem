
<?php
$src = $_REQUEST['optradio'];
$dst = $_REQUEST['blogname'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Sticky Footer Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/stickyfooter.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Create a new post!</h1>
      </div>
      <p class="lead">Start writing a new blog post for your blog.</p>
      <p> 
<?php echo "<form action=".$src.">";  ?> 

      <div class="form-group">
 <h2>Title for the new post:<input type="text" name="title" id="textfield" /><br></h2>

 <h3>Text goes here...</h3>

<textarea name="text" id="textarea" cols="100" rows="20">

</textarea>
<?php echo "<input type=hidden value=".$dst." name=blogname>"; ?>
     
      <button type="submit" class="btn btn-success">Submit</button>
</form></p>
    </div>
  </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Voice your thoughts to the world.</p>
      </div>
    </footer>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?
$frominput = $_POST['title']; 
$fromtextarea = $_POST['text']; 
echo $fromtextarea;
echo $frominput;
?>