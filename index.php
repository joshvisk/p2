<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password Generator</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php 
	require("password_funs.php");
?>

<!-- HEADER -->
<header>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="text-center">xchd Password Generator</h1>
          <form id="form1" name="form1" method="post">
            <label for="select"><label><?php echo $word_array; ?></label><br>Number of Words:</label>
            <select name="select" id="select">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>s
            <input type="submit" name="submit" id="submit" value="Generate">
            <input type="reset" name="reset" id="reset" value="Reset">
            <label for="textfield">Seperator:</label>
            <input type="text" name="textfield" id="textfield">
          </form>
          <p>&nbsp;</p>
          <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> </p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- / HEADER --> 

<!--  SECTION-1 -->
<section>
  <div class="container ">
    <div class="row">
        <div class="col-lg-offset-3 col-xs-12 col-lg-6">
          <div class="jumbotron">
            <div class="row text-center">
              <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>xchd Password Generator</h2>
              </div>
              <div class="text-center col-lg-12"> 
                <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
                <form role="form" id="feedbackForm" class="text-center">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    <span class="help-block" style="display: none;">Please enter your name.</span></div>
                  <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                    <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                    <span class="help-block" style="display: none;">Please enter a message.</span></div>
                  <span class="help-block" style="display: none;">Please enter a the security code.</span>
                  <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Send</button>
                </form>
                <!-- END CONTACT FORM --> 
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
