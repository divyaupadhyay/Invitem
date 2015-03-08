
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Blogway</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
    <!--<script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
       var y = document.forms["myForm"]["pass"].value;window.location.href ="yo.php";
    if (x == "harry" && y =="harry") {
       window.location.href ="yo.php";
        return true;
    }

}
</script> -->
<script language="javascript">
function validate(form) {
  if (form.name.value=="harry") { 
    if (form.password.value=="harry") { window.open('gallery.php') } 
    else { alert("Invalid Password") }}
  else {  alert("Invalid UserID")}
}
</script>
</head>

  <body>

    <div class="container">

      <form  name="login" class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input type="name" id="name" class="form-control" placeholder="Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="validate(this.form)" >Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
