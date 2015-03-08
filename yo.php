
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
   

    <title>Invitem! Create a new invite</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/stickyfooter.css" rel="stylesheet">
    <link href="bootstrap/css/yo.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="img/eight_horns.png">

    <!-- Begin page content -->
    <div class="container">

      <div class="page-header">
        <h1><b>Create a new invite!</b></h1>
      </div>
      <p class="lead"><i>Start writing a new invitation to your friends.</i></p>
      <p> 
<?php echo "<form action=".$src.">";  ?> 

      <div class="form-group">
 <h2>Title for the new invitation:<input type="text" name="title" id="textfield" value="My Birthday Party" /><br></h2>

 

 <h3>Text goes here...</h3>
 <h4>Paragraph 1</h4>

<textarea name="text1" id="textarea" cols="100" rows="10">
Lorem ipsum dolor sit amet, id pri admodum invidunt. Scripta denique ad pro, eum ne suscipit voluptatum disputationi. An iusto consulatu duo. Vidit habeo rationibus mea no.

Noluisse verterem eos cu, cum velit discere philosophia eu. Ex nibh ludus eam, in efficiendi intellegam has. Eam dicit fastidii expetenda et. Commune legendos efficiantur eam an, has novum sonet consul ea. Pro ne suas alterum periculis, ne quo nonumy molestiae honestatis, ex sit aeque democritum percipitur. Quo impedit neglegentur ea, eu vocent aperiri dolorum sea. Nam cu nonumy instructior, ne mei labores qualisque.
</textarea>

 <h4>Paragraph 2</h4>

<textarea name="text2" id="textarea" cols="100" rows="10">
Lorem ipsum dolor sit amet, id pri admodum invidunt. Scripta denique ad pro, eum ne suscipit voluptatum disputationi. An iusto consulatu duo. Vidit habeo rationibus mea no.

Noluisse verterem eos cu, cum velit discere philosophia eu. Ex nibh ludus eam, in efficiendi intellegam has. Eam dicit fastidii expetenda et. Commune legendos efficiantur eam an, has novum sonet consul ea. Pro ne suas alterum periculis, ne quo nonumy molestiae honestatis, ex sit aeque democritum percipitur. Quo impedit neglegentur ea, eu vocent aperiri dolorum sea. Nam cu nonumy instructior, ne mei labores qualisque.
</textarea>

 <h4>Venue:</h4>

<textarea name="text3" id="textarea" cols="100" rows="3">
Ea porro feugiat duo.
</textarea>
<h4>Time and Date: <br><input type="text" name="time" value="6 p.m. on Tuesday" id="textfield" /><br></h4>


<h3>Footnote</h3>

<textarea name="text4" id="textarea" cols="100" rows="5">
Unum clita decore qui at, ex molestie mediocritatem cum. Nullam iisque laboramus ius te, eum scaevola partiendo te. Sit ea idque oporteat phaedrum. Ad vel tation dolorum, vel ex urbanitas referrentur. Te mel singulis perpetua, ferri scripta oportere id vim.

</textarea>
<?php echo "<input type=hidden value=".$dst." name=blogname>"; ?>
     <br><br>
      <button type="submit" class="btn btn-success">Submit</button>
</form></p>
    </div>
  </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Voice your thoughts to reach out to your friends.</p>
      </div>
    </footer>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?
$frominput = $_POST['title']; 
$fromtextarea1 = $_POST['text1']; 
$fromtextarea2 = $_POST['text2']; 
$fromtextarea3 = $_POST['text3']; 
$fromtextarea4 = $_POST['text4'];
$fromtime = $_POST['time']; 
echo $frominput;
echo $fromtextarea1;
echo $fromtextarea2;
echo $fromtextarea3;
echo $fromtime;
echo $fromtextarea4;


?>